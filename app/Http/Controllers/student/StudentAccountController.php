<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\School;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class StudentAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:student', 'verified']);
    }

    public function index()
    {
        $checkstudent = Student::where('user_student_id', auth()->user()->id)->get();
        if ($checkstudent->count() == 0) {

            return redirect('student/complete-profile');
        } else {
            $student = Student::where('user_student_id', auth()->user()->id)->get()->first();

            return view('students.dashboard', compact('student'));
        }
    }
    public function completeprofile()
    {
        $courses = Course::all();
        $schools = School::all();
        return view('students.complete-profile', compact(['courses', 'schools']));
    }
    public function storeprofile(Request $request)
    {
        $this->validate($request, [
            'phone_number' => 'required|digits:10|unique:students',
            'id_number' => 'required|digits:8|unique:students',
            'year_of_study' => 'required',
            'home_county' => 'required',
            'registration_number' => 'required|string|min:13|max:13',
            'constituency' => 'required|string',
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
        $student->county = $request->input('home_county');
        $student->registration_number = $request->input('registration_number');
        $student->course_id = $request->input('course_of_study');
        $student->constituency = $request->input('constituency');
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
         $student = Student::where('user_student_id', auth()->user()->id)->get()->first();
        return view('students.apply-bursary', compact('student'));
    }
}
