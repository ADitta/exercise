@props(['value'])
<label class="relative w-full">
    <textarea class="textarea floating-input peer" name="{{ $value }}"
        placeholder="{{ $value }}">{{ old($value) }}</textarea>
    <span
        class="floating-input-label">
        {{ ucfirst($value) }}
    </span>
    @error($value)
        <span class="text-red-500 text-sm">{{ $message }}</span>
    @enderror
</label>
