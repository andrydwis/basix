<x-core.layouts.auth>
    <div class="container flex h-full flex-row items-center justify-center py-8 gap-4">
        <x-core.buttons.solid class="bg-white">
            {{ config('app.name') }}
        </x-core.buttons.solid>
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <x-core.buttons.solid type="submit" class="bg-red-400">
                    Keluar
                </x-core.buttons.solid>
            </form>
        @else
            <a href="{{ route('login') }}">
                <x-core.buttons.solid class="bg-blue-400">
                    Masuk
                </x-core.buttons.solid>
            </a>
            <a href="{{ route('register') }}">
                <x-core.buttons.solid class="bg-green-400">
                    Daftar
                </x-core.buttons.solid>
            </a>
        @endauth
    </div>
</x-core.layouts.auth>