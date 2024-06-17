<x-core.layouts.auth>
    <div class="container flex h-full flex-col items-center justify-center p-4 sm:p-0">
        <x-core.cards.app title="Konfirmasi Password" class="max-w-[400px] w-full">
            <x-core.alerts.app/>
            <x-core.forms.app action="{{ route('password.confirm') }}" method="POST">
                <div class="flex flex-col gap-4">
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password" required="true">
                            Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password" name="password" placeholder="Masukkan Password" required="true" autocomplete="current-password"/>
                        <x-core.inputs.error name="password"/>
                    </x-core.inputs.group>
                    <x-core.buttons.solid type="submit" class="bg-green-400">
                        Konfirmasi
                    </x-core.buttons.solid>
                </div>
            </x-core.forms.app>
        </x-core.cards.app>
    </div>
</x-core.layouts.auth>
