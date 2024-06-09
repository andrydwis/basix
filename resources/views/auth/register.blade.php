<x-core.layouts.auth>
    <div class="container flex h-full flex-row items-center justify-center py-8">
        <div class="rounded-lg border-4 border-black bg-white p-4 shadow-neo w-[500px]">
            <div class="flex flex-col gap-4">
                <div class="flex flex-row items-center gap-4">
                    <a href="{{ route('home') }}">
                        <x-core.buttons.solid class="p-2 bg-white">
                            <x-core.icons.back/>
                        </x-core.buttons.solid>
                    </a>
                    <h2 class="text-2xl font-bold">Daftar</h2>
                </div>
                <form action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <x-core.inputs.label for="input_name" required-="true">
                            Nama
                        </x-core.inputs.label>
                        <x-core.inputs.text id="input_name" name="name" type="text" placeholder="Masukkan Nama" required="true" autofocus/>
                        <x-core.inputs.error name="name"/>
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" type="email" placeholder="Masukkan Email" required="true" autocomplete="username"/>
                        <x-core.inputs.error name="email"/>
                        <x-core.inputs.label for="input_password" required="true">
                            Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password" name="password" type="password" placeholder="Masukkan Password" required="true" autocomplete="new-password"/>
                        <x-core.inputs.error name="password"/>
                        <x-core.inputs.label for="input_password_confirmation" required="true">
                            Konfirmasi Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password_confirmation" name="password_confirmation" type="password" placeholder="Masukkan Konfirmasi Password" required="true" autocomplete="new-password"/>
                        <x-core.inputs.error name="password_confirmation"/>
                        <div class="flex flex-row items-center justify-end">
                            <a href="{{ route('login') }}" class="text-lg font-bold hover:underline">Sudah Punya Akun?</a>
                        </div>
                        <x-core.buttons.solid type="submit" class="bg-green-400">Daftar</x-core.buttons.solid>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-core.layouts.auth>