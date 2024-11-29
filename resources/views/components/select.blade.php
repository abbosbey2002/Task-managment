<div class="mb-3">
    @if ($label)
        <label for="{{ $id ?? $name }}" class="block text-sm mb-2">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <select name="{{ $name }}" id="{{ $id ?? $name }}"
        class="w-full p-2 border rounded dark:bg-gray-700 dark:border-gray-600 @error($name) is-invalid @enderror">
        @foreach ($options as $optionValue => $optionLabel)
            <option value="{{ $optionValue }}" {{ old($name, $value ?? '') == $optionValue ? 'selected' : '' }}>
                {{ $optionLabel }}
            </option>
        @endforeach
    </select>

    @error($name)
        <p class="mt-2 text-sm text-red-500">
            {{ $message }}
        </p>
    @enderror
</div>
