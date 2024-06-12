<x-core.layouts.app>
    <x-core.modals.app name="filter" title="Filter Pengguna">
        <x-core.forms.app method="GET" @submit.prevent="filter(this)">
            <div class="flex flex-col gap-4">
                <x-core.inputs.group>
                    <x-core.inputs.label for="input_filter_role">
                        Role
                    </x-core.inputs.label>
                    <x-core.inputs.select id="input_filter_role" name="filter[role]" value="{{ request()->input('filter.role') }}" :options="$roles" optionPlaceholder="-- Pilih Role --">
                    </x-core.inputs.select>
                    <x-core.inputs.error name="role"/>
                </x-core.inputs.group>
                <x-core.buttons.solid type="submit" class="bg-white">Filter</x-core.buttons.solid>
            </div>
        </x-core.forms.app>
    </x-core.modals.app>
    <x-core.cards.app title="Daftar Pengguna" withSearch="true">
        <x-slot name="actions">
            <x-core.buttons.solid class="bg-white p-2" @click="$dispatch('open-modal',{name:'filter'})">
                <x-core.icons.filter/>
            </x-core.buttons.solid>
            <a href="{{ route('core.users.index') }}">
                <x-core.buttons.solid class="bg-white p-2">
                    <x-core.icons.reset/>
                </x-core.buttons.solid>
            </a>
            <a href="{{ route('core.users.create') }}">
                <x-core.buttons.solid class="bg-green-400 p-2">
                    <x-core.icons.plus/>
                </x-core.buttons.solid>
            </a>
        </x-slot>
        <x-core.alerts.app/>
        <x-core.tables.app :columns="$columns">
            @forelse($users as $user)
                <tr>
                    <td class="border-4 border-black p-2">{{ $user?->name }}</td>
                    <td class="border-4 border-black p-2">
                        <div class="flex flex-col gap-1">
                            <a href="mailto:{{ $user?->email }}" class="flex flex-row items-center gap-2 hover:underline">
                                <x-core.icons.email/>
                                {{ $user?->email }}
                                @if($user?->email_verified_at)
                                    <div class="text-green-400">
                                        <x-core.icons.check/>
                                    </div>
                                @endif
                            </a>
                            <span class="flex flex-row items-center gap-2">
                                <x-core.icons.phone/>
                                {{ $user?->phone ?? '-' }}
                            </span>
                        </div>
                    </td>
                    <td class="border-4 border-black p-2">
                        @if($user?->roles?->first())
                            <x-core.badges.app>
                                {{ \App\Enums\Roles::tryFrom($user?->roles?->first()?->name)->label() }}
                            </x-core.badges.app>
                        @else
                            -
                        @endif
                    </td>
                    <td class="border-4 border-black p-2">
                        <div class="flex flex-row items-center gap-2">
                            <a href="{{ route('core.users.edit', $user->id) }}">
                                <x-core.buttons.solid class="bg-amber-400 p-2">
                                    <x-core.icons.edit/>
                                </x-core.buttons.solid>
                            </a>
                            <x-core.forms.app action="{{ route('core.users.destroy', $user) }}" method="DELETE">
                                <x-core.buttons.solid type="submit" @click="confirm('Hapus pengguna ini?') ? true : event.preventDefault()" :disabled="auth()->user()->id == $user->id" class="bg-red-400 p-2">
                                    <x-core.icons.delete/>
                                </x-core.buttons.solid>
                            </x-core.forms.app>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="border-4 border-black p-2 text-center" colspan="4">
                        Tidak ada data pengguna
                    </td>
                </tr>
            @endforelse
        </x-core.tables.app>
        {{ $users->withQueryString()->links() }}
    </x-core.cards.app>
</x-core.layouts.app>