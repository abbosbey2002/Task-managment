<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
        </style>
    @endif
</head>

<body class="bg-gray-100 dark:bg-gray-900 dark:text-white">
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm bg-white dark:bg-gray-800 p-8 rounded-lg shadow-md">
            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
            <form>
                <div class="mb-4">
                    <label class="block text-sm mb-2">Email</label>
                    <input type="email" class="w-full p-2 border rounded dark:bg-gray-700 dark:border-gray-600"
                        placeholder="example@example.com">
                </div>
                <div class="mb-4">
                    <x-input type="email" name="email" label="Email Address" required="true" />
                </div>
                <div class="mb-4">
                    <label class="block text-sm mb-2">Password</label>
                    <input type="password" class="w-full p-2 border rounded dark:bg-gray-700 dark:border-gray-600"
                        placeholder="••••••••">
                </div>
                <button class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Login</button>
            </form>
            <p class="text-sm mt-4 text-center">
                Don't have an account? <a href="register.html" class="text-blue-500 hover:underline">Register</a>
            </p>
        </div>
    </div>
</body>

</html>
