@if(session('success'))
    <div class="flex flex-row items-center justify-between gap-4 rounded-lg border-4 border-black bg-green-400 p-2 shadow-neo" x-data="{ showAlert: true }" x-show="showAlert">
        <div class="flex flex-row gap-2 items-center">
            <x-core.icons.check/>
            <span class="text-lg font-bold">
                {{ session('success') }}
            </span>
        </div>
        <x-core.buttons.solid class="bg-white p-2" @click="showAlert = !showAlert">
            <x-core.icons.x/>
        </x-core.buttons.solid>
    </div>
@endif