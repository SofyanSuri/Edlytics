@extends('layouts.admin')

@section('admin-content')
<div class="bg-gradient-to-br from-[#1B263B] to-[#415A77] p-8 rounded-xl shadow-xl border border-[#778DA9]/20 max-w-2xl mx-auto">
    <div class="flex items-center mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#778DA9] mr-3" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
        </svg>
        <h1 class="text-2xl font-bold text-[#E0E1DD]">Create New Student</h1>
    </div>
    
    <form method="POST" action="{{ route('students.store') }}">
        @csrf
        
        <div class="space-y-6">
            <div class="bg-[#0D1B2A]/30 p-6 rounded-lg border border-[#778DA9]/10">
                <div class="mb-5">
                    <label for="student_id" class="block mb-2 text-sm font-medium text-[#E0E1DD]">Student ID</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="student_id" name="student_id" 
                               class="pl-10 w-full p-3 rounded-lg text-gray-900 bg-white border border-[#778DA9]/30 
                               focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                               transition duration-200" required>
                    </div>
                </div>
                
                <div class="mb-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-[#E0E1DD]">Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="name" name="name" 
                               class="pl-10 w-full p-3 rounded-lg text-gray-900 bg-white border border-[#778DA9]/30 
                               focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                               transition duration-200" required>
                    </div>
                </div>

                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-[#E0E1DD]">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="password" id="password" name="password" 
                               class="pl-10 w-full p-3 rounded-lg text-gray-900 bg-white border border-[#778DA9]/30 
                               focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                               transition duration-200" required>
                    </div>
                </div>
            </div>

            <div class="flex justify-end">
                <button type="submit" 
                        class="flex items-center px-6 py-3 bg-gradient-to-r from-[#415A77] to-[#1B263B]
                        text-[#E0E1DD] rounded-lg font-medium shadow-lg hover:from-[#1B263B] hover:to-[#415A77] 
                        focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#778DA9] 
                        transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Create Student
                </button>
            </div>
        </div>
    </form>
</div>
@endsection