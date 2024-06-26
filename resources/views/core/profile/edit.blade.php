<x-core.layouts.app>
    <x-core.modals.app name="delete" title="Hapus Akun">
        <x-core.forms.app id="form_delete" method="DELETE" x-on:set-delete.window="$el.action = $event.detail.action">
            <div class="flex flex-col gap-4">
                <div>
                    Apakah anda yakin untuk menghapus akun ini?
                </div>
                <x-core.buttons.solid id="form_delete" type="submit" class="bg-red-400">
                    <x-core.icons.delete />
                    Hapus
                </x-core.buttons.solid>
            </div>
        </x-core.forms.app>
    </x-core.modals.app>
    <div class="flex flex-col gap-4">
        <x-core.cards.app title="Edit Profil">
            <x-core.alerts.app />
            <x-core.forms.app action="{{ route('core.profile.update') }}" method="PATCH">
                <div class="flex flex-col gap-4">
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_name" required="true">
                            Nama
                        </x-core.inputs.label>
                        <x-core.inputs.text id="input_name" name="name" value="{{ old('name', $user?->name) }}"
                            placeholder="Masukkan Nama" required="true" autofocus />
                        <x-core.inputs.error name="name" />
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" value="{{ old('email', $user?->email) }}"
                            placeholder="Masukkan Email" required="true" autocomplete="username" />
                        <x-core.inputs.error name="email" />
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label>
                            Telepon
                        </x-core.inputs.label>
                        <x-core.inputs.tel id="input_phone" name="phone" value="{{ old('phone', $user?->phone) }}"
                            placeholder="Masukkan Telepon" />
                        <x-core.inputs.error name="phone" />
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password">
                            Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password" name="password" placeholder="Masukkan Password"
                            autocomplete="new-password" />
                        <x-core.inputs.error name="password" />
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password_confirmation">
                            Konfirmasi Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password_confirmation" name="password_confirmation"
                            placeholder="Masukkan Konfirmasi Password" autocomplete="new-password" />
                        <x-core.inputs.error name="password_confirmation" />
                    </x-core.inputs.group>
                    <x-core.buttons.solid type="submit" class="bg-green-400">Simpan</x-core.buttons.solid>
                </div>
            </x-core.forms.app>
        </x-core.cards.app>
        <x-core.cards.app>
            <x-core.buttons.solid type="submit"
                @click="$dispatch('open-modal',{name:'delete'}); $dispatch('set-delete',{action: '{{ route('core.profile.destroy') }}'})"
                class="bg-red-400 ">
                Hapus Akun
            </x-core.buttons.solid>
        </x-core.cards.app>
    </div>
</x-core.layouts.app>