@props(['name', 'title'])

<div x-data="{ show : false , name : '{{ $name }}' }"
        x-show="show"
        x-on:open-modal.window="show = ($event.detail.name === name)"
        x-on:close-modal.window="show = false"
        x-on:keydown.escape.window="show = false"
        x-transition.duration
        x-init="$watch('show', value => {
            if (value) {
                document.body.classList.add('overflow-y-hidden');
            } else {
                document.body.classList.remove('overflow-y-hidden');
            }
        })"
        x-cloak
        class="fixed inset-0 z-40" >

    {{-- Gray Background --}}
    <div @click="show = false" class="fixed inset-0 bg-black/50 backdrop-blur"></div>

    {{-- Modal Body --}}
    <x-core.cards.app title="{{ $title }}" {{ $attributes->twMerge('fixed inset-0 m-auto max-h-[50%] h-max w-[80%] lg:w-1/2 xl:w-1/3 overflow-y-auto shadow-none') }}>
        <x-slot name="afterTitle">
            <x-core.buttons.solid class="p-2" @click="show = false">
                <x-core.icons.x/>
            </x-core.buttons.solid>
        </x-slot>
        {{ $slot }}
    </x-core.cards.app>
</div>