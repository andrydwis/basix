<x-core.layouts.auth>
    <div class="container flex h-full flex-col items-center justify-center p-4 sm:p-0">
        <x-core.cards.app title="Reset Password" class="max-w-[400px] w-full">
            <x-core.alerts.app/>
            <x-core.forms.app action="{{ route('password.store') }}" method="POST">
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="flex flex-col gap-4">
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" type="email" value="{{ old('email', $request->email) }}" placeholder="Masukkan email" required="true" autofocus/>
                        <x-core.inputs.error name="email"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password" required="true">
                            Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password" name="password" placeholder="Masukkan Password" required="true" autocomplete="new-password"/>
                        <x-core.inputs.error name="password"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password_confirmation" required="true">
                            Konfirmasi Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password_confirmation" name="password_confirmation" placeholder="Masukkan Konfirmasi Password" required="true" autocomplete="new-password"/>
                        <x-core.inputs.error name="password_confirmation"/>
                    </x-core.inputs.group>
                    <x-core.buttons.solid type="submit" class="bg-green-400">
                        Reset Password
                    </x-core.buttons.solid>
                </div>
            </x-core.forms.app>
        </x-core.cards.app>
    </div>
</x-core.layouts.auth>