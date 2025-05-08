<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DataChangeRequest;
use App\Models\RegistrationRequest;



class StudentController extends Controller
{
    public function showLogin()
    {
        return view('student.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'student_id' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('student')->attempt($credentials)) {
            return redirect()->route('student.dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('student')->logout();
        return redirect('/student/login');
    }

    public function dashboard()
    {
        return view('student.dashboard', [
            'student' => Auth::guard('student')->user()
        ]);
    }

        public function showRequestForm()
    {
        return view('student.request-form');
    }

    public function submitRequest(Request $request)
    {
        $student = Auth::guard('student')->user();
        
        DataChangeRequest::create([
            'student_id' => $student->student_id,
            'field' => $request->field,
            'old_value' => $student->{$request->field},
            'new_value' => $request->new_value,
            'status' => 'pending'
        ]);
        
        return redirect()->route('student.dashboard')->with('success', 'Request submitted');
    }

    public function requestHistory()
    {
        return view('student.request-history', [
            'requests' => Auth::guard('student')->user()->changeRequests
        ]);
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

    return redirect()->route('login')->with('success', 'Registration submitted. Wait for admin approval.');
    }


}