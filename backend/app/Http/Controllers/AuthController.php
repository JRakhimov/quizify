<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {

        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:students|email|max:255',
            'password' => 'required|min:6',
        ]);

        Student::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()->route('home')->with('info', 'You are registered successfully!');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|max:255',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('student_web')->attempt($credentials)) {
            dd('OK');
        }

        return redirect()->route('home');
    }
}
