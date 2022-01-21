<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\BursaryApplication;
use App\Models\CountyConstituency;
use App\Models\Course;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

class StudentAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:student']);
    }

    public function index()
    {
        $checkstudent = Student::where('user_student_id', auth()->user()->id)->get();
        if ($checkstudent->count() == 0) {

            return redirect('student/complete-profile');
        } else {
            $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
            $bursary = BursaryApplication::where('bursary_user_id', auth()->user()->id)->get();
            return view('students.dashboard', compact('student', 'bursary'));
        }
    }
    public function completeprofile()
    {
        $courses = Course::all();
        $schools = School::all();
        $counties = CountyConstituency::all();
        return view('students.complete-profile', compact(['courses', 'schools', 'counties']));
    }
    public function storeprofile(Request $request)
    {
        $this->validate($request, [
            'phone_number' => 'required|digits:10|unique:students',
            'id_number' => 'required|digits:8|unique:students',
            'year_of_study' => 'required',
            'home_county' => 'required',
            'registration_number' => 'required|string|min:13|max:13',
            'constituency' => 'required',
            'course_of_study' => 'required',
            'school' => 'required',
            'picture' => 'required|image| mimes:png,jpeg, jpg|max:10080'
        ]);

        $student = new Student;
        $student->user_student_id = auth()->user()->id;
        $student->school_id = $request->input('school');
        $student->phone_number = $request->input('phone_number');
        $student->id_number = $request->input('id_number');
        $student->year_of_study = $request->input('year_of_study');
        $student->county_id = $request->input('home_county');
        $student->registration_number = $request->input('registration_number');
        $student->course_id = $request->input('course_of_study');
        $student->constituency_id = $request->input('constituency');
        $student->save();

        $updateuser = User::findOrFail(auth()->user()->id);
        $fileNameWithExt = $request->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $request->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $request->picture->storeAs('profiles', $filenameToStore, 'public');
        $updateuser->picture = $filenameToStore;
        $updateuser->save();

        Toastr::success('Profile has been updated.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->route('student');
    }
    public function applybursary()
    {
        $bursary = BursaryApplication::where('bursary_user_id', auth()->user()->id)->get();
        if ($bursary->count() >= 1) {
            Toastr::error('You have an active application.', 'Success', ["positionClass" => "toast-top-right"]);
            return redirect()->route('student');
        } else {


            $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
            return view('students.apply-bursary', compact('student'));
        }
    }
    public function bursaryapplications()
    {

        $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
        $bursary = BursaryApplication::where('bursary_user_id', auth()->user()->id)->get();
        return view('students.bursary-applications', compact('student', 'bursary'));
    }
    public function allocatedbursaryapplications()
    {

        $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
        $bursary = BursaryApplication::where(['bursary_user_id' => auth()->user()->id, 'bursary_status' => 'Allocated'])->get();
        return view('students.allocated-bursary-applications', compact('student', 'bursary'));
    }
    public function deniedbursaryapplications()
    {

        $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
        $bursary = BursaryApplication::where(['bursary_user_id' => auth()->user()->id, 'bursary_status' => 'Denied'])->get();
        return view('students.denied-bursary-applications', compact('student', 'bursary'));
    }
    public function appdetails($app)
    {

        $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
        $bursary = BursaryApplication::findOrFail($app);
        return view('students.bursary-application-details', compact('student', 'bursary'));
    }
    public function avatar()
    {
        return view('students.avatar');
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
