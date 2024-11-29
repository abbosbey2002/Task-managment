<div class="mb-3">
    @if ($label)
        <label for="{{ $id ?? $name }}" class="block text-sm mb-2">
            {{ $label }}
            @if ($required)
                <span class="text-danger">*</span>
            @endif
        </label>
    @endif

    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $id ?? $name }}"
        class="w-full p-2 border rounded dark:bg-gray-700 dark:border-gray-600 @error($name) is-invalid @enderror"
        value="{{ old($name, $value ?? '') }}" {{ $required ? 'required' : '' }} placeholder="{{ $placeholder }}"
        {{ $attributes }}>

    @error($name)
        <p class="mt-2 text-sm text-red-500">
            {{ $message }}
        </p>
    @enderror
</div>
