<div class="mb-3">
    <button type="{{ $type ?? 'submit' }}"
        class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300"
        {{ $attributes }}>
        {{ $slot }}
    </button>
</div>
