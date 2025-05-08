@extends('layouts.admin')
@section('admin-content')
<div class="min-h-screen text-gray-100 px-4 py-6">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-300 to-gray-100 bg-clip-text text-transparent">Pending Registrations</h1>
        <div class="text-sm text-gray-400">
            <span>{{ now()->format('l, F j, Y') }}</span>
        </div>
    </div>
    
    <div class="bg-gradient-to-b from-[#0D1B2A] to-[#1B263B] rounded-lg shadow-lg p-6">
        @if($registrations->isEmpty())
            <div class="bg-[#1B263B]/50 p-6 rounded-lg text-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <p class="text-xl text-gray-400 font-medium">No pending registration requests</p>
                <p class="text-gray-500 mt-2">All registration requests have been processed</p>
            </div>
        @else
            <div class="flex items-center justify-between mb-6">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                    </svg>
                    <h2 class="text-xl font-semibold text-gray-200">Registration Requests Waiting for Approval</h2>
                </div>
                <div class="bg-[#415A77] px-4 py-2 rounded-full text-white text-sm font-medium">
                    {{ $registrations->count() }} pending {{ Str::plural('request', $registrations->count()) }}
                </div>
            </div>

<div class="overflow-x-auto">
    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-[#1B263B] text-gray-300">
                <th class="px-2 py-2 text-left text-sm font-medium rounded-tl-md border-r border-[#415A77]/30">NIM</th>
                <th class="px-2 py-2 text-left text-sm font-medium border-r border-[#415A77]/30">Name</th>
                <th class="px-2 py-2 text-left text-sm font-medium border-r border-[#415A77]/30">Department</th>
                <th class="px-2 py-2 text-left text-sm font-medium border-r border-[#415A77]/30">Major</th>
                <th class="px-2 py-2 text-left text-sm font-medium border-r border-[#415A77]/30">Phone</th>
                <th class="px-2 py-2 text-left text-sm font-medium rounded-tr-md">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($registrations as $registration)
            <tr class="border-b border-[#415A77]/50 hover:bg-[#415A77]/10 transition-colors duration-200">
                <td class="px-2 py-2 text-sm border-r border-[#415A77]/30">{{ $registration->nim }}</td>
                <td class="px-2 py-2 text-sm border-r border-[#415A77]/30">{{ $registration->name }}</td>
                <td class="px-2 py-2 text-sm border-r border-[#415A77]/30">{{ $registration->department }}</td>
                <td class="px-2 py-2 text-sm border-r border-[#415A77]/30">{{ $registration->major }}</td>
                <td class="px-2 py-2 text-sm border-r border-[#415A77]/30">{{ $registration->phone }}</td>
                <td class="px-2 py-2">
                    <form method="POST" action="{{ route('admin.registrations.approve', $registration) }}" class="bg-[#1B263B] p-3 rounded-md shadow-sm">
                        @csrf
                        <div class="mb-2">
                            <label for="student_id_{{ $registration->id }}" class="block text-xs font-medium text-gray-400 mb-1">Assign Student ID</label>
                            <input type="text" id="student_id_{{ $registration->id }}" name="student_id" placeholder="Student ID" required 
                                class="w-full py-1.5 px-2 text-sm bg-[#0D1B2A] border border-[#415A77] rounded-md text-white placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition"
                                pattern="[A-Za-z0-9]+" title="Alphanumeric characters only">
                            <span class="text-xs text-gray-500 mt-0.5 block">Alphanumeric characters only</span>
                        </div>
                        <div class="mb-2">
                            <label for="password_{{ $registration->id }}" class="block text-xs font-medium text-gray-400 mb-1">Create Password</label>
                            <input type="password" id="password_{{ $registration->id }}" name="password" placeholder="Password" required 
                                class="w-full py-1.5 px-2 text-sm bg-[#0D1B2A] border border-[#415A77] rounded-md text-white placeholder-gray-500 focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-transparent transition"
                                minlength="8">
                            <span class="text-xs text-gray-500 mt-0.5 block">Minimum 8 characters</span>
                        </div>
                            <div class="flex space-x-2">
                                <!-- Approve Button -->
                                <form action="{{ route('admin.registrations.approve', $registration->id) }}" method="POST" class="flex-1">
                                    @csrf
                                    <button type="submit"
                                        class="w-full bg-gradient-to-r from-green-600 to-green-500 text-white py-1.5 px-2 text-sm rounded-md hover:from-green-700 hover:to-green-600 focus:outline-none focus:ring-1 focus:ring-green-500 transition-all duration-150 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Approve
                                    </button>
                                </form>

                                <!-- Reject Button -->
                                <form action="{{ route('admin.registrations.reject', $registration->id) }}" method="POST" class="flex-1" onsubmit="return confirm('Reject this registration?');">
                                    @csrf
                                    <button type="submit"
                                        class="w-full bg-gradient-to-r from-red-600 to-red-500 text-white py-1.5 px-2 text-sm rounded-md hover:from-red-700 hover:to-red-600 focus:outline-none focus:ring-1 focus:ring-red-500 transition-all duration-150 flex items-center justify-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Reject
                                    </button>
                                </form>
                            </div>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
            
            <div class="mt-6">
                {{ $registrations->links() }}
            </div>
        @endif
    </div>
</div>
@endsection