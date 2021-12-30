<?php

namespace App\Http\Controllers\school;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SchoolAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:school', 'verified']);
    }
    public function index(){
        return view('school.dashboard');
    }
    public function schoolcomments(){
        return view('school.school-comments');
    }
}
