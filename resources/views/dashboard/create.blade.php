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
                <a href="/"><h1 class="text-2xl font-bold mb-5">SIUMKM</h1></a>
                <nav>
                    <ul>
                        <li class="mb-3">
                            <a href="/data-umkm" class="block p-2 rounded hover:bg-gray-700">Beranda</a>
                        </li>
                        <li class="mb-3">
                            <a href="/data-umkm/create" class="block p-2 rounded hover:bg-gray-700">Buat Data UMKM</a>
                        </li>
                    </ul>
                </nav>
            </aside>

            <main class="flex-1 p-6 ml-64">
                <div class="bg-white p-6 shadow rounded mb-6">
                    <h2 class="text-xl font-semibold mb-4">Create Data UMKM By Form</h2>
                    <form action="{{ route('storeByForm') }}" method="POST" class="space-y-4">
                        @csrf

                        <div>
                            <label for="city_id" class="block text-gray-700 font-medium">Kota/Kabupaten</label>
                            <select name="city_id" id="city_id"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">Pilih Kota/Kabupaten</option>
                                @foreach ($cities as $city)
                                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-4">
                                <div>
                                    <label for="tahun" class="block text-gray-700 font-medium">Tahun</label>
                                    <input type="number" name="tahun" id="tahun"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Tahun">
                                </div>
                                <div>
                                    <label for="nama_pemilik" class="block text-gray-700 font-medium">Nama
                                        Pemilik</label>
                                    <input type="text" name="nama_pemilik" id="nama_pemilik"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Nama Pemilik">
                                </div>
                                <div>
                                    <label for="jenis_usaha" class="block text-gray-700 font-medium">Jenis Usaha</label>
                                    <input type="text" name="jenis_usaha" id="jenis_usaha"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Jenis Usaha">
                                </div>
                                <div>
                                    <label for="nama_usaha" class="block text-gray-700 font-medium">Nama Usaha</label>
                                    <input type="text" name="nama_usaha" id="nama_usaha"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Nama Usaha">
                                </div>
                                <div>
                                    <label for="alamat_satu" class="block text-gray-700 font-medium">Desa</label>
                                    <input name="alamat_satu" id="alamat_satu"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Desa">
                                </div>
                            </div>

                            <!-- Kolom Kanan -->
                            <div class="space-y-4">
                                <div>
                                    <label for="alamat_dua" class="block text-gray-700 font-medium">Kecamatan</label>
                                    <input name="alamat_dua" id="alamat_dua"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Kecamatan">
                                </div>
                                <div>
                                    <label for="kode_klasifikasi" class="block text-gray-700 font-medium">Kode
                                        Klasifikasi</label>
                                    <input type="text" name="kode_klasifikasi" id="kode_klasifikasi"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Kode Klasifikasi">
                                </div>
                                <div>
                                    <label for="bidang_usaha" class="block text-gray-700 font-medium">Bidang
                                        Usaha</label>
                                    <input type="text" name="bidang_usaha" id="bidang_usaha"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Bidang Usaha">
                                </div>
                                <div>
                                    <label for="produk" class="block text-gray-700 font-medium">Produk</label>
                                    <input type="text" name="produk" id="produk"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Produk">
                                </div>
                                <div>
                                    <label for="skala_usaha" class="block text-gray-700 font-medium">Skala Usaha</label>
                                    <input type="text" name="skala_usaha" id="skala_usaha"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                        placeholder="Masukkan Skala Usaha">
                                </div>
                            </div>
                        </div>

                        <button type="submit"
                            class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition">Simpan
                            Data</button>
                    </form>                   
                </div>

                <div class="bg-white p-4 shadow rounded mb-6">
                    <h2 class="text-xl font-semibold">Create Data UMKM By Excel</h2>
                    <form action="{{ route('storeImport') }}" method="POST" enctype="multipart/form-data"
                        class="space-y-4">
                        @csrf
                        <div class="mt-1 relative w-full">
                            <input type="file" name="file" id="file-upload" class="hidden">
                            <label for="file-upload"
                                class="flex items-center justify-center w-full px-4 py-3 bg-white border border-gray-300 rounded-lg shadow-md cursor-pointer hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-indigo-500">
                                <svg class="w-6 h-10 text-gray-500 mr-2" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 2h8l6 6v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 2v6h6" />
                                </svg>
                                <span id="file-label" class="text-gray-700">Pilih File Excel UMKM</span>
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition">Upload</button>
                    </form>
                    @if (session('success'))
                        <div class="mt-3 p-4 bg-green-100 text-green-800 rounded-lg">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
            </main>
        </div>
    </div>

</body>

</html>

<script>
    document.getElementById('file-upload').addEventListener('change', function(event) {
        const fileName = event.target.files[0]?.name || "Pilih File Excel UMKM";
        document.getElementById('file-label').textContent = fileName;
    });
</script>
