<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Mail\SchoolAcceptApplication;
use App\Mail\SchoolRejectApplication;
use App\Models\BursaryApplication;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class SchoolAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:school', 'verified']);
    }
    public function index()
    {

        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where('bursary_school_id', $school->id)->get();
        $newbursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => null])->get();
        $deniedbursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => 'Returned'])->get();
        $acceptedbursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => 'school'])->get();
        return view('school.dashboard', compact(['newbursaries', 'bursaries', 'acceptedbursaries', 'deniedbursaries']));
    }

    public function schoolcomments()
    {
        return view('school.school-comments');
    }

    public function bursaryapplications()
    {
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => null])->get();
        return view('school.bursary-applications', compact('bursaries'));
    }
    public function applicationdetails($id)
    {
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursary = BursaryApplication::findOrFail($id);
        $student = Student::where('id', $bursary->bursary_student_id)->get()->first();
        return view('school.bursary-application-details', compact('bursary', 'student'));
    }
    public function schoolupdateapplication(Request $request, $id)
    {
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursary = BursaryApplication::findOrFail($id);

        if ($request->input('school_status') == "school") {
            $receiver = $bursary->bursaryuser->email;
            $topic = "Application Verified by School";
            $message = "Your Application together with the verified details have been verifed and submited to CDF offices for  bursary allocation review. Bursary Tracking ID is " . $bursary->bursary_id;
            $bursary->school_status = "school";
            $bursary->save();
            Mail::to($receiver)->send(new SchoolAcceptApplication($receiver, $topic, $message));
            Toastr::success('Bursary application has been accepted and student notified.', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->to('school/submited-applications');
        } else {
            $receiver = $bursary->bursaryuser->email;
            $topic = "Application Verified by School";
            $message = "Your Application together with the DECLINED. Bursary Tracking ID is " . $bursary->bursary_id;
            $bursary->school_status = "Denied";
            $bursary->save();
            Mail::to($receiver)->send(new SchoolRejectApplication($receiver, $topic, $message));
            Toastr::error('Bursary Application has been canceled and student notified', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->to('school/denied-applications');
        }


        $student = Student::where('id', $bursary->bursary_student_id)->get()->first();
        return view('school.bursary-application-details', compact('bursary', 'student'));
    }
    public function submitedbursaryapplications()
    {
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => 'school'])->get();
        return view('school.submited-bursary-applications', compact('bursaries'));
    }
    public function deniedbursaryapplications()
    {
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => 'Returned'])->get();
        return view('school.cancelled-bursary-applications', compact('bursaries'));
    }
    public function accountsecurity()
    {
        return view('school.account-security');
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
    public function allocatedbursaries()
    {
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where('bursary_school_id', $school->id)->get();
        $acceptedbursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => 'cdf'])->get();
        return view('school.allocated-amount', compact(['bursaries', 'acceptedbursaries']));
    }
}
