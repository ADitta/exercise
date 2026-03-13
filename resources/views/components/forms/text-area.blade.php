@props(['value'])
<label class="relative w-full">
    <textarea class="textarea bg-white text-black border-primary w-full pt-6 pb-1 peer placeholder-transparent" name="{{ $value }}"
        placeholder="{{ $value }}">{{ old($value) }}</textarea>
    <span
        class="absolute left-3 top-1 text-xs text-gray-500 transition-all
                     peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400
                     peer-focus:top-1 peer-focus:text-xs peer-focus:text-gray-500">
        {{ ucfirst($value) }}
    </span>
    @error($value)
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</label>
