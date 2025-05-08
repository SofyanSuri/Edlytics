@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row min-h-screen">
    <!-- Enhanced Student Sidebar -->
    <div class="w-full md:w-72 bg-gradient-to-b from-[#0D1B2A] to-[#1B263B] p-6 overflow-y-auto shadow-lg border-r border-[#415A77]/20">
        <!-- Student Panel Header -->
        <div class="mb-8 flex items-center">
            <div class="p-2 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                </svg>
            </div>
            <h2 class="text-white text-xl font-bold bg-gradient-to-r from-blue-300 to-gray-100 bg-clip-text text-transparent">Student Panel</h2>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="space-y-2">
            <!-- Dashboard Link -->
            <a href="{{ route('student.dashboard') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-[#415A77]/30 rounded-lg transition-all duration-200 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400 group-hover:text-blue-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="font-medium">Dashboard</span>
            </a>
            
            <!-- Request History Link -->
            <a href="{{ route('student.request.history') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-[#415A77]/30 rounded-lg transition-all duration-200 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400 group-hover:text-blue-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span class="font-medium">Request History</span>
            </a>
        </nav>
        
        <!-- Divider -->
        <div class="my-6 border-t border-[#415A77]/30"></div>
        
        <!-- Logout Button -->
        <form method="POST" action="{{ route('logout') }}" class="block">
            @csrf
            <button class="w-full flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-red-500/20 rounded-lg transition-all duration-200 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400 group-hover:text-red-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="font-medium">Logout</span>
            </button>
        </form>
    </div>
    
    <!-- Main Content -->
    <div class="flex-1 bg-gradient-to-br from-[#0D1B2A] to-[#1B263B] p-8">
        <!-- Alert Messages with enhanced styling -->
        @if(session('success'))
            <div class="bg-green-600/90 border border-green-500 text-white p-4 rounded-lg mb-6 shadow-md flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                {{ session('success') }}
            </div>
        @endif
        
        @yield('student-content')
    </div>
</div>
@endsection