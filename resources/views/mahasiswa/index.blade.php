<x-app-layout>

    <x-slot name="header">
        <div style="display:flex; justify-content:space-between; align-items:center;">
            <h2 style="font-weight:600; font-size:20px;">
                Sistem Manajemen Data Mahasiswa
            </h2>

            <a href="{{ route('mahasiswa.create') }}"
               style="display:inline-block;
                      background:#2563eb;
                      color:white;
                      padding:10px 16px;
                      border-radius:6px;
                      text-decoration:none;">
                + Tambah Data Mahasiswa
            </a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div style="background:#dcfce7;
                            color:#166534;
                            padding:12px 16px;
                            margin-bottom:16px;
                            border-radius:6px;">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">

                    <h3 style="font-size:18px; margin-bottom:5px;">
                        Data Mahasiswa
                    </h3>

                    <p style="color:#6b7280; margin-bottom:20px;">
                        Daftar mahasiswa yang terdaftar dalam sistem.
                    </p>

                    <table style="width:100%; border-collapse:collapse;">

                        <thead>
                            <tr style="background:#f3f4f6;">
                                <th style="border:1px solid #ddd; padding:10px;">No</th>
                                <th style="border:1px solid #ddd; padding:10px;">NPM</th>
                                <th style="border:1px solid #ddd; padding:10px;">Nama Mahasiswa</th>
                                <th style="border:1px solid #ddd; padding:10px;">Program Studi</th>
                                <th style="border:1px solid #ddd; padding:10px;">Email</th>
                                <th style="border:1px solid #ddd; padding:10px;">Angkatan</th>
                                <th style="border:1px solid #ddd; padding:10px;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            @forelse($mahasiswa as $item)

                                <tr>

                                    <td style="border:1px solid #ddd; padding:10px; text-align:center;">
                                        {{ $loop->iteration }}
                                    </td>

                                    <td style="border:1px solid #ddd; padding:10px;">
                                        {{ $item->nim }}
                                    </td>

                                    <td style="border:1px solid #ddd; padding:10px;">
                                        {{ $item->nama }}
                                    </td>

                                    <td style="border:1px solid #ddd; padding:10px;">
                                        {{ $item->program_studi }}
                                    </td>

                                    <td style="border:1px solid #ddd; padding:10px;">
                                        {{ $item->email }}
                                    </td>

                                    <td style="border:1px solid #ddd; padding:10px; text-align:center;">
                                        {{ $item->angkatan }}
                                    </td>

                                    <td style="border:1px solid #ddd; padding:10px; text-align:center;">

                                        <a href="{{ route('mahasiswa.edit', $item->id) }}"
                                           style="display:inline-block;
                                                  background:#f59e0b;
                                                  color:white;
                                                  padding:7px 12px;
                                                  border-radius:5px;
                                                  text-decoration:none;
                                                  margin-right:5px;">
                                            Edit
                                        </a>

                                        <form action="{{ route('mahasiswa.destroy', $item->id) }}"
                                              method="POST"
                                              style="display:inline;">

                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                    onclick="return confirm('Yakin ingin menghapus data ini?')"
                                                    style="background:#dc2626;
                                                           color:white;
                                                           padding:7px 12px;
                                                           border:none;
                                                           border-radius:5px;
                                                           cursor:pointer;">
                                                Hapus
                                            </button>

                                        </form>

                                    </td>

                                </tr>

                            @empty

                                <tr>
                                    <td colspan="7"
                                        style="border:1px solid #ddd;
                                               padding:20px;
                                               text-align:center;">
                                        Belum ada data mahasiswa.
                                    </td>
                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>
            </div>

        </div>
    </div>

</x-app-layout>