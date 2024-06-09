@props([
    'required' => false,
])
<label {{ $attributes->twMerge('font-medium text-lg') }}>
    {{ $slot }}
    @if($required)
        <span class="text-red-400">
            *
        </span>
    @endif
</label>