<?php

namespace App\Http\Controllers\Cdf;

use App\Http\Controllers\Controller;
use App\Mail\AllocatedAmount;
use App\Mail\BursaryAllocatedpoints;
use App\Models\BursaryApplication;
use App\Models\CountyConstituency;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CdfAccountController extends Controller
{
    public function index()
    {
        $checkcounty = CountyConstituency::where('user_manager_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where('bursary_county_id', $checkcounty->id)->get();
        $acceptedbursaries = BursaryApplication::where(['bursary_county_id' => $checkcounty->id, 'school_status' => 'school'])->get();
        return view('cdf.dashboard', compact(['bursaries', 'acceptedbursaries']));
    }

    public function applicationdetails($id)
    {
        $checkcounty = CountyConstituency::where('user_manager_id', auth()->user()->id)->get()->first();
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursary = BursaryApplication::findOrFail($id);
        $student = Student::where('id', $bursary->bursary_student_id)->get()->first();
        return view('cdf.bursary-application-details', compact('bursary', 'student'));
    }

    public function computepoints($id)
    {
        $bursary = BursaryApplication::findOrFail($id);

        if ($bursary->student_helb_status == "Yes") {
            $helbapply = 0;
        } else {
            $helbapply = 1;
        }
        if ($bursary->student_category == "KUCCPS") {
            $admcategory = 3;
        } else {
            $admcategory = 4;
        }

        if ($bursary->financial_assistance == "Never Received") {
            $fassistance = 4;
        } else {
            $fassistance = 2;
        }

        if ($bursary->family_status == "Total Orphan") {
            $familystatus = 9;
        } else if ($bursary->family_status == "Single Parent Orphan") {
            $familystatus = 8;
        } else if ($bursary->family_status == "Single Parent") {
            $familystatus = 7;
        } else if ($bursary->family_status == "Separated or Divorced Parent") {
            $familystatus = 6;
        } else {
            $familystatus = 5;
        }

        if ($bursary->special_needs == "Yes") {
            $specialneeds = 5;
        } else {
            $specialneeds = 2;
        }

        if ($bursary->family_income_loss == "Yes") {
            $familyloss = 4;
        } else {
            $familyloss = 2;
        }

        $totalpoints = $helbapply + $admcategory + $fassistance + $familystatus + $specialneeds + $familyloss;
        $bursary->points_earned = $totalpoints;
        $bursary->save();
        $receiver = $bursary->bursaryuser->email;
        $topic = "Application Points Allocated";
        $message = "Hello," . $bursary->bursaryuser->name . ", Your application after a successfull consideration earns " . $totalpoints . ". It will be these points we will use to award you the appropriate amount.Bursary Tracking ID is " . $bursary->bursary_id;
        $bursary->school_status = "cdf";
        $bursary->bursary_status = "cdf";
        $bursary->save();
        Mail::to($receiver)->send(new BursaryAllocatedpoints($receiver, $topic, $message));

        Toastr::success('Student has been Awarded points.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }

    public function allocatedpoints()
    {
        $checkcounty = CountyConstituency::where('user_manager_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where('bursary_county_id', $checkcounty->id)->get();
        $acceptedbursaries = BursaryApplication::where(['bursary_constituency_id' => $checkcounty->id, 'school_status' => 'cdf'])->get();
        return view('cdf.allocated-points', compact(['bursaries', 'acceptedbursaries']));
    }
    public function awardamount()
    {
        $checkcounty = CountyConstituency::where('user_manager_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where('bursary_county_id', $checkcounty->id)->get();
        $acceptedbursaries = BursaryApplication::where(['bursary_constituency_id' => $checkcounty->id, 'school_status' => 'cdf'])->get();
        $totalpoints = 0;
        $allocation = $checkcounty->amount_allocated;
        foreach($acceptedbursaries as $bursary){
            $totalpoints +=$bursary->points_earned;
        }
        $totalapps =  BursaryApplication::where(['bursary_constituency_id' => $checkcounty->id, 'school_status' => 'cdf'])->get();
        foreach($totalapps as $sharetotal){
            $specpoints = $sharetotal->points_earned;
            $amount =(($specpoints /$totalpoints) * $allocation);
            $sharetotal->bursary_allocated_amount = intval(round($amount));
            $sharetotal->save();
            $receiver = $sharetotal->bursaryuser->email;
            $topic = "Amount Allocated";
            $message = "Hello," . $sharetotal->bursaryuser->name . ", You have been allocated  " .intval(round($amount)) . ". Please confirm with your accounts office for further details" . $sharetotal->bursary_id;
            Mail::to($receiver)->send(new AllocatedAmount($receiver, $topic, $message));

        }
        Toastr::success('Operation done successfully and student notified via email.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('cdf/amount-allocations');

        // return view('cdf.allocated-points', compact(['bursaries', 'acceptedbursaries']));
    }
    public function amountsallocated()
    {
        $checkcounty = CountyConstituency::where('user_manager_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where('bursary_county_id', $checkcounty->id)->get();
        $acceptedbursaries = BursaryApplication::where(['bursary_constituency_id' => $checkcounty->id, 'school_status' => 'cdf'])->get();
        return view('cdf.allocated-amount', compact(['bursaries', 'acceptedbursaries']));
    }
    public function accountsecurity()
    {
        return view('cdf.account-security');
    }
    public function updatepassword(Request $request)
    {
        $this->validate($request, [
            'password' => 'required|min:8|max:20|confirmed',
            'password_confirmation' => 'required'
        ]);

        $user = User::find(auth()->user()->id);
        $user->password = bcrypt($request->input('password'));
        $user->save();

        Toastr::success('password has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function updateemail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
        ]);

        $user = User::find(auth()->user()->id);
        $user->email = $request->input('email');
        $user->save();

        Toastr::success('Email Address has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
    public function updateavatar(Request $request)
    {
        $this->validate($request, [
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);
        $user = User::find(auth()->user()->id);
        Storage::delete('public/profiles/' . $user->picture);
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('profiles', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();

        Toastr::success('Account Avatar has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
