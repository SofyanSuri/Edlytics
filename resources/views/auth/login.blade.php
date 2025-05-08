@extends('layouts.app')
@section('content')
<div class="max-w-md mx-auto bg-gradient-to-br from-[#0D1B2A] to-[#1B263B] p-8 rounded-lg mt-10 shadow-xl border border-[#415A77]/30 text-[#E0E1DD]">
    <h1 class="text-3xl font-bold mb-8 text-center bg-gradient-to-r from-blue-300 to-gray-100 bg-clip-text text-transparent flex items-center justify-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
        </svg>
        Student Login
    </h1>
    
    <form method="POST" action="{{ route('unified.login') }}">
        @csrf
        <div class="mb-5">
            <div class="relative">
                <input type="text" name="login_id" placeholder="Username or Student ID" required 
                       class="w-full p-3 pl-10 rounded-lg border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] placeholder-[#778DA9]/70 focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                </svg>
            </div>
            @error('login_id')
                <div class="mt-1 text-[#F87171] text-sm">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-6">
            <div class="relative">
                <input type="password" name="password" placeholder="Password" required 
                       class="w-full p-3 pl-10 rounded-lg border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] placeholder-[#778DA9]/70 focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                </svg>
            </div>
            @error('password')
                <div class="mt-1 text-[#F87171] text-sm">{{ $message }}</div>
            @enderror
        </div>
        
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <input type="checkbox" name="remember" id="remember" class="w-4 h-4 bg-[#0D1B2A] border border-[#415A77] rounded focus:ring-[#778DA9] focus:ring-2">
                <label for="remember" class="ml-2 text-sm text-[#E0E1DD]/90">Remember me</label>
            </div>
        </div>
        
        <button type="submit" class="w-full bg-gradient-to-r from-[#3B82F6] to-[#60A5FA] p-3 rounded-lg font-medium text-[#E0E1DD] shadow-md hover:shadow-lg transition-all duration-300 hover:from-[#2563EB] hover:to-[#3B82F6] transform hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-[#E0E1DD]/50 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
            </svg>
            Sign In
        </button>
    </form>
    
    <div class="mt-6 text-center">
        <a href="{{ route('student.register') }}" class="text-[#778DA9] hover:text-[#E0E1DD] transition-colors duration-300 flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
            </svg>
            Don't have an account? Register here
        </a>
    </div>
    
    <div class="mt-6 text-center bg-gradient-to-r from-[#1B263B] to-[#415A77] p-4 rounded-lg shadow-inner border border-[#778DA9]/20">
        <p class="text-[#E0E1DD]/90 text-sm flex items-center justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
            </svg>
            Please use your student ID or username to sign in. If you need help, contact the admin.
        </p>
    </div>
</div>
@endsection