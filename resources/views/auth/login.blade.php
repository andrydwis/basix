<x-core.layouts.auth>
    <div class="container flex h-full flex-row items-center justify-center py-8">
        <div class="rounded-lg border-4 border-black bg-white p-4 shadow-neo w-[500px]">
            <div class="flex flex-col gap-4">
                <div class="flex flex-row items-center gap-4">
                    <a href="{{ route('home') }}">
                        <x-core.buttons.solid class="p-2 bg-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>
                        </x-core.buttons.solid>
                    </a>
                    <h2 class="text-2xl font-bold">Masuk</h2>
                </div>
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="flex flex-col gap-4">
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" type="email" placeholder="Masukkan Email" required="true" autocomplete="username" autofocus />
                        <x-core.inputs.error name="email"/>
                        <x-core.inputs.label for="input_password" required="true">
                            Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password" name="password" type="password" placeholder="Masukkan Password" required="true" autocomplete="current-password"/>
                        <x-core.inputs.error name="password"/>
                        <div class="flex flex-row items-center justify-end">
                            <a href="{{ route('password.request') }}" class="text-lg font-bold hover:underline">Lupa password?</a>
                        </div>
                        <x-core.buttons.solid type="submit" class="bg-blue-400">Masuk</x-core.buttons.solid>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-core.layouts.auth>