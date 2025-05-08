@extends('layouts.admin')
@section('admin-content')
<style>
    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 12px;
        border-radius: 6px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.2s ease;
        border: none;
        outline: none;
    }
    
    .btn svg {
        margin-right: 6px;
    }
    
    .btn-edit {
        background-color: rgba(59, 130, 246, 0.15);
        color: #60A5FA;
        border: 1px solid rgba(59, 130, 246, 0.3);
    }
    
    .btn-edit:hover {
        background-color: rgba(59, 130, 246, 0.25);
        color: #93C5FD;
    }
    
    .btn-delete {
        background-color: rgba(239, 68, 68, 0.15);
        color: #F87171;
        border: 1px solid rgba(239, 68, 68, 0.3);
    }
    
    .btn-delete:hover {
        background-color: rgba(239, 68, 68, 0.25);
        color: #FCA5A5;
    }
    
    .action-cell {
        display: flex;
        gap: 8px;
    }
</style>

<div class="min-h-screen text-gray-100 px-4 py-6">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-300 to-gray-100 bg-clip-text text-transparent">Admin Dashboard</h1>
        <div class="text-sm text-gray-400">
            <span>{{ now()->format('l, F j, Y') }}</span>
        </div>
    </div>
    
    <!-- Statistics Cards -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
        <!-- Total Students -->
        <div class="bg-gradient-to-br from-[#1B263B] to-[#415A77] rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <div class="p-6 flex flex-col">
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-300 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-300">Total Students</h3>
                </div>
                <p class="text-3xl font-bold text-white">{{ $totalStudents }}</p>
                <span class="text-xs text-blue-300 mt-2">All registered students</span>
            </div>
        </div>
        
        <!-- Pending Data Requests -->
        <a href="{{ route('admin.requests') }}">
        <div class="bg-gradient-to-br from-[#1B263B] to-[#415A77] rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <div class="p-6 flex flex-col">
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-300 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-300">Pending Requests</h3>
                </div>
                <p class="text-3xl font-bold text-white">{{ $pendingRequests }}</p>
                <span class="text-xs text-yellow-300 mt-2">Awaiting your review</span>
            </div>
        </div>
        </a>
        
        <!-- New Registrations -->
        <a href="{{ route('admin.registrations') }}">
        <div class="bg-gradient-to-br from-[#1B263B] to-[#415A77] rounded-lg shadow-lg overflow-hidden transform transition-all duration-300 hover:scale-105 hover:shadow-xl">
            <div class="p-6 flex flex-col">
                <div class="flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-300 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                    </svg>
                    <h3 class="text-lg font-medium text-gray-300">New Registrations</h3>
                </div>
                <p class="text-3xl font-bold text-white">{{ $registrationCount }}</p>
                <span class="text-xs text-green-300 mt-2">Recent student registrations</span>
            </div>
        </div>
        </a>
    </div>
    

    
    

    <!-- Students List -->
    <div class="bg-gradient-to-b from-[#0D1B2A] to-[#1B263B] rounded-lg shadow-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" />
                </svg>
                <h2 class="text-xl font-semibold text-gray-200">Students List</h2>
            </div>
            
            <!-- Optional: Search input could be added here if needed -->
            <div class="relative">
                <form method="GET" action="{{ route('admin.dashboard') }}" class="relative">
                    <input type="text" name="search" value="{{ request('search') }}"
                        placeholder="Search students..."
                        class="w-64 py-2 pl-10 pr-4 rounded-lg bg-[#0D1B2A] border border-[#415A77] text-white placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-2.5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </form>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-[#1B263B] text-gray-300 text-left">
                        <th class="p-3 rounded-tl-lg font-semibold">Student ID</th>
                        <th class="p-3 font-semibold">NIM</th>
                        <th class="p-3 font-semibold">Name</th>
                        <th class="p-3 font-semibold">Department</th>
                        <th class="p-3 font-semibold">Major</th>
                        <th class="p-3 font-semibold">Phone</th>
                        <th class="p-3 rounded-tr-lg font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr class="border-b border-[#415A77] hover:bg-[#415A77]/20 transition-colors duration-200">
                        <td class="p-3">{{ $student->student_id }}</td>
                        <td class="p-3">{{ $student->nim }}</td>
                        <td class="p-3">{{ $student->name }}</td>
                        <td class="p-3">{{ $student->department }}</td>
                        <td class="p-3">{{ $student->major }}</td>
                        <td class="p-3">{{ $student->phone }}</td>
                        <td class="p-3 action-cell">
                            <a href="{{ route('students.edit', $student) }}" 
                               class="btn btn-edit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                                Edit
                            </a>
                            <form action="{{ route('students.destroy', $student) }}" 
                                  method="POST" 
                                  class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="btn btn-delete"
                                        onclick="return confirm('Are you sure you want to delete this student?')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.166L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="mt-6">
            {{ $students->links() }}
        </div>
    </div>
</div>
@endsection