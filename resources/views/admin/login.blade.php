@extends('layouts.app')
@section('content')
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-[#0D1B2A] to-[#1B263B]">
    <div class="max-w-md w-full space-y-8">
        <div class="bg-gradient-to-br from-[#1B263B] to-[#415A77] p-8 rounded-xl shadow-2xl border border-[#778DA9]/20">
            <div class="text-center">
                <h1 class="text-3xl font-bold mb-2 text-[#E0E1DD]">Admin Login</h1>
                <p class="text-[#778DA9] mb-6">Access your dashboard</p>
            </div>
            
            <form method="POST" action="{{ route('admin.login') }}" class="mt-8 space-y-6">
                @csrf
                <div class="rounded-md -space-y-px">
                    <div class="mb-5">
                        <label for="username" class="sr-only">Username</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 005 10a6 6 0 0012 0c0-.352-.035-.696-.1-1.028A5.001 5.001 0 0010 11z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="username" name="username" type="text" required 
                                   class="appearance-none rounded-lg relative block w-full px-3 py-3 pl-10 
                                   border border-[#778DA9]/30 placeholder-[#778DA9] text-gray-900 
                                   focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                                   transition duration-200" 
                                   placeholder="Username">
                        </div>
                    </div>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9]" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input id="password" name="password" type="password" required 
                                   class="appearance-none rounded-lg relative block w-full px-3 py-3 pl-10 
                                   border border-[#778DA9]/30 placeholder-[#778DA9] text-gray-900
                                   focus:outline-none focus:ring-2 focus:ring-[#415A77] focus:border-transparent
                                   transition duration-200" 
                                   placeholder="Password">
                        </div>
                    </div>
                </div>

                <div>
                    <button type="submit" 
                            class="group relative w-full flex justify-center py-3 px-4 border border-transparent 
                            text-base font-medium rounded-lg text-white bg-gradient-to-r from-[#415A77] to-[#1B263B]
                            hover:from-[#1B263B] hover:to-[#415A77] focus:outline-none focus:ring-2 
                            focus:ring-offset-2 focus:ring-[#778DA9] transition-all duration-300 shadow-lg">
                        <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#778DA9] group-hover:text-[#E0E1DD] transition-colors duration-300" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        Login
                    </button>
                </div>
            </form>

            @error('message')
                <div class="mt-4 p-3 bg-red-500/10 border border-red-500/20 rounded-lg text-red-300 text-center">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </div>
</div>
@endsection