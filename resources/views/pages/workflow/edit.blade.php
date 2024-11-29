@extends('layouts.app')

@section('content')
    <div class="bg-gray-800 shadow-lg rounded-lg p-6 text-gray-200 max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold mb-4">Edit Task</h1>
        <form action="{{ route('workflow.update', $workflow->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Field -->
            <div class="mb-4">
                <x-input type="text" name="title" placeholder="Title" label="Title"
                    value="{{ old('title', $workflow->title) }}" required="true" />
            </div>

            <!-- Status Field -->
            <div class="mb-4">
                <x-select name="status" label="Task Status" :options="$options" :selected="old('status', $workflow->status)" required="true" />
            </div>

            <!-- Deadline Field -->
            <div class="mb-4">
                <x-input type="datetime-local" name="deadline" placeholder="Deadline" label="Deadline"
                    value="{{ old('deadline', $workflow->deadline ? \Carbon\Carbon::parse($workflow->deadline)->format('Y-m-d\TH:i') : '') }}"
                    required="true" />
            </div>

            <!-- Submit Button -->
            <x-button type="submit" class="bg-blue-600 hover:bg-blue-700">
                Update Task
            </x-button>
        </form>
    </div>
@endsection
