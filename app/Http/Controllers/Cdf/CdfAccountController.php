<?php

namespace App\Http\Controllers\Cdf;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CdfAccountController extends Controller
{
    public function index()
    {
        // $school = School::where('school_admin_user_id', auth()->user()->id)->get()->first();
        // $bursaries = BursaryApplication::where('bursary_school_id', $school->id)->get();
        // $newbursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => null])->get();
        // $deniedbursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => 'Returned'])->get();
        // $acceptedbursaries = BursaryApplication::where(['bursary_school_id' => $school->id, 'school_status' => 'school'])->get();
        // return view('school.dashboard', compact(['newbursaries', 'bursaries', 'acceptedbursaries', 'deniedbursaries']));
 
        return view('cdf.dashboard');
    }
}
