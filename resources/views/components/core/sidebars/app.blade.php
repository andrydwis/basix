<div class="border-r-4 border-black bg-white p-4" x-show="showSidebar">
    <div class="flex flex-row items-center justify-between">
        <h1 class="text-2xl font-bold">
            Menu
        </h1>
        <button>
            <x-core.buttons.solid class="bg-red-400 p-2" @click="showSidebar = !showSidebar">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m18.75 4.5-7.5 7.5 7.5 7.5m-6-15L5.25 12l7.5 7.5"/>
                </svg>
            </x-core.buttons.solid>
        </button>
    </div>
    <div class="py-12">
        <span class="mb-2 text-2xl font-bold">Data Umum</span>
        <div class="flex flex-col gap-2 border-l-4 border-black">
            <a href="{{ route('core.users.index') }}" class="p-2 text-lg font-semibold text-neutral-600 hover:bg-blue-100 hover:text-black">
                Pengguna
            </a>
        </div>
    </div>
</div>