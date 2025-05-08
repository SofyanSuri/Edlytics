@extends('layouts.app')

@section('content')
<div class="flex flex-col md:flex-row min-h-screen">
    <!-- Non-Sticky Sidebar (removed md:fixed class) -->
    <div class="w-full md:w-72 bg-gradient-to-b from-[#0D1B2A] to-[#1B263B] p-6 overflow-y-auto shadow-lg border-r border-[#415A77]/20">
        <!-- Admin Panel Header -->
        <div class="mb-8 flex items-center">
            <div class="p-2 rounded-lg bg-gradient-to-r from-blue-500 to-blue-600 mr-3">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                </svg>
            </div>
            <h2 class="text-white text-xl font-bold bg-gradient-to-r from-blue-300 to-gray-100 bg-clip-text text-transparent">Admin Panel</h2>
        </div>
        
        <!-- Navigation Menu -->
        <nav class="space-y-2">
            <!-- Dashboard Link -->
            <a href="{{ route('admin.dashboard') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-[#415A77]/30 rounded-lg transition-all duration-200 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400 group-hover:text-blue-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                <span class="font-medium">Dashboard</span>
            </a>
            
            <!-- Registrations Link -->
            <a href="{{ route('admin.registrations') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-[#415A77]/30 rounded-lg transition-all duration-200 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400 group-hover:text-blue-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
                <span class="font-medium">Registrations</span>
            </a>
            
            <!-- Data Requests Link -->
            <a href="{{ route('admin.requests') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-[#415A77]/30 rounded-lg transition-all duration-200 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400 group-hover:text-blue-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="font-medium">Data Requests</span>
            </a>

            <!-- Add Student Data -->
            <a href="{{ route('admin.students.create') }}" class="flex items-center px-4 py-3 text-gray-300 hover:text-white hover:bg-[#415A77]/30 rounded-lg transition-all duration-200 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-3 text-gray-400 group-hover:text-blue-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <span class="font-medium">Add Student Data</span>
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
    
    <!-- Main Content (removed left margin that was accommodating fixed sidebar) -->
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

        @if(session('registration_count'))
            <div class="bg-blue-600/90 border border-blue-500 text-white p-4 rounded-lg mb-6 shadow-md flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                New registration requests: {{ session('registration_count') }}
            </div>
        @endif
        
        @yield('admin-content')
    </div>
</div>
@endsection