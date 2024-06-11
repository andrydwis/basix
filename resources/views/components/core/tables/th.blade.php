@props([
    'column' => [],
])
<th class="border-4 border-black p-2 {{ $column['class'] ?? null }}">
    <div class="flex flex-row items-center justify-center gap-2">
        {{ $column['label'] }}
        @if($column['sortable'])
            <button data-sort="{{ $column['name'] }}">
                @if(!request()->has('sort'))
                    <x-core.icons.arrow-up-down/>
                @elseif(request()->has('sort') && !\Illuminate\Support\Str::startsWith(request()->get('sort'), '-'))
                    <x-core.icons.arrow-up/>
                @elseif(request()->has('sort') && \Illuminate\Support\Str::startsWith(request()->get('sort'), '-'))
                    <x-core.icons.arrow-down/>
                @endif
            </button>
        @endif
    </div>
</th>