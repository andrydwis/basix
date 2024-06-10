@props([
    'title' => null,
    'beforeTitle' => null,
    'actions' => null,
    'withSearch' => true,
])
<div {{ $attributes->twMerge('rounded-lg border-4 border-black bg-white p-4 shadow-neo') }}>
    <div class="flex flex-col gap-4">
        <x-core.alerts.app/>
        @if($title)
            <div class="flex flex-row items-center gap-4">
                {{ $beforeTitle }}
                <h2 class="text-2xl font-bold">{{ $title }}</h2>
            </div>
        @endif
        <div class="flex flex-row flex-wrap items-center justify-between gap-4">
            @if($withSearch)
                <x-core.forms.app action="" method="GET" class="flex flex-row items-center gap-4">
                    <x-core.inputs.text id="input_search" name="filter[search]" placeholder="Cari..." value="{{ request()->input('filter.search') ?? null }}"/>
                    <x-core.buttons.solid class="bg-white p-2">
                        <x-core.icons.search/>
                    </x-core.buttons.solid>
                </x-core.forms.app>
            @endif
            {{ $actions }}
        </div>
        {{ $slot }}
    </div>
</div>