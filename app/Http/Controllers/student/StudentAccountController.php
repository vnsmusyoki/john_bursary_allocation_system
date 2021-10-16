<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:student', 'verified']);
    }

    public function index(){
        return view('students.dashboard');
    }
}
