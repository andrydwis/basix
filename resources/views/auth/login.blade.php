<x-core.layouts.auth>
    <div class="container flex h-full flex-col items-center justify-center">
        <x-core.cards.app class="w-[400px]">
            <x-slot name="beforeTitle">
                <a href="{{ route('home') }}">
                    <x-core.buttons.solid class="p-2 bg-white">
                        <x-core.icons.back/>
                    </x-core.buttons.solid>
                </a>
            </x-slot>
            <x-slot name="title">
                Masuk
            </x-slot>
            <x-core.forms.app action="{{ route('login') }}" method="POST">
                <div class="flex flex-col gap-4">
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required="true" autocomplete="username" autofocus/>
                        <x-core.inputs.error name="email"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password" required="true">
                            Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password" name="password" placeholder="Masukkan Password" required="true" autocomplete="current-password"/>
                        <x-core.inputs.error name="password"/>
                    </x-core.inputs.group>
                    <div class="flex flex-row items-center justify-end">
                        <a href="{{ route('password.request') }}" class="text-lg font-bold hover:underline">Lupa password?</a>
                    </div>
                    <x-core.buttons.solid type="submit" class="bg-blue-400">Masuk</x-core.buttons.solid>
                </div>
            </x-core.forms.app>
        </x-core.cards.app>
    </div>
</x-core.layouts.auth>