@props([
    'method' => 'POST',
])
<form {{ $attributes }} method="{{ $method == 'GET' ? 'GET' : 'POST' }}" enctype="multipart/form-data">
    @if($method != 'GET')
        @csrf
    @endif
    @if(in_array($method, ['PUT', 'PATCH', 'DELETE']))
        @method($method)
    @endif
    {{ $slot }}
</form>