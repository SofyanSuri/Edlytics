@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto bg-gradient-to-br from-[#0D1B2A] to-[#1B263B] p-8 rounded-lg mt-10 shadow-xl border border-[#415A77]/30 text-[#E0E1DD]">
    <h1 class="text-3xl font-bold mb-8 text-center text-[#E0E1DD] flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
        </svg>
        Student Registration
    </h1>
    
    <form method="POST" action="{{ route('student.register') }}">
        @csrf
        <div class="mb-5">
            <div class="relative">
                <input type="text" name="nim" placeholder="NIM" required 
                       class="w-full p-3 pl-10 rounded-lg border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] placeholder-[#778DA9]/70 focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1" />
                </svg>
            </div>
        </div>
        <div class="mb-5">
            <div class="relative">
                <input type="text" name="name" placeholder="Full Name" required 
                       class="w-full p-3 pl-10 rounded-lg border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] placeholder-[#778DA9]/70 focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
        </div>
        <div class="mb-5">
            <div class="relative">
                <input type="text" name="department" placeholder="Department" required 
                       class="w-full p-3 pl-10 rounded-lg border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] placeholder-[#778DA9]/70 focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
        </div>
        <div class="mb-5">
            <div class="relative">
                <input type="text" name="major" placeholder="Major" required 
                       class="w-full p-3 pl-10 rounded-lg border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] placeholder-[#778DA9]/70 focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
        </div>
        <div class="mb-6">
            <div class="relative">
                <input type="text" name="phone" placeholder="Phone Number" required 
                       class="w-full p-3 pl-10 rounded-lg border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] placeholder-[#778DA9]/70 focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
            </div>
        </div>
        <button type="submit" class="w-full bg-gradient-to-r from-[#415A77] to-[#778DA9] p-3 rounded-lg font-medium text-[#E0E1DD] shadow-md hover:shadow-lg transition-all duration-300 hover:from-[#778DA9] hover:to-[#415A77] transform hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-[#E0E1DD]/50">
            Submit Registration
        </button>
    </form>
    <div class="mt-6 text-center">
        <a href="{{ route('login') }}" class="text-[#778DA9] hover:text-[#E0E1DD] transition-colors duration-300 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            Already have an account? Login here
        </a>
    </div>
    <div class="mt-6 text-center bg-gradient-to-r from-[#1B263B] to-[#415A77] p-4 rounded-lg shadow-inner border border-[#778DA9]/20">
        <p class="text-[#E0E1DD]/90 text-sm flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
            Registration will be processed by the admin. Please allow up to 24 hours for processing.
        </p>
    </div>
</div>
@endsection