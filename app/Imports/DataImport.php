<?php

namespace App\Imports;

use App\Models\DataUmkm;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class DataImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new DataUmkm([
            'tahun'             => $row['tahun'],
            'city_id'           => $row['city_id'],
            'nama_pemilik'      => $row['nama_pemilik'],
            'jenis_usaha'       => $row['jenis_usaha'],
            'nama_usaha'        => $row['nama_usaha'],
            'alamat_satu'       => $row['alamat_satu'],
            'alamat_dua'        => $row['alamat_dua'],
            'kode_klasifikasi'  => $row['kode_klasifikasi'],
            'bidang_usaha'      => $row['bidang_usaha'],
            'produk'            => $row['produk'],
            'skala_usaha'       => $row['skala_usaha'],
        ]);
    }
}
