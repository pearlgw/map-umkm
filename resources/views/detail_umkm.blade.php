<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data UMKM</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 p-6">

    <div class="mx-10 bg-white shadow-md rounded-lg px-10 py-6">
        <div class="flex items-center justify-between mb-4">
            <h1 class="text-2xl font-semibold">Daftar UMKM</h1>
            <a href="/" class="rounded-md bg-slate-500 text-white px-4 py-2">Back</a>
        </div>

        <table class="w-full border-collapse border border-gray-300">
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
                    </tr>
                @empty
                    <tr>
                        <td colspan="11" class="border p-2 text-center">Maaf, data masih kosong</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Pagination -->
        <div class="mt-4 justify-center">
            {{ $umkms->links() }}
        </div>
    </div>

</body>

</html>
