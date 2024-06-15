<x-core.layouts.auth>
    <div class="container flex h-full flex-col items-center justify-center py-8 gap-4">
        <x-core.cards.app>
            <img src="{{ asset('images/logos/basix.png') }}" alt="logo" class="size-80 hover:brightness-50 rounded-lg transition-all">
        </x-core.cards.app>
        <div class="flex flex-row items-center gap-4">
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
    </div>
</x-core.layouts.auth>