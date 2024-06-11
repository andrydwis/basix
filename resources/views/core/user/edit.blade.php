<x-core.layouts.app>
    <div class="rounded-lg border-4 border-black bg-white p-4 shadow-neo">
        <div class="flex flex-col gap-4">
            <div class="flex flex-row items-center gap-4">
                <a href="{{ route('core.users.index') }}">
                    <x-core.buttons.solid class="p-2 bg-white">
                        <x-core.icons.back/>
                    </x-core.buttons.solid>
                </a>
                <h2 class="text-2xl font-bold">Edit Pengguna</h2>
            </div>
            <x-core.forms.app action="{{ route('core.users.update', [$user]) }}" method="PATCH">
                <div class="flex flex-col gap-4">
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_name" required="true">
                            Nama
                        </x-core.inputs.label>
                        <x-core.inputs.text id="input_name" name="name" value="{{ old('name', $user?->name) }}" placeholder="Masukkan Nama" required="true" autofocus/>
                        <x-core.inputs.error name="name"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" value="{{ old('email', $user?->email) }}" placeholder="Masukkan Email" required="true" autocomplete="username"/>
                        <x-core.inputs.error name="email"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label>
                            Telepon
                        </x-core.inputs.label>
                        <x-core.inputs.tel id="input_phone" name="phone" value="{{ old('phone', $user?->phone) }}" placeholder="Masukkan Telepon"/>
                        <x-core.inputs.error name="phone"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password">
                            Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password" name="password" placeholder="Masukkan Password" autocomplete="new-password"/>
                        <x-core.inputs.error name="password"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password_confirmation">
                            Konfirmasi Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password_confirmation" name="password_confirmation" placeholder="Masukkan Konfirmasi Password" autocomplete="new-password"/>
                        <x-core.inputs.error name="password_confirmation"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_role" required="true">
                            Role
                        </x-core.inputs.label>
                        <x-core.inputs.select id="input_role" name="role" required="true" value="{{ old('role', $user?->roles?->first()?->name) }}" :options="$roles" optionPlaceholder="-- Pilih Role --">
                        </x-core.inputs.select>
                        <x-core.inputs.error name="role"/>
                    </x-core.inputs.group>
                    <x-core.buttons.solid type="submit" class="bg-green-400">Simpan</x-core.buttons.solid>
                </div>
            </x-core.forms.app>
        </div>
    </div>
</x-core.layouts.app>