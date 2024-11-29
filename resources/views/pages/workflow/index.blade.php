@extends('layouts.app')

@section('content')
<div class="bg-gray-800 shadow-lg rounded-lg p-6 text-gray-200">
    <h1 class="text-2xl font-bold mb-4">Tasks</h1>
    <table class="min-w-full bg-gray-800 border border-gray-700 rounded-lg">
        <thead>
            <tr class="bg-gray-700 text-gray-300">
                <th class="border-b border-gray-600 py-3 px-4 text-left">Title</th>
                <th class="border-b border-gray-600 py-3 px-4 text-left">Status</th>
                <th class="border-b border-gray-600 py-3 px-4 text-left">Deadline</th>
                <th class="border-b border-gray-600 py-3 px-4 text-left">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
            <tr class="hover:bg-gray-700 transition duration-200">
                <td class="border-b border-gray-700 py-3 px-4">{{ $task->title }}</td>
                <td class="border-b border-gray-700 py-3 px-4">{{ ucfirst($task->status) }}</td>
                <td class="border-b border-gray-700 py-3 px-4">{{ $task->deadline }}</td>
                <td class="border-b border-gray-700 py-3 px-4 flex space-x-2">
                    <a href="{{ route('workflow.edit', $task->id) }}"  class="text-blue-400 hover:underline">Edit</a>
                    <form action="{{ route('workflow.destroy', $task->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-400 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
