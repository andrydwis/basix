<x-core.layouts.auth>
    <div class="container flex flex-col items-center justify-center p-4 py-8">
        <x-core.cards.app title="Lupa Password?" class="max-w-[400px] w-full">
            <x-core.alerts.app/>
            <x-core.forms.app action="{{ route('password.email') }}" method="POST">
                <div class="flex flex-col gap-4">
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" type="email" value="{{ old('email') }}" placeholder="Masukkan email" required="true" autofocus/>
                        <x-core.inputs.error name="email"/>
                    </x-core.inputs.group>
                    <x-core.buttons.solid type="submit" class="bg-green-400">
                        Kirim Link Reset Password
                    </x-core.buttons.solid>
                </div>
            </x-core.forms.app>
        </x-core.cards.app>
    </div>
</x-core.layouts.auth>
