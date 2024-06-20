<x-core.layouts.app>
    <x-core.modals.app name="filter" title="Filter Pengguna">
        <x-core.forms.app method="GET" @submit.prevent="filter(this)">
            <div class="flex flex-col gap-4">
                <x-core.inputs.group>
                    <x-core.inputs.label for="input_filter_role">
                        Role
                    </x-core.inputs.label>
                    <x-core.inputs.select id="input_filter_role" name="filter[role]"
                        value="{{ request()->input('filter.role') }}" :options="$roles"
                        optionPlaceholder="-- Pilih Role --">
                    </x-core.inputs.select>
                    <x-core.inputs.error name="role" />
                </x-core.inputs.group>
                <x-core.buttons.solid type="submit">Filter</x-core.buttons.solid>
            </div>
        </x-core.forms.app>
    </x-core.modals.app>
    <x-core.modals.app name="delete" title="Hapus Pengguna">
        <x-core.forms.app id="form_delete" method="DELETE" x-on:set-delete.window="$el.action = $event.detail.action">
            <div class="flex flex-col gap-4">
                <div>
                    Apakah anda yakin menghapus pengguna ini?
                </div>
                <x-core.buttons.solid id="form_delete" type="submit" class="bg-red-400">
                    <x-core.icons.delete />
                    Hapus
                </x-core.buttons.solid>
            </div>
        </x-core.forms.app>
    </x-core.modals.app>
    <x-core.cards.app title="Daftar Pengguna" :withSearch="true">
        <x-slot name="actions">
            <x-core.buttons.solid class="p-2" @click="$dispatch('open-modal',{name:'filter'})">
                <x-core.icons.filter />
            </x-core.buttons.solid>
            <a href="{{ route('core.users.index') }}">
                <x-core.buttons.solid class="p-2">
                    <x-core.icons.reset />
                </x-core.buttons.solid>
            </a>
            <a href="{{ route('core.users.create') }}">
                <x-core.buttons.solid class="p-2 bg-green-400">
                    <x-core.icons.plus />
                </x-core.buttons.solid>
            </a>
        </x-slot>
        <x-core.alerts.app />
        <x-core.tables.app :columns="$columns">
            @forelse($users as $user)
                <tr>
                    <td class="p-2 border-4 border-black">{{ $user?->name }}</td>
                    <td class="p-2 border-4 border-black">
                        <div class="flex flex-col gap-1">
                            <a href="mailto:{{ $user?->email }}" class="flex flex-row items-center gap-2 hover:underline">
                                <x-core.icons.email />
                                {{ $user?->email }}
                                @if($user?->email_verified_at)
                                    <div class="text-green-400">
                                        <x-core.icons.check />
                                    </div>
                                @endif
                            </a>
                            <span class="flex flex-row items-center gap-2">
                                <x-core.icons.phone />
                                {{ $user?->phone ?? '-' }}
                            </span>
                        </div>
                    </td>
                    <td class="p-2 border-4 border-black">
                        @if($user?->roles?->first())
                            <x-core.badges.app>
                                {{ \App\Enums\Roles::tryFrom($user?->roles?->first()?->name)->label() }}
                            </x-core.badges.app>
                        @else
                            -
                        @endif
                    </td>
                    <td class="p-2 border-4 border-black">
                        <div class="flex flex-row items-center gap-2">
                            <a href="{{ route('core.users.edit', $user->id) }}">
                                <x-core.buttons.solid class="p-2 bg-amber-400">
                                    <x-core.icons.edit />
                                </x-core.buttons.solid>
                            </a>
                            <x-core.buttons.solid
                                @click="$dispatch('open-modal',{name:'delete'}); $dispatch('set-delete',{action: '{{ route('core.users.destroy', $user) }}'})"
                                :disabled="auth()->user()->id == $user->id" class="p-2 bg-red-400">
                                <x-core.icons.delete />
                            </x-core.buttons.solid>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="p-2 text-center border-4 border-black" colspan="4">
                        Tidak ada data pengguna
                    </td>
                </tr>
            @endforelse
        </x-core.tables.app>
        {{ $users->withQueryString()->links() }}
    </x-core.cards.app>
</x-core.layouts.app>