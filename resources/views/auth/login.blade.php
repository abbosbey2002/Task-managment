@extends('layouts.guest')

@section('title', 'Login')

@section('content')
    <div class="flex items-center justify-center  min-h-[vh]">
        <div class="w-full max-w-sm bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="mb-4">
                    <x-input type="email" name="email" placeholder="Your email" label="Email Address" required="true" />
                </div>
                <div class="mb-4">
                    <x-input type="password" name="password" placeholder="******" label="Enter password"
                        required="true" />
                </div>
                <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Login</button>
            </form>
            <p class="text-sm mt-4 text-center">
                Don't have an account? <a href="register.html" class="text-blue-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
@endsection
