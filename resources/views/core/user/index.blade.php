<x-core.layouts.app>
    <x-core.cards.app title="Daftar Pengguna" withSearch="true">
        <x-slot name="actions">
            <a href="{{ route('core.users.create') }}">
                <x-core.buttons.solid class="bg-green-400 p-2">
                    <x-core.icons.plus/>
                </x-core.buttons.solid>
            </a>
        </x-slot>
        <div class="overflow-auto">
            <table>
                <thead>
                    <tr>
                        <th class="border-4 border-black p-2">
                            <div class="flex flex-row items-center justify-center gap-2">
                                Nama
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 7.5 7.5 3m0 0L12 7.5M7.5 3v13.5m13.5 0L16.5 21m0 0L12 16.5m4.5 4.5V7.5"/>
                                </svg>
                            </div>
                        </th>
                        <th class="border-4 border-black p-2 w-[20%]">Kontak</th>
                        <th class="border-4 border-black p-2">Role</th>
                        <th class="border-4 border-black p-2 w-[5%]">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td class="border-4 border-black p-2">{{ $user?->name }}</td>
                            <td class="border-4 border-black p-2">
                                <div class="flex flex-col gap-1">
                                    <a href="mailto:{{ $user?->email }}" class="flex flex-row items-center gap-2 hover:underline">
                                        <x-core.icons.email/>
                                        {{ $user?->email }}
                                    </a>
                                    <span class="flex flex-row items-center gap-2">
                                        <x-core.icons.phone/>
                                        {{ $user?->phone ?? '-' }}
                                    </span>
                                </div>
                            </td>
                            <td class="border-4 border-black p-2">{{ $user?->roles?->first()?->name ?? '-' }}</td>
                            <td class="border-4 border-black p-2">
                                <div class="flex flex-row items-center gap-2">
                                    <a href="{{ route('core.users.edit', $user->id) }}">
                                        <x-core.buttons.solid class="rounded-lg bg-amber-400 p-2">
                                            <x-core.icons.edit/>
                                        </x-core.buttons.solid>
                                    </a>
                                    <form action="{{ route('core.users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit">
                                            <x-core.buttons.solid class="rounded-lg bg-red-400 p-2">
                                                <x-core.icons.delete/>
                                            </x-core.buttons.solid>
                                        </button>
                                    </form>
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
                </tbody>
            </table>
        </div>
        {{ $users->links() }}
    </x-core.cards.app>
</x-core.layouts.app>