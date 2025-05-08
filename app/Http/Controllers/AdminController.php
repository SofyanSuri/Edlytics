<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\DataChangeRequest;
use App\Models\RegistrationRequest;
use Illuminate\Support\Facades\DB;



class AdminController extends Controller
{
    // Authentication Methods
    public function showLogin()
    {
        return view('admin.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    // CRUD Operations
    public function dashboard(Request $request)
    {
        $query = Student::query();
    
        // Apply search filter if present
        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('student_id', 'like', '%' . $search . '%')
                  ->orWhere('nim', 'like', '%' . $search . '%')
                  ->orWhere('name', 'like', '%' . $search . '%')
                  ->orWhere('department', 'like', '%' . $search . '%')
                  ->orWhere('major', 'like', '%' . $search . '%')
                  ->orWhere('phone', 'like', '%' . $search . '%');
            });
        }
    
        return view('admin.dashboard', [
            'totalStudents' => Student::count(),
            'pendingRequests' => DataChangeRequest::where('status', 'pending')->count(),
            'registrationCount' => RegistrationRequest::where('status', 'pending')->count(),
            'students' => $query->paginate(10)->appends(['search' => $request->input('search')])
        ]);
    }
    
    

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|unique:students',
            'nim' => 'required|unique:students',
            'name' => 'required',
            'department' => 'required',
            'major' => 'required',
            'phone' => 'required',
            'password' => 'required'
        ]);
    
        Student::create([
            'student_id' => $request->student_id,
            'nim' => $request->nim,
            'name' => $request->name,
            'department' => $request->department,
            'major' => $request->major,
            'phone' => $request->phone,
            'password' => Hash::make($request->password)
        ]);
    
        return back()->with('success', 'Student created successfully');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return back()->with('success', 'Student deleted successfully');
    }

        public function edit(Student $student)
    {
        return view('admin.students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return redirect()->route('admin.dashboard')->with('success', 'Student updated');
    }

    public function manageRequests()
    {
        return view('admin.requests', [
            'requests' => DataChangeRequest::with('student')->paginate(10)
        ]);
    }

    public function updateRequest(Request $request, DataChangeRequest $changeRequest)
    {
        $changeRequest->update(['status' => $request->status]);
        return back()->with('success', 'Request updated');
    }

    public function showRegistrations()
{
    return view('admin.registrations', [
        'registrations' => RegistrationRequest::where('status', 'pending')->paginate(10)
    ]);
}

    public function approveRegistration(Request $request, RegistrationRequest $registration)
    {
        $validated = $request->validate([
            'student_id' => 'required|unique:students,student_id|alpha_num|max:20',
            'password' => 'required|min:8|max:30'
        ]);

        try {
            DB::transaction(function () use ($validated, $registration) {
                Student::create([
                    'student_id' => $validated['student_id'],
                    'nim' => $registration->nim,
                    'name' => $registration->name,
                    'department' => $registration->department,
                    'major' => $registration->major,
                    'phone' => $registration->phone,
                    'password' => Hash::make($validated['password'])
                ]);

                $registration->update(['status' => 'approved']);
            });

            return back()->with('success', 'Registration approved and student account created!');

        } catch (\Exception $e) {
            return back()->with('error', 'Error approving registration: ' . $e->getMessage());
        }
    }

    public function rejectRegistration(RegistrationRequest $registration)
    {
        $registration->update(['status' => 'rejected']);
        return back()->with('success', 'Registration rejected');
    }

    public function addStudent()
{
    return view('admin.add-student');
}

public function storeStudent(Request $request)
{
    $request->validate([
        'student_id' => 'required|unique:students',
        'nim' => 'required|unique:students',
        'name' => 'required',
        'department' => 'required',
        'major' => 'required',
        'phone' => 'required',
        'password' => 'required|min:6'
    ]);

    Student::create([
        'student_id' => $request->student_id,
        'nim' => $request->nim,
        'name' => $request->name,
        'department' => $request->department,
        'major' => $request->major,
        'phone' => $request->phone,
        'password' => Hash::make($request->password)
    ]);

    return redirect()->route('admin.dashboard')->with('success', 'Student added successfully');
}

}