@props([
    'title' => null,
    'beforeTitle' => null,
    'afterTitle' => null,
    'actions' => null,
    'withSearch' => false,
])
<div {{ $attributes->twMerge('rounded-lg border-4 border-black bg-white p-4 shadow-neo') }}>
    <div class="flex flex-col gap-4">
        @if($title)
            <div class="flex flex-row items-center justify-between gap-4">
                <div class="flex flex-row items-center gap-4">
                    {{ $beforeTitle }}
                    <h2 class="text-2xl font-bold">{{ $title }}</h2>
                </div>
                {{ $afterTitle }}
            </div>
        @endif
        @if($actions || $withSearch)
            <div class="flex flex-row flex-wrap items-center justify-between gap-4">
                @if($withSearch)
                    <x-core.forms.app method="GET" @submit.prevent="filter" class="flex flex-row items-center gap-4">
                        <x-core.inputs.text id="input_search" name="filter[search]" placeholder="Cari..." value="{{ request()->input('filter.search') ?? null }}"/>
                        <x-core.buttons.solid class="p-2">
                            <x-core.icons.search/>
                        </x-core.buttons.solid>
                    </x-core.forms.app>
                @endif
                @if($actions)
                    <div class="flex flex-row items-center gap-4">
                        {{ $actions }}
                    </div>
                @endif
            </div>
        @endif
        {{ $slot }}
    </div>
</div>