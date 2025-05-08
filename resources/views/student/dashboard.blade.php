@extends('layouts.student')
@section('student-content')
<div class="bg-gradient-to-br from-[#0D1B2A] to-[#1B263B] p-8 rounded-lg shadow-xl max-w-4xl mx-auto border border-[#415A77]/30">
    <h1 class="text-3xl font-bold mb-8 text-[#E0E1DD] flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
        </svg>
        Student Dashboard
    </h1>
    
    <div class="space-y-6 mb-10">
        <div class="bg-gradient-to-r from-[#1B263B] to-[#415A77] p-6 rounded-lg shadow-md border border-[#778DA9]/20 transform transition-transform duration-300 hover:scale-[1.01]">
            <div class="grid md:grid-cols-2 gap-6">
                <div class="space-y-3">
                    <p class="text-lg flex items-center">
                        <span class="font-semibold text-[#778DA9] min-w-[100px] inline-block">Student ID:</span> 
                        <span class="text-[#E0E1DD]">{{ $student->student_id }}</span>
                    </p>
                    <p class="text-lg flex items-center">
                        <span class="font-semibold text-[#778DA9] min-w-[100px] inline-block">NIM:</span> 
                        <span class="text-[#E0E1DD]">{{ $student->nim }}</span>
                    </p>
                    <p class="text-lg flex items-center">
                        <span class="font-semibold text-[#778DA9] min-w-[100px] inline-block">Name:</span> 
                        <span class="text-[#E0E1DD]">{{ $student->name }}</span>
                    </p>
                </div>
                <div class="space-y-3">
                    <p class="text-lg flex items-center">
                        <span class="font-semibold text-[#778DA9] min-w-[100px] inline-block">Department:</span> 
                        <span class="text-[#E0E1DD]">{{ $student->department }}</span>
                    </p>
                    <p class="text-lg flex items-center">
                        <span class="font-semibold text-[#778DA9] min-w-[100px] inline-block">Major:</span> 
                        <span class="text-[#E0E1DD]">{{ $student->major }}</span>
                    </p>
                    <p class="text-lg flex items-center">
                        <span class="font-semibold text-[#778DA9] min-w-[100px] inline-block">Phone:</span> 
                        <span class="text-[#E0E1DD]">{{ $student->phone }}</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('student.request.form') }}" class="bg-gradient-to-r from-[#415A77] to-[#778DA9] px-6 py-3 rounded-lg text-[#E0E1DD] font-medium shadow-md hover:shadow-lg transition-all duration-300 hover:from-[#778DA9] hover:to-[#415A77] inline-flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
        </svg>
        Request Data Change
    </a>
</div>
@endsection