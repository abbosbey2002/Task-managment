  <!-- Navbar -->
  <header class="bg-gray-800 shadow-md">
    <nav class="flex items-center justify-between p-4">
        <a href="/" class="text-lg font-semibold text-gray-200">Task Management</a>
        <div>
            <a href="{{route('workflow.create')}}" class="px-4 py-2 rounded-lg text-gray-300 hover:bg-gray-700">Add task</a>
            <a href="/profile" class="px-4 py-2 rounded-lg text-gray-300 hover:bg-gray-700">Profile</a>
            <form class="inline" method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="text-red-500 hover:underline">Logout</button>
            </form>
        </div>
    </nav>
</header>