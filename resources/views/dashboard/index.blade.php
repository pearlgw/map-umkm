<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="flex min-h-screen flex-col">
        <div class="flex flex-1">
            <!-- Sidebar -->
            <aside class="w-64 bg-gray-900 text-white p-5 h-screen fixed">
                <a href="/">
                    <h1 class="text-2xl font-bold mb-5">SIUMKM</h1>
                </a>
                <nav>
                    <ul>
                        <li class="mb-3">
                            <a href="/data-umkm" class="block p-2 rounded hover:bg-gray-700">Beranda</a>
                        </li>
                        <li class="mb-3">
                            <a href="data-umkm/create" class="block p-2 rounded hover:bg-gray-700">Buat Data UMKM</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="flex-1 p-6 ml-64 overflow-hidden">
                <header class="bg-white p-4 shadow rounded mb-6 flex justify-between items-center">
                    <h2 class="text-xl font-semibold">Dashboard</h2>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            class="bg-red-500 hover:bg-red-600 text-white font-semibold py-2 px-4 rounded focus:outline-none focus:ring-2 focus:ring-red-300">
                            Log Out
                        </button>
                    </form>
                </header>

                @if (session('success'))
                    <div id="success-alert"
                        class="fixed top-5 right-5 bg-green-500 text-white px-4 py-2 rounded shadow-lg flex items-center justify-between">
                        <span>{{ session('success') }}</span>
                        <button onclick="document.getElementById('success-alert').remove()"
                            class="ml-4 text-white font-bold">X</button>
                    </div>
                @endif

                <!-- Stats -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div class="bg-white p-6 rounded shadow">
                        <h3 class="text-lg font-semibold">Total UMKM</h3>
                        <p class="text-2xl font-bold mt-2">{{ number_format($countUmkm, 0, ',', '.') }} data</p>
                    </div>
                    <div class="bg-white p-6 rounded shadow">
                        <h3 class="text-lg font-semibold">Jumlah Data UMKM Kabupaten</h3>
                        <p class="text-2xl font-bold mt-2">{{ number_format($dataKab, 0, ',', '.') }} data</p>
                    </div>
                    <div class="bg-white p-6 rounded shadow">
                        <h3 class="text-lg font-semibold">Jumlah Data UMKM Kota</h3>
                        <p class="text-2xl font-bold mt-2">{{ number_format($dataKota, 0, ',', '.') }} data</p>
                    </div>
                </div>

                <div class="bg-white p-6 rounded shadow mb-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-semibold">Data UMKM</h3>
                        <form method="GET" action="{{ route('getall') }}" class="flex items-center space-x-2">
                            <input type="text" name="search" placeholder="Cari Nama Pemilik..."
                                value="{{ request('search') }}"
                                class="border border-gray-300 p-2 rounded focus:outline-none focus:ring focus:ring-blue-300">
                            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                                Cari
                            </button>
                        </form>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full min-w-max border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-200">
                                    <th class="border p-2">No</th>
                                    <th class="border p-2">Tahun</th>
                                    <th class="border p-2">Daerah</th>
                                    <th class="border p-2">Nama Pemilik</th>
                                    <th class="border p-2">Jenis Usaha</th>
                                    <th class="border p-2">Desa</th>
                                    <th class="border p-2">Kecamatan</th>
                                    <th class="border p-2">Kode Klasifikasi</th>
                                    <th class="border p-2">Bidang Usaha</th>
                                    <th class="border p-2">Produk</th>
                                    <th class="border p-2">Skala Usaha</th>
                                    <th class="border p-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($umkms as $umkm)
                                    <tr>
                                        <td class="border p-2">{{ $loop->iteration }}</td>
                                        <td class="border p-2">{{ $umkm->tahun }}</td>
                                        <td class="border p-2">{{ $umkm->city->name }}</td>
                                        <td class="border p-2">{{ $umkm->nama_pemilik }}</td>
                                        <td class="border p-2">{{ $umkm->jenis_usaha }}</td>
                                        <td class="border p-2">{{ $umkm->alamat_satu }}</td>
                                        <td class="border p-2">{{ $umkm->alamat_dua }}</td>
                                        <td class="border p-2">{{ $umkm->kode_klasifikasi }}</td>
                                        <td class="border p-2">{{ $umkm->bidang_usaha }}</td>
                                        <td class="border p-2">{{ $umkm->produk }}</td>
                                        <td class="border p-2">{{ $umkm->skala_usaha }}</td>
                                        <td class="border p-2">
                                            <form action="/data-umkm/{{ $umkm->id }}" method="POST"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600">
                                                    Hapus
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="12" class="border p-2 text-center">Maaf, data masih kosong</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        <div class="bg-white p-3 rounded shadow">
                            {{ $umkms->appends(['search' => request('search')])->links() }}
                        </div>
                    </div>
                </div>

            </main>
        </div>
    </div>

</body>

</html>
