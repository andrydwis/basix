@props([
    'options' => [],
    'optionPlaceholder' => '-- Pilih --',
])
<select {{ $attributes->twMerge('rounded-lg border-4 border-black transition-all shadow-neo focus:translate-x-1 focus:translate-y-1 focus:border-black focus:shadow-none focus:ring-0') }}>
    @if($optionPlaceholder)
        <option value="">{{ $optionPlaceholder }}</option>
    @endif
    @foreach($options as $value => $label)
        <option value="{{ $value }}" @selected($value == old($attributes->get('name')) || in_array($value, (array) old($attributes->get('name'))) || $value == $attributes->get('value') || in_array($value, (array) $attributes->get('value')))>
            {{ $label }}
        </option>
    @endforeach
    {{ $slot }}
</select>