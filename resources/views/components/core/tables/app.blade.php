@props([
    'columns' => [],
])
<div class="overflow-auto">
    <table class="w-full">
        <thead>
            <tr>
                @foreach($columns as $column)
                    <x-core.tables.th :column="$column"/>
                @endforeach
            </tr>
        </thead>
        <tbody>
            {{ $slot }}
        </tbody>
    </table>
</div>