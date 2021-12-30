<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use App\Models\BursaryApplication;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

class SchoolAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:school', 'verified']);
    }
    public function index()
    {
        return view('school.dashboard');
    }

    public function schoolcomments()
    {
        return view('school.school-comments');
    }

    public function bursaryapplications()
    {
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursaries = BursaryApplication::where('bursary_school_id', $school->id)->get();
        return view('school.bursary-applications', compact('bursaries'));
    }
    public function applicationdetails($id)
    {
        $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        $bursary = BursaryApplication::findOrFail($id);
        $student = Student::where('id', $bursary->bursary_student_id)->get()->first();
        return view('school.bursary-application-details', compact('bursary', 'student'));
    }
}
