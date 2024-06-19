<x-core.layouts.app>
    <div class="rounded-lg border-4 border-black bg-white p-4 shadow-neo">
        <div class="flex flex-col gap-4">
            <div class="flex flex-row items-center gap-4">
                <h2 class="text-2xl font-bold">Input</h2>
            </div>
            <x-core.forms.app method="GET">
                <div class="flex flex-col gap-4">
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_name" required="true">
                            Nama
                        </x-core.inputs.label>
                        <x-core.inputs.text id="input_name" name="name" value="{{ old('name') }}" placeholder="Masukkan Nama" required="true" autofocus/>
                        <x-core.inputs.error name="name"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_email" required="true">
                            Email
                        </x-core.inputs.label>
                        <x-core.inputs.email id="input_email" name="email" value="{{ old('email') }}" placeholder="Masukkan Email" required="true" autocomplete="username"/>
                        <x-core.inputs.error name="email"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label>
                            Telepon
                        </x-core.inputs.label>
                        <x-core.inputs.tel id="input_phone" name="phone" value="{{ old('phone') }}" placeholder="Masukkan Telepon"/>
                        <x-core.inputs.error name="phone"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_password" required="true">
                            Password
                        </x-core.inputs.label>
                        <x-core.inputs.password id="input_password" name="password" placeholder="Masukkan Password" required="true" autocomplete="new-password"/>
                        <x-core.inputs.error name="password"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_date" required="true">
                            Tanggal
                        </x-core.inputs.label>
                        <x-core.inputs.date id="input_date" name="date" value="{{ old('date') }}" placeholder="Masukkan Tanggal" required="true"/>
                        <x-core.inputs.error name="date"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_file" required="true">
                            File
                        </x-core.inputs.label>
                        <x-core.inputs.file id="input_file" name="file" placeholder="Masukkan File" required="true"/>
                        <x-core.inputs.error name="file"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_textarea" required="true">
                            Textarea
                        </x-core.inputs.label>
                        <x-core.inputs.textarea id="input_textarea" name="textarea" placeholder="Masukkan Textarea" required="true" rows="3"/>
                        <x-core.inputs.error name="textarea"/>
                    </x-core.inputs.group>
                    <x-core.inputs.group>
                        <x-core.inputs.label for="input_quill" required="true">
                            Quill
                        </x-core.inputs.label>
                        <div>
                            <div id="editor"></div>
                        </div>
                        <x-core.inputs.error name="quill"/>
                    </x-core.inputs.group>
                    <x-core.buttons.solid type="submit" class="bg-green-400">Simpan</x-core.buttons.solid>
                </div>
            </x-core.forms.app>
        </div>
    </div>
</x-core.layouts.app>

@push('scripts')
    <script type="module">
        const quill = new window.Quill('#editor', {
            theme: 'snow'
        });
    </script>
@endpush