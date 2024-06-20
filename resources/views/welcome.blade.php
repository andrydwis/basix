<x-core.layouts.auth>
    <div class="container flex flex-col items-center justify-center gap-4 p-4 py-8">
        <x-core.cards.app>
            <img src="{{ asset('images/logos/basix.png') }}" alt="logo"
                class="transition-all rounded-lg size-80 hover:brightness-50">
        </x-core.cards.app>
        <div class="flex flex-row items-center justify-between w-full gap-4 sm:justify-center">
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