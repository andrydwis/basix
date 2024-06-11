<div class="fixed top-0 left-0 z-40 h-screen overflow-y-auto border-r-4 border-black bg-white p-4 transition-all min-w-[300px] lg:sticky"
        x-show="showSidebar"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95">
    <div class="flex flex-row items-center justify-between">
        <a href="{{ route('home') }}" class="text-2xl font-bold">
            {{ config('app.name') }}
        </a>
        <button>
            <x-core.buttons.solid class="bg-white p-2" @click="showSidebar = !showSidebar">
                <x-core.icons.x/>
            </x-core.buttons.solid>
        </button>
    </div>
    <div class="py-12">
        <div class="mb-4 flex flex-col gap-2 border-l-4 border-black">
            <a href="{{ route('core.dashboard.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-neutral-300 hover:text-black">
                <x-core.icons.dashboard/>
                <span>
                    Dashboard
                </span>
            </a>
        </div>
        <span class="mb-2 text-2xl font-bold">Data Umum</span>
        <div class="mb-4 flex flex-col gap-2 border-l-4 border-black">
            <a href="{{ route('core.users.index') }}" class="flex flex-row items-center gap-2 rounded-r-full p-2 text-lg font-semibold text-neutral-600 hover:bg-neutral-300 hover:text-black">
                <x-core.icons.user/>
                <span>
                    Pengguna
                </span>
            </a>
        </div>
    </div>
</div>
<div class="fixed top-0 left-0 z-20 h-full w-full bg-black/50 lg:hidden" x-show="showSidebar" @click="showSidebar = !showSidebar"></div>