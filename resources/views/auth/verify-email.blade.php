<x-core.layouts.auth>
    <div class="container flex h-full flex-col items-center justify-center">
        <x-core.cards.app title="Verifikasi Email" class="w-[400px]">
            <x-core.alerts.app/>
            <x-core.forms.app action="{{ route('verification.send') }}" method="POST">
                <div class="flex flex-col gap-4">
                    <x-core.buttons.solid type="submit" class="bg-green-400">
                        Kirim Ulang Email Verifikasi
                    </x-core.buttons.solid>
                </div>
            </x-core.forms.app>
            <x-core.forms.app action="{{ route('logout') }}" method="POST">
                <div class="flex flex-col gap-4">
                    <x-core.buttons.solid type="submit" class="bg-red-400">
                        Logout
                    </x-core.buttons.solid>
                </div>
            </x-core.forms.app>
        </x-core.cards.app>
    </div>
</x-core.layouts.auth>
