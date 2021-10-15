<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:students', 'verified']);
    }

    public function index(){
        return view('students.dashboard');
    }
    public function feestatement(){
        return view('students.feestatement');
    }
    public function accountpassword(){
        return view('students.account-password');
    }
}
