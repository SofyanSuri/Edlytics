@extends('layouts.admin')

@section('admin-content')
<div class="bg-gradient-to-br from-[#1B263B] to-[#415A77] p-8 rounded-xl shadow-xl border border-[#778DA9]/20 max-w-2xl mx-auto">
    <div class="flex items-center mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-[#778DA9] mr-3" viewBox="0 0 20 20" fill="currentColor">
            <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
        </svg>
        <h1 class="text-2xl font-bold text-[#E0E1DD]">Edit Student</h1>
    </div>
    
    <form method="POST" action="{{ route('students.update', $student) }}">
        @csrf
        @method('PUT')
        
        <div class="bg-[#0D1B2A]/30 p-6 rounded-lg border border-[#778DA9]/10 mb-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-6 gap-y-5">
                <div>
                    <label for="student_id" class="block mb-2 text-sm font-medium text-[#E0E1DD]">Student ID</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="student_id" value="{{ $student->student_id }}"
                               class="pl-10 w-full p-3 rounded-lg text-gray-700 bg-gray-200 border border-[#778DA9]/30 
                               opacity-75 cursor-not-allowed" disabled>
                    </div>
                </div>
                
                <div>
                    <label for="nim" class="block mb-2 text-sm font-medium text-[#E0E1DD]">NIM</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="nim" name="nim" value="{{ $student->nim }}"
                               class="pl-10 w-full p-3 rounded-lg text-gray-900 bg-white border border-[#778DA9]/30 
                               focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                               transition duration-200" required>
                    </div>
                </div>

                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-[#E0E1DD]">Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="name" name="name" value="{{ $student->name }}"
                               class="pl-10 w-full p-3 rounded-lg text-gray-900 bg-white border border-[#778DA9]/30 
                               focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                               transition duration-200" required>
                    </div>
                </div>

                <div>
                    <label for="department" class="block mb-2 text-sm font-medium text-[#E0E1DD]">Department</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                            </svg>
                        </div>
                        <input type="text" id="department" name="department" value="{{ $student->department }}"
                               class="pl-10 w-full p-3 rounded-lg text-gray-900 bg-white border border-[#778DA9]/30 
                               focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                               transition duration-200" required>
                    </div>
                </div>

                <div>
                    <label for="major" class="block mb-2 text-sm font-medium text-[#E0E1DD]">Major</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                            </svg>
                        </div>
                        <input type="text" id="major" name="major" value="{{ $student->major }}"
                               class="pl-10 w-full p-3 rounded-lg text-gray-900 bg-white border border-[#778DA9]/30 
                               focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                               transition duration-200" required>
                    </div>
                </div>

                <div>
                    <label for="phone" class="block mb-2 text-sm font-medium text-[#E0E1DD]">Phone Number</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                            </svg>
                        </div>
                        <input type="text" id="phone" name="phone" value="{{ $student->phone }}"
                               class="pl-10 w-full p-3 rounded-lg text-gray-900 bg-white border border-[#778DA9]/30 
                               focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                               transition duration-200" required>
                    </div>
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
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                Update Student
            </button>
        </div>
    </form>
</div>
@endsection