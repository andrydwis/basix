<nav class="sticky top-0 border-b-4 border-black bg-white p-4 z-30">
    <div class="flex flex-row items-center justify-between">
        <div class="flex flex-row items-center gap-4">
            <x-core.buttons.solid class="p-2" x-cloak x-show="!showSidebar" @click="showSidebar = !showSidebar">
                <x-core.icons.menu/>
            </x-core.buttons.solid>
            <a href="{{ route('home') }}" class="text-2xl font-bold" x-cloak x-show="!showSidebar">{{ config('app.name') }}</a>
        </div>
        @auth
            <x-core.dropdowns.app width="w-[200px]">
                <x-slot name="trigger">
                    <x-core.buttons.solid class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z"/>
                        </svg>
                    </x-core.buttons.solid>
                </x-slot>
                <x-slot name="content">
                    <x-core.forms.app action="{{ route('logout') }}" method="POST">
                        <div class="flex flex-col gap-4">
                            <div class="flex flex-row items-center gap-4">
                                <span class="rounded-full border-4 border-black bg-white p-2">
                                    <x-core.icons.user/>
                                </span>
                                <span class="font-bold line-clamp-2">{{ auth()->user()->name }}</span>
                            </div>
                            <x-core.buttons.solid type="submit" class="bg-red-400">
                                Keluar
                            </x-core.buttons.solid>
                        </div>
                    </x-core.forms.app>
                </x-slot>
            </x-core.dropdowns.app>
        @else
            <a href="{{ route('login') }}">
                <x-core.buttons.solid class="bg-blue-400">
                    Masuk
                </x-core.buttons.solid>
            </a>
        @endauth
    </div>
</nav>