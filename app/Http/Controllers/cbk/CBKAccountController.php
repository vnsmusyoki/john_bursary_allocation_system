<?php

namespace App\Http\Controllers\cbk;

use App\Http\Controllers\Controller;
use App\Mail\CountyConstituencyManager;
use App\Models\CountyConstituency;
use App\Models\School;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class CBKAccountController extends Controller
{
    public function index()
    {
        $counties = CountyConstituency::all();
        return view('cbk.dashboard', compact('counties'));
    }
    public function addcounty()
    {
        return view('cbk.add-county');
    }
    public function storeconstituency(Request $request)
    {
        $this->validate($request, [
            'full_names' => 'required|string',
            'home_county' => 'required',
            'amount' => 'required|numeric',
            'email' => 'required|email|unique:users',
            'constituency' => 'required|string',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);
        $passwordlength = 6;
        $str = "1234567890";
        $password = substr(str_shuffle($str), 0, $passwordlength);

        $user = new User;
        $user->name = $request->input('full_names');
        $user->email = $request->input('email');
        $user->password = bcrypt($password);
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('profiles', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();
        $user->attachRole('cdf');

        $county = new CountyConstituency;
        $county->county = $request->input('home_county');
        $county->constituency = $request->input('constituency');
        $county->user_manager_id = $user->id;
        $county->amount_allocated =  $request->input('amount');
        $county->save();
        $receiver = $user->email;
        $message = "Hello ," . $user->name . ". You have been added as the " . $county->constituency . " Constituency Manager. Login in using these credentials to manage the constituency funds. Email Address :" . $user->email . ", Custom Default Password is " . $password;
        $topic = "Constituency Registration";
        Mail::to($receiver)->send(new CountyConstituencyManager($receiver, $topic, $message));
        Toastr::success('Constituency Details Have been Added.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('cbk/all-county-subcounty');
    }
    public function allcounties()
    {
        $counties = CountyConstituency::all();
        return view('cbk.all-counties', compact('counties'));
    }
    public function addschool()
    {
        $counties = CountyConstituency::all();
        return view('cbk.add-school', compact('counties'));
    }
    public function storeschool(Request $request)
    {
        $this->validate($request, [
            'full_names' => 'required|string',
            'school_name' => 'required|string|unique:schools',
            'school_location' => 'required|string',
            'school_contacts' => 'required|digits:10|unique:schools',
            'email' => 'required|email|unique:users',
            'school_email' => 'required|email|unique:schools',
            'school_link' => 'required|url',
            'school_category' => 'required',
            'county' => 'required',
            'picture' => 'required|image|mimes:jpeg,png,jpg|max:6048',
        ]);
        $passwordlength = 6;
        $str = "1234567890";
        $password = substr(str_shuffle($str), 0, $passwordlength);

        $user = new User;
        $user->name = $request->input('full_names');
        $user->email = $request->input('email');
        $user->password = bcrypt($password);
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('profiles', $filenameToStore, 'public');
        $user->picture = $filenameToStore;
        $user->save();
        $user->attachRole('school');

        $school = new School;
        $school->school_name = $request->input('school_name');
        $school->school_county = $request->input('county');
        $school->school_category = $request->input('school_category');
        $school->school_location_address = $request->input('school_location');
        $school->school_website = $request->input('school_link');
        $school->school_contacts = $request->input('school_contacts');
        $school->school_email = $request->input('school_email');
        $school->school_admin_user_id =  $user->id;
        $school->save();
        $receiver = $user->email;
        $message = "Hello ," . $user->name . ". You have been added as the " . $school->school_name . "  Manager. Login in using these credentials to manage the School Bursary Allocations. Email Address :" . $user->email . ", Custom Default Password is " . $password;
        $topic = "Constituency Registration";
        Mail::to($receiver)->send(new CountyConstituencyManager($receiver, $topic, $message));
        Toastr::success('School Details Have been Added.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->to('cbk/all-schools');
    }

    public function allschools()
    {
        $schools = School::all();
        return view('cbk.all-schools', compact('schools'));
    }
    public function accountsecurity()
    {
        return view('cbk.account-security');
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
    public function countyallocation($id)
    {
        $county = CountyConstituency::findOrFail($id);
        return view('cbk.edit-allocation', compact('county'));
    }
    public function editconstituency(Request $request, $id)
    {
        $this->validate($request, [
            'full_names' => 'required|string',
            'home_county' => 'required',
            'amount' => 'required|numeric',
            'constituency' => 'required|string',
            'picture' => 'nullable|image|mimes:jpeg,png,jpg|max:6048',
        ]);
        $county =CountyConstituency::findOrFail($id);
        $county->amount_allocated =  $request->input('amount');
        $county->save();

        return redirect()->to('cbk/all-county-subcounty');
    }
}
