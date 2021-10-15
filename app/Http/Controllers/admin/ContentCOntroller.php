<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContentCOntroller extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin', 'verified']);
    }

    public function index(){
        return view('admin.dashboard');
    }
    
}
