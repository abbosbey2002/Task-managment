@extends('layouts.guest')

@section('title', 'Register')

@section('content')




<div class="flex items-center justify-center  min-h-[vh]">
    <div class="w-full max-w-sm bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Email Field -->
            <div class="mb-4">
                <x-input type="email" name="email" placeholder="Your email" label="Email Address" required="true" />
            </div>
        
            <!-- Password Field -->
            <div class="mb-4">
                <x-input type="password" name="password" placeholder="******" label="Enter password" required="true" />
            </div>
        
            <!-- Confirm Password Field -->
            <div class="mb-4">
        
        
                <x-input type="password" name="password_confirmation" placeholder="******" label="password confirmation"
                    required="true" />
            </div>
        
            <!-- Submit Button -->
            <button type="submit"
                class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">
                Register
            </button>
        </form>
        <p class="text-sm mt-4 text-center text-gray-600 dark:text-gray-400">
            Already have an account? <a href="{{ route('login') }}" class="text-blue-500 hover:underline">Login</a>
        </p>
    </div>
</div>

@endsection
