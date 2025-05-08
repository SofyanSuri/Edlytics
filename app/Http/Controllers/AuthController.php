<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\RegistrationRequest;
use App\Models\Admin;
use App\Models\Student;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login_id' => 'required',
            'password' => 'required',
        ]);

        // Extract credentials from the request
        $credentials = $request->only('login_id', 'password');

        // Attempt login as Admin first
    if (Auth::guard('admin')->attempt([
        'username' => $credentials['login_id'], // admins use username
        'password' => $credentials['password'],
    ])) {
        return redirect()->route('admin.dashboard');
    }

    // Attempt Student Login
    if (Auth::guard('student')->attempt([
        'student_id' => $credentials['login_id'], // students use student_id
        'password' => $credentials['password'],
    ])) {
        return redirect()->route('student.dashboard');
    }

    return back()->withErrors(['login_id' => 'Invalid credentials'])->onlyInput('login_id');
}


    public function logout(Request $request)
    {
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }

        if (Auth::guard('student')->check()) {
            Auth::guard('student')->logout();
        }

        return redirect()->route('login');
    }

    public function showRegistrationForm()
    {
        return view('student.register');
    }

    public function submitRegistration(Request $request)
    {
    $request->validate([
        'nim' => 'required|unique:registration_requests,nim|unique:students,nim',
        'name' => 'required',
        'department' => 'required',
        'major' => 'required',
        'phone' => 'required'
    ]);

    RegistrationRequest::create($request->all());

    return redirect()->route('student.login')->with('success', 'Registration submitted. Wait for admin approval.');
    }
}
