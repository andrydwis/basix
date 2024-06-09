<div>
    <div class="border-r-4 border-black bg-white p-4 h-screen sticky top-0 overflow-y-auto" x-show="showSidebar">
        <div class="flex flex-row items-center justify-between">
            <a href="{{ route('home') }}" class="text-2xl font-bold">
                {{ config('app.name') }}
            </a>
            <button>
                <x-core.buttons.solid class="bg-white p-2" @click="showSidebar = !showSidebar">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5"/>
                    </svg>
                </x-core.buttons.solid>
            </button>
        </div>
        <div class="py-12">
            <div class="flex flex-col gap-2 border-l-4 border-black mb-4">
                <a href="{{ route('core.dashboard.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-blue-100 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/>
                    </svg>
                    <span>
                        Dashboard
                    </span>
                </a>
            </div>
            <span class="mb-2 text-2xl font-bold">Data Umum</span>
            <div class="flex flex-col gap-2 border-l-4 border-black mb-4">
                <a href="{{ route('core.users.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-blue-100 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd"/>
                    </svg>
                    <span>
                        Pengguna
                    </span>
                </a>
                <a href="{{ route('core.users.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-blue-100 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd"/>
                    </svg>
                    <span>
                        Pengguna
                    </span>
                </a>
                <a href="{{ route('core.users.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-blue-100 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd"/>
                    </svg>
                    <span>
                        Pengguna
                    </span>
                </a>
                <a href="{{ route('core.users.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-blue-100 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd"/>
                    </svg>
                    <span>
                        Pengguna
                    </span>
                </a>
                <a href="{{ route('core.users.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-blue-100 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd"/>
                    </svg>
                    <span>
                        Pengguna
                    </span>
                </a>
                <a href="{{ route('core.users.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-blue-100 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                        <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd"/>
                    </svg>
                    <span>
                        Pengguna
                    </span>
                </a>


            </div>
        </div>
    </div>
</div>