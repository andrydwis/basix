@props(['align' => 'right', 'width' => 'w-48'])

@php
    $alignmentClasses = match ($align) {
        'left' => 'ltr:origin-top-left rtl:origin-top-right start-0',
        'top' => 'origin-top',
        default => 'ltr:origin-top-right rtl:origin-top-left end-0',
    };
@endphp

<div class="relative" x-data="{ showDropdown: false }" @click.outside="showDropdown = false" @close.stop="showDropdown = false">
    <div @click="showDropdown = !showDropdown">
        {{ $trigger }}
    </div>

    <div x-show="showDropdown"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            x-cloak
            class="absolute z-50 mt-2 {{ $width }} {{ $alignmentClasses }}"
            @click="showDropdown = false">
        <div {{ $attributes->twMerge('p-2 bg-white border-4 border-black shadow-neo rounded-lg') }}>
            {{ $content }}
        </div>
    </div>
</div>
