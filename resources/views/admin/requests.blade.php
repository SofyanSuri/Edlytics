@extends('layouts.admin')

@section('admin-content')
<div class="min-h-screen text-gray-100 px-4 py-6">
    <div class="flex items-center justify-between mb-8">
        <h1 class="text-3xl font-bold bg-gradient-to-r from-blue-300 to-gray-100 bg-clip-text text-transparent">Manage Change Requests</h1>
        <div class="text-sm text-gray-400">
            <span>{{ now()->format('l, F j, Y') }}</span>
        </div>
    </div>
    
    <div class="bg-gradient-to-b from-[#0D1B2A] to-[#1B263B] rounded-lg shadow-lg p-6">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-400 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                </svg>
                <h2 class="text-xl font-semibold text-gray-200">Student Change Requests</h2>
            </div>
            

        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="bg-[#1B263B] text-gray-300 text-left">
                        <th class="p-3 rounded-tl-lg font-semibold">Student</th>
                        <th class="p-3 font-semibold">Field</th>
                        <th class="p-3 font-semibold">Current Value</th>
                        <th class="p-3 font-semibold">New Value</th>
                        <th class="p-3 font-semibold">Status</th>
                        <th class="p-3 rounded-tr-lg font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($requests as $request)
                    <tr class="border-b border-[#415A77] hover:bg-[#415A77]/20 transition-colors duration-200">
                        <td class="p-3">
                            <div class="font-medium">{{ $request->student->name }}</div>
                            <div class="text-sm text-gray-400">ID: {{ $request->student->student_id }}</div>
                        </td>
                        <td class="p-3">
                            <span class="bg-[#415A77]/50 px-2 py-1 rounded text-sm">{{ $request->field }}</span>
                        </td>
                        <td class="p-3">
                            <div class="bg-[#0D1B2A] p-2 rounded border border-[#415A77]/30 text-gray-400">
                                {{ $request->old_value }}
                            </div>
                        </td>
                        <td class="p-3">
                            <div class="bg-[#0D1B2A] p-2 rounded border border-[#415A77]/30 text-white">
                                {{ $request->new_value }}
                            </div>
                        </td>
                        <td class="p-3">
                            <span class="px-3 py-1 rounded-full text-sm font-medium inline-flex items-center
                                @if($request->status == 'pending') bg-yellow-600/20 text-yellow-300 border border-yellow-600/30
                                @elseif($request->status == 'approved') bg-green-600/20 text-green-300 border border-green-600/30
                                @else bg-red-600/20 text-red-300 border border-red-600/30 @endif">
                                
                                @if($request->status == 'pending')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                @elseif($request->status == 'approved')
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                    </svg>
                                @else
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                @endif
                                
                                {{ ucfirst($request->status) }}
                            </span>
                        </td>
                        <td class="p-3">
                            <form action="{{ route('admin.requests.update', $request) }}" method="POST" class="flex items-center space-x-2">
                                @csrf
                                @method('PUT')
                                <select name="status" 
                                        class="bg-[#0D1B2A] border border-[#415A77] text-white rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-colors">
                                    <option value="pending" @selected($request->status == 'pending')>Pending</option>
                                    <option value="approved" @selected($request->status == 'approved')>Approve</option>
                                    <option value="rejected" @selected($request->status == 'rejected')>Reject</option>
                                </select>
                                <button class="bg-gradient-to-r from-blue-600 to-blue-400 text-white px-4 py-2 rounded-md hover:from-blue-700 hover:to-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50 transition-all duration-150 shadow-md flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                    Update
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <!-- Empty state (will only show if the table is empty) -->
        @if($requests->isEmpty())
        <div class="bg-[#1B263B]/50 p-6 rounded-lg text-center my-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 mx-auto text-gray-500 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <p class="text-xl text-gray-400 font-medium">No change requests found</p>
            <p class="text-gray-500 mt-2">There are currently no pending change requests</p>
        </div>
        @endif
        
        <div class="mt-6">
            {{ $requests->links() }}
        </div>
    </div>
</div>
@endsection