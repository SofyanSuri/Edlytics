@extends('layouts.admin')

@section('admin-content')
<div class="bg-gradient-to-br from-[#0D1B2A] via-[#1B263B] to-[#415A77] p-8 rounded-lg shadow-xl max-w-3xl mx-auto">
    <div class="mb-6 border-b border-[#778DA9]/30 pb-4">
        <h1 class="text-3xl font-bold text-[#E0E1DD] tracking-wide">Add New Student</h1>
        <p class="text-[#778DA9] mt-1">Complete the form below to register a new student</p>
    </div>
    
    <form method="POST" action="{{ route('admin.students.store') }}" class="space-y-6">
        @csrf
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="form-group">
                <label class="block mb-2 text-[#E0E1DD] font-medium">Student ID</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#778DA9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 2a1 1 0 00-1 1v1a1 1 0 002 0V3a1 1 0 00-1-1zM4 4h3a3 3 0 006 0h3a2 2 0 012 2v9a2 2 0 01-2 2H4a2 2 0 01-2-2V6a2 2 0 012-2zm2.5 7a1.5 1.5 0 100-3 1.5 1.5 0 000 3zm2.45 4a2.5 2.5 0 10-4.9 0h4.9zM12 9a1 1 0 100 2h3a1 1 0 100-2h-3zm-1 4a1 1 0 011-1h2a1 1 0 110 2h-2a1 1 0 01-1-1z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <input type="text" name="student_id" required 
                           class="w-full pl-10 p-3 bg-[#1B263B]/50 border border-[#778DA9]/30 rounded-lg focus:ring-2 focus:ring-[#778DA9] focus:border-transparent transition-all duration-200 text-[#E0E1DD]">
                </div>
            </div>
            
            <div class="form-group">
                <label class="block mb-2 text-[#E0E1DD] font-medium">NIM</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#778DA9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <input type="text" name="nim" required 
                           class="w-full pl-10 p-3 bg-[#1B263B]/50 border border-[#778DA9]/30 rounded-lg focus:ring-2 focus:ring-[#778DA9] focus:border-transparent transition-all duration-200 text-[#E0E1DD]">
                </div>
            </div>

            <div class="form-group">
                <label class="block mb-2 text-[#E0E1DD] font-medium">Full Name</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#778DA9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <input type="text" name="name" required 
                           class="w-full pl-10 p-3 bg-[#1B263B]/50 border border-[#778DA9]/30 rounded-lg focus:ring-2 focus:ring-[#778DA9] focus:border-transparent transition-all duration-200 text-[#E0E1DD]">
                </div>
            </div>

            <div class="form-group">
                <label class="block mb-2 text-[#E0E1DD] font-medium">Department</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#778DA9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                        </svg>
                    </span>
                    <input type="text" name="department" required 
                           class="w-full pl-10 p-3 bg-[#1B263B]/50 border border-[#778DA9]/30 rounded-lg focus:ring-2 focus:ring-[#778DA9] focus:border-transparent transition-all duration-200 text-[#E0E1DD]">
                </div>
            </div>

            <div class="form-group">
                <label class="block mb-2 text-[#E0E1DD] font-medium">Major</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#778DA9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                        </svg>
                    </span>
                    <input type="text" name="major" required 
                           class="w-full pl-10 p-3 bg-[#1B263B]/50 border border-[#778DA9]/30 rounded-lg focus:ring-2 focus:ring-[#778DA9] focus:border-transparent transition-all duration-200 text-[#E0E1DD]">
                </div>
            </div>

            <div class="form-group">
                <label class="block mb-2 text-[#E0E1DD] font-medium">Phone Number</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#778DA9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                        </svg>
                    </span>
                    <input type="text" name="phone" required 
                           class="w-full pl-10 p-3 bg-[#1B263B]/50 border border-[#778DA9]/30 rounded-lg focus:ring-2 focus:ring-[#778DA9] focus:border-transparent transition-all duration-200 text-[#E0E1DD]">
                </div>
            </div>

            <div class="form-group">
                <label class="block mb-2 text-[#E0E1DD] font-medium">Password</label>
                <div class="relative">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-[#778DA9]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <input type="password" name="password" required 
                           class="w-full pl-10 p-3 bg-[#1B263B]/50 border border-[#778DA9]/30 rounded-lg focus:ring-2 focus:ring-[#778DA9] focus:border-transparent transition-all duration-200 text-[#E0E1DD]">
                </div>
            </div>
        </div>

        <div class="mt-8 border-t border-[#778DA9]/30 pt-6 flex justify-end">
            <button type="button" class="relative overflow-hidden text-[#E0E1DD] px-6 py-3 rounded-lg mr-4 font-medium shadow-md hover:shadow-lg hover:-translate-y-1 transition-all duration-300 before:absolute before:inset-0 before:bg-[#778DA9]/20 before:transition-all before:duration-500 hover:before:bg-[#778DA9]/40">
                <span class="relative z-10">Cancel</span>
            </button>
            <button type="submit" class="relative overflow-hidden text-white px-6 py-3 rounded-lg shadow-md hover:shadow-xl hover:-translate-y-1 transition-all duration-300 font-medium flex items-center before:absolute before:inset-0 before:bg-gradient-to-r before:from-[#415A77] before:to-[#778DA9] before:transition-all before:duration-500 hover:before:from-[#778DA9] hover:before:to-[#415A77] hover:before:bg-[length:200%_100%]">
                <span class="relative z-10 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Add Student
                </span>
            </button>
        </div>
    </form>
</div>
@endsection