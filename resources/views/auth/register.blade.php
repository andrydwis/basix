<x-core.layouts.auth>
    <div class="container flex flex-col items-center justify-center p-4 py-8">
        <x-core.cards.app class="max-w-[400px] w-full">
            <x-slot name="beforeTitle">
                <a href="{{ route('home') }}">
                    <x-core.buttons.solid class="p-2">
                        <x-core.icons.back/>
                    </x-core.buttons.solid>
                </a>
            </x-slot>
            <x-slot name="title">
                Daftar
            </x-slot>
            <x-core.forms.app action="{{ route('register') }}" method="POST">
                <div class="flex flex-col gap-4">
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_name" required-="true">
                            Nama
                        </x-core.inputs.label>
                        <x-core.inputs.text id="input_name" name="name" type="text" placeholder="Masukkan Nama" required="true" autofocus/>
                        <x-core.inputs.error name="name"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" type="email" placeholder="Masukkan Email" required="true" autocomplete="username" autofocus/>
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
                    <div class="flex flex-row items-center justify-end">
                        <a href="{{ route('login') }}" class="text-lg font-bold hover:underline">Sudah punya akun?</a>
                    </div>
                    <x-core.buttons.solid type="submit" class="bg-green-400">Daftar</x-core.buttons.solid>
                    @if(config('services.google.client_id'))
                        <div class="flex items-center text-lg font-bold before:flex-1 before:border-t before:border-black before:me-6 after:flex-1 after:border-t after:border-black after:ms-6">Atau</div>
                        <a href="{{ route('socialite.redirect', ['google']) }}">
                            <x-core.buttons.solid type="button" class="w-full">
                                <x-core.icons.google/>
                                Daftar dengan Google
                            </x-core.buttons.solid>
                        </a>
                    @endif
                </div>
            </x-core.forms.app>
        </x-core.cards.app>
    </div>
</x-core.layouts.auth>