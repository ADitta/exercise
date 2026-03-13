@props(['value'])
<label class="relative w-full">
    <input class="input floating-input peer" name="{{ $value }}"
        value="{{ old( $value) }}" placeholder="" />
    <span
        class="floating-input-label">
        {{ ucfirst($value) }}
    </span>
</label>
@error($value)
    <span class="text-red-500 text-sm">{{ $message }}</span>
@enderror
