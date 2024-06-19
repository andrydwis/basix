@props([
    'script' => null,
    'value' => null
])
<div {{ $attributes->twMerge('rounded-lg border-4 border-black bg-white overflow-hidden shadow-neo') }}>
    <div class="quill !h-[300px]">
        {{ $value }}
    </div>
    {{ $slot }}
</div>

@pushonce('scripts')
    <script src="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/quill@2.0.2/dist/quill.snow.css" rel="stylesheet">
@endpushonce

@push('scripts')
    @if($script)
        {!! $script !!}
    @else
        <script>
            const quill = new Quill('.quill', {
                theme: 'snow'
            });
        </script>
    @endif
@endpush
