@extends('layouts.student')
@section('student-content')
<div class="bg-gradient-to-br from-[#0D1B2A] to-[#1B263B] p-8 rounded-lg shadow-xl max-w-2xl mx-auto border border-[#415A77]/30 text-[#E0E1DD]">
    <h1 class="text-3xl font-bold mb-8 text-[#E0E1DD] flex items-center">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
        </svg>
        Data Change Request
    </h1>
    
    <form method="POST" action="{{ route('student.request.submit') }}" class="space-y-6">
        @csrf
        
        <div class="space-y-2">
            <label class="block text-[#778DA9] font-medium text-lg">Field to Change</label>
            <div class="relative">
                <select name="field" class="w-full p-3 pl-10 rounded-lg appearance-none border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300" required>
                    <option value="name">Name</option>
                    <option value="nim">NIM</option>
                    <option value="department">Department</option>
                    <option value="major">Major</option>
                    <option value="phone">Phone Number</option>
                </select>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l4-4 4 4m0 6l-4 4-4-4" />
                </svg>
                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-[#778DA9]">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                    </svg>
                </div>
            </div>
        </div>
        
        <div class="space-y-2">
            <label class="block text-[#778DA9] font-medium text-lg">New Value</label>
            <div class="relative">
                <input type="text" name="new_value" 
                       class="w-full p-3 pl-10 rounded-lg border border-[#415A77] bg-[#0D1B2A]/60 text-[#E0E1DD] focus:outline-none focus:ring-2 focus:ring-[#778DA9] transition-all duration-300" required>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute left-3 top-3.5 text-[#778DA9]" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                </svg>
            </div>
        </div>
        
        <div class="mt-8">
            <button type="submit" class="bg-gradient-to-r from-[#415A77] to-[#778DA9] px-6 py-3 rounded-lg text-[#E0E1DD] font-medium shadow-md hover:shadow-lg transition-all duration-300 hover:from-[#778DA9] hover:to-[#415A77] transform hover:translate-y-[-2px] focus:outline-none focus:ring-2 focus:ring-[#E0E1DD]/50 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Submit Request
            </button>
        </div>
    </form>
</div>
@endsection