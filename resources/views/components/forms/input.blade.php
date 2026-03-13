@props(['value'])
<label class="relative w-full">
    <input class="input bg-white text-black border-primary w-full pt-4 pb-1 peer placeholder-transparent" name="{{ $value }}"
        value="{{ old( $value) }}" placeholder="" />
    <span
        class="absolute left-3 top-1 text-xs text-gray-500 transition-all
                     peer-placeholder-shown:top-3.5 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400
                     peer-focus:top-1 peer-focus:text-xs peer-focus:text-gray-500">
        {{ ucfirst($value) }}
    </span>
</label>
@error($value)
    <span class="text-red-500 text-sm">{{ $message }}</span>
@enderror
