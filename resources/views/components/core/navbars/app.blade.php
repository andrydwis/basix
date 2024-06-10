<nav class="sticky top-0 border-b-4 border-black bg-white p-4">
    <div class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center gap-4">
            <x-core.buttons.solid class="bg-white p-2" x-cloak x-show="!showSidebar" @click="showSidebar = !showSidebar"
            >
                <x-core.icons.menu/>
            </x-core.buttons.solid>
            <a href="{{ route('home') }}" class="text-2xl font-bold" x-cloak x-show="!showSidebar">{{ config('app.name') }}</a>
        </div>
        @auth
            <div class="flex flex-row items-center gap-4">
                <x-core.dropdowns.default>
                    <x-slot name="trigger">
                        <x-core.buttons.solid class="bg-white p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z"/>
                            </svg>
                        </x-core.buttons.solid>
                    </x-slot>
                    <x-slot name="content">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <x-core.buttons.solid type="submit" class="bg-red-400">
                                Keluar
                            </x-core.buttons.solid>
                        </form>
                    </x-slot>
                </x-core.dropdowns.default>
            </div>
        @else
            <div>
                <a href="{{ route('login') }}">
                    <x-core.buttons.solid class="bg-blue-400">
                        Masuk
                    </x-core.buttons.solid>
                </a>
            </div>
        @endauth
    </div>
</nav>