<?php

namespace App\Http\Controllers\cbk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CBKAccountController extends Controller
{
    public function index()
    {
        return view('cbk.layout');
    }
    public function addcounty()
    {
        return view('cbk.add-county');
    }
}
