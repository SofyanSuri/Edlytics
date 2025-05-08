@extends('layouts.student')

@section('student-content')
<div class="bg-gradient-to-br from-[#0D1B2A] to-[#1B263B] p-8 rounded-lg shadow-xl max-w-3xl mx-auto border border-[#415A77]/30">
    <h1 class="text-3xl font-bold mb-8 text-[#E0E1DD] flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
        </svg>
        Request History
    </h1>
    
    <div class="space-y-5">
        @foreach($requests as $request)
        <div class="bg-gradient-to-r from-[#1B263B] to-[#415A77] p-5 rounded-lg shadow-md border border-[#778DA9]/20 transform transition-all duration-300 hover:shadow-lg hover:border-[#778DA9]/40">
            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                <div class="space-y-2">
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        <p class="font-semibold text-[#E0E1DD]">Field: <span class="text-[#778DA9]">{{ $request->field }}</span></p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7" />
                        </svg>
                        <p class="text-[#E0E1DD]/90">From: <span class="text-[#778DA9]">{{ $request->old_value }}</span></p>
                    </div>
                    <div class="flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7" />
                        </svg>
                        <p class="text-[#E0E1DD]/90">To: <span class="text-[#778DA9]">{{ $request->new_value }}</span></p>
                    </div>
                </div>
                <span class="px-4 py-2 rounded-lg font-medium text-sm md:text-base flex items-center 
                      @if($request->status == 'pending') bg-[#F9A826]/20 text-[#F9A826] border border-[#F9A826]/30
                      @elseif($request->status == 'approved') bg-[#4BB543]/20 text-[#4BB543] border border-[#4BB543]/30
                      @else bg-[#FF5252]/20 text-[#FF5252] border border-[#FF5252]/30 @endif">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        @if($request->status == 'pending')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        @elseif($request->status == 'approved')
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        @else
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        @endif
                    </svg>
                    {{ ucfirst($request->status) }}
                </span>
            </div>
            <div class="flex items-center mt-3 pt-2 border-t border-[#778DA9]/20">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <p class="text-sm text-[#778DA9]">Submitted: {{ $request->created_at->format('M d, Y H:i') }}</p>
            </div>
        </div>
        @endforeach
        
        @if(count($requests) === 0)
        <div class="bg-gradient-to-r from-[#1B263B] to-[#415A77] p-6 rounded-lg text-center">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 mx-auto mb-3 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
            <p class="text-lg text-[#E0E1DD]">No requests found</p>
            <p class="text-[#778DA9] mt-1">You haven't submitted any data change requests yet.</p>
        </div>
        @endif
    </div>
</div>
@endsection