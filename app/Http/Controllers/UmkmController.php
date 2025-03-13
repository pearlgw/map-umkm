<?php

namespace App\Http\Controllers;

use App\Imports\DataImport;
use App\Models\City;
use App\Models\DataUmkm;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class UmkmController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->query('search');

        $countUmkm = DataUmkm::count();
        $dataKab = DataUmkm::whereIn('city_id', range(1, 29))->count();
        $dataKota = DataUmkm::whereIn('city_id', range(30, 35))->count();
        // Filter berdasarkan nama pemilik jika ada input pencarian
        $umkms = DataUmkm::when($search, function ($query, $search) {
            return $query->where('nama_pemilik', 'LIKE', "%{$search}%");
        })->orderByDesc('created_at')->paginate(10);

        return view('dashboard.index', compact('countUmkm', 'dataKab', 'dataKota', 'umkms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls'
        ]);

        Excel::import(new DataImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data berhasil diimpor!');
    }

    public function create()
    {
        $cities = City::all();
        return view('dashboard.create', compact('cities'));
    }

    public function storeByForm(Request $request)
    {
        // Validasi data input
        $validated = $request->validate([
            'tahun' => 'nullable|integer|min:1900|max:' . date('Y'),
            'city_id' => 'required|exists:cities,id',
            'nama_pemilik' => 'nullable|string|max:255',
            'jenis_usaha' => 'nullable|string|max:255',
            'nama_usaha' => 'nullable|string|max:255',
            'alamat_satu' => 'nullable|string',
            'alamat_dua' => 'nullable|string',
            'kode_klasifikasi' => 'nullable|string|max:50',
            'bidang_usaha' => 'nullable|string',
            'produk' => 'nullable|string',
            'skala_usaha' => 'nullable|string|max:50',
        ]);

        DataUmkm::create($validated);

        return redirect()->route('getall')->with('success', 'Data UMKM berhasil disimpan.');
    }

    public function destroy($id)
    {
        $umkm = DataUmkm::findOrFail($id);
        $umkm->delete();

        return redirect()->route('getall')->with('success', 'Data UMKM berhasil dihapus.');
    }
}
