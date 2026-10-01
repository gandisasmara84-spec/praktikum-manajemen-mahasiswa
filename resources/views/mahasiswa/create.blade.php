<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 class="text-lg font-medium text-gray-900 mb-1">
                        Form Tambah Mahasiswa
                    </h3>

                    <p class="text-sm text-gray-500 mb-6">
                        Isi data mahasiswa dengan lengkap.
                    </p>

                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                            @foreach ($errors->all() as $error)
                                <div>{{ $error }}</div>
                            @endforeach
                        </div>
                    @endif

                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">
                                NPM
                            </label>
                            <input type="text" name="nim"
                                   value="{{ old('nim') }}"
                                   required
                                   class="block mt-1 w-full rounded-md border-gray-300">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">
                                Nama Mahasiswa
                            </label>
                            <input type="text" name="nama"
                                   value="{{ old('nama') }}"
                                   required
                                   class="block mt-1 w-full rounded-md border-gray-300">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">
                                Program Studi
                            </label>
                            <input type="text" name="program_studi"
                                   value="{{ old('program_studi') }}"
                                   required
                                   class="block mt-1 w-full rounded-md border-gray-300">
                        </div>

                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700">
                                Email
                            </label>
                            <input type="email" name="email"
                                   value="{{ old('email') }}"
                                   required
                                   class="block mt-1 w-full rounded-md border-gray-300">
                        </div>

                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700">
                                Angkatan
                            </label>
                            <input type="number" name="angkatan"
                                   value="{{ old('angkatan') }}"
                                   required
                                   class="block mt-1 w-full rounded-md border-gray-300">
                        </div>

                        <div style="display: flex; justify-content: flex-end; gap: 12px;">

                            <a href="{{ route('mahasiswa.index') }}"
                            style="display: inline-block;
                                    background-color: #6b7280;
                                    color: white;
                                    padding: 8px 16px;
                                    border-radius: 6px;
                                    text-decoration: none;">
                                Kembali
                            </a>

                            <button type="submit"
                                    style="display: inline-block !important;
                                        background-color: #2563eb !important;
                                        color: white !important;
                                        padding: 8px 16px !important;
                                        border-radius: 6px !important;
                                        border: none !important;
                                        cursor: pointer !important;
                                        font-size: 14px !important;
                                        opacity: 1 !important;
                                        visibility: visible !important;">
                                Simpan
                            </button>

                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>
