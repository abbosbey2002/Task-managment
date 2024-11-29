@extends('layouts.app')

<?php

$options = [
    'pending' => 'Pending',
    'in_progress' => 'In Progress',
    'completed' => 'Completed',
];

?>

@section('content')
    <div class="bg-gray-800 shadow-lg rounded-lg p-6 text-gray-200 max-w-2xl mx-auto">

        <h1 class="text-2xl font-bold mb-4">Add New Task</h1>
        <form action="{{ route('workflow.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <x-input type="text" name="title" placeholder="title" label="Title" required="true" />
            </div>
            <div class="mb-4">
                <x-select name="status" label="Task Status" :options="$options" required="true" />
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Deadline</label>
                <input type="datetime-local" name="deadline" class="w-full border border-gray-300 rounded-lg p-2">

            </div>
            <x-button type="submit">Save Task</x-button>
        </form>
    </div>
@endsection
