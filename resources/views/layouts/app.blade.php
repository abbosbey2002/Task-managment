<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <script>
        const userId = {{ auth()->id() }};
    </script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-900 text-gray-200 font-sans leading-normal tracking-normal">
  
@include('partials.navbar')
    <!-- Main Content -->
    <main class="container mx-auto min-h-[80vh] my-8 p-6 bg-gray-800 text-gray-200 shadow-md rounded-lg">
        @yield('content')
    </main>

    <!-- Footer -->
    <div class="bg-gray-800 py-4 text-center text-sm text-gray-400">
        @include('partials.footer')
    </div>
</body>

</html>
