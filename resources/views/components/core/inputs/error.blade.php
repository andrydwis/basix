@props([
    'name',
])
@error($name)
<span class="text-red-400">{{ $message }}</span>
@enderror