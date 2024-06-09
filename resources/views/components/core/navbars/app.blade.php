<nav class="sticky top-0 border-b-4 border-black bg-white p-4">
    <div class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center gap-4">
            <x-core.buttons.solid class="bg-blue-400 p-2" x-cloak x-show="!showSidebar" @click="showSidebar = !showSidebar"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5"/>
                </svg>
            </x-core.buttons.solid>
            <a href="" class="text-2xl font-bold">Basix</a>
        </div>
        @auth
            <div class="flex flex-row items-center gap-4">
                <x-core.dropdowns.default>
                    <x-slot name="trigger">
                        <x-core.buttons.solid class="bg-blue-400 p-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
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