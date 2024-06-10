@props([
    'method' => 'POST',
    'enctype' => 'multipart/form-data',
])
<form {{ $attributes }} method="{{ $method }}" enctype="multipart/form-data">
    @if($method !== 'GET')
        @csrf
    @endif
    @if(in_array($method, ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif
    {{ $slot }}
</form>