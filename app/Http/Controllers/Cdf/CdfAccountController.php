<?php

namespace App\Http\Controllers\Cdf;

use App\Http\Controllers\Controller;
use App\Models\BursaryApplication;
use App\Models\CountyConstituency;
use App\Models\School;
use App\Models\Student;
use Illuminate\Http\Request;

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
}
