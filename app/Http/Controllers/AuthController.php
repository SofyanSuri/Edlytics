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

        // Attempt login as Admin first
        if (Auth::guard('admin')->attempt(['username' => $request->login_id, 'password' => $request->password])) {
            return redirect()->route('admin.dashboard');
        }

        // Then try Student
        if (Auth::guard('student')->attempt(['student_id' => $request->login_id, 'password' => $request->password])) {
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
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
