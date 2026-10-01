<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-medium text-gray-900 mb-1">
                        Form Edit Mahasiswa
                    </h3>

                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}"
                          method="POST">

                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label class="block font-medium text-sm text-gray-700">
                                NPM
                            </label>

                            <input
                                type="text"
                                name="nim"
                                value="{{ old('nim', $mahasiswa->nim) }}"
                                class="block mt-1 w-full rounded-md border-gray-300"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Nama Mahasiswa
                            </label>

                            <input
                                type="text"
                                name="nama"
                                value="{{ old('nama', $mahasiswa->nama) }}"
                                class="block mt-1 w-full rounded-md border-gray-300"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Program Studi
                            </label>

                            <input
                                type="text"
                                name="program_studi"
                                value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                                class="block mt-1 w-full rounded-md border-gray-300"
                                required
                            >
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium text-sm text-gray-700">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email', $mahasiswa->email) }}"
                                class="block mt-1 w-full rounded-md border-gray-300"
                                required
                            >
                        </div>

                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700">
                                Angkatan
                            </label>

                            <input
                                type="number"
                                name="angkatan"
                                value="{{ old('angkatan', $mahasiswa->angkatan) }}"
                                class="block mt-1 w-full rounded-md border-gray-300"
                                required
                            >
                        </div>

                        <div class="flex justify-end gap-3">

                            <a href="{{ route('mahasiswa.index') }}"
                               class="px-4 py-2 bg-gray-500 text-white rounded-md">
                                Kembali
                            </a>

                            <button
                                type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-md">
                                Update
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>