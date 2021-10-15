<?php

namespace App\Http\Controllers\clerk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'role:clerk', 'verified']);
    }
    public function index(){
        return view('finance.dashboard');
    }
}
