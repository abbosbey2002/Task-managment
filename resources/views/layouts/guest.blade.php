<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Task Managment')</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
        </style>
    @endif
</head>

<body class="bg-gray-100 dark:bg-gray-900 dark:text-white">
    <!-- Navbar -->
    <nav class="bg-gray-100 dark:bg-gray-900 border-b border-gray-200 dark:border-gray-700">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
          <!-- Left Section: Brand -->
          <a href="{{ url('/') }}" class="text-xl font-semibold text-gray-800 dark:text-white">
            {{ config('app.name', 'Laravel') }}
          </a>
          <!-- Right Section: Links -->
          <div class="flex space-x-4">
            <a href="/login" class="text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">
              Login
            </a>
            <a href="/register" class="text-gray-600 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400">
              Register
            </a>
          </div>
        </div>
      </nav>
    <!-- Content -->
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</p>
    </footer>

</body>

</html>
