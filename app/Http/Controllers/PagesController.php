<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.layout');
    }
    public function createaccount(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $passwordlength = 6;
        $str = "1234567890";
        $password = substr(str_shuffle($str), 0, $passwordlength);

        $user = new User;
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($password);
        $user->save();
        $user->attachRole('student');
        return redirect()->route('login');
    }
}
