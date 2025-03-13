<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cities = [
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f9/Lambang_Kabupaten_Banjarnegara.gif/50px-Lambang_Kabupaten_Banjarnegara.gif', 'name' => 'Kabupaten Banjarnegara', 'latitude' => -7.3797, 'longitude' => 109.6957],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Lambang_Kabupaten_Banyumas.png/50px-Lambang_Kabupaten_Banyumas.png', 'name' => 'Kabupaten Banyumas', 'latitude' => -7.5153, 'longitude' => 109.2946],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Lambang_Kabupaten_Batang.png/50px-Lambang_Kabupaten_Batang.png', 'name' => 'Kabupaten Batang', 'latitude' => -6.9097, 'longitude' => 109.7344],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Lambang_Kabupaten_Blora.gif/50px-Lambang_Kabupaten_Blora.gif', 'name' => 'Kabupaten Blora', 'latitude' => -6.9695, 'longitude' => 111.4186],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1b/Lambang_Kabupaten_Boyolali.jpeg/50px-Lambang_Kabupaten_Boyolali.jpeg', 'name' => 'Kabupaten Boyolali', 'latitude' => -7.5332, 'longitude' => 110.5931],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/cc/Lambang_Kabupaten_Brebes.gif/50px-Lambang_Kabupaten_Brebes.gif', 'name' => 'Kabupaten Brebes', 'latitude' => -6.9732, 'longitude' => 108.9027],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Lambang_kabupaten_cilacap.jpg/50px-Lambang_kabupaten_cilacap.jpg', 'name' => 'Kabupaten Cilacap', 'latitude' => -7.7258, 'longitude' => 109.9031],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/Lambang_kabupaten_cilacap.jpg/50px-Lambang_kabupaten_cilacap.jpg', 'name' => 'Kabupaten Demak', 'latitude' => -6.8926, 'longitude' => 110.6383],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Lambang_Grobogan.png/50px-Lambang_Grobogan.png', 'name' => 'Kabupaten Grobogan', 'latitude' => -7.1275, 'longitude' => 110.9267],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/23/Logo_Pemkab_Jepara.jpg/50px-Logo_Pemkab_Jepara.jpg', 'name' => 'Kabupaten Jepara', 'latitude' => -6.5845, 'longitude' => 110.6781],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Lambang_Kabupaten_Karanganyar.png/50px-Lambang_Kabupaten_Karanganyar.png', 'name' => 'Kabupaten Karanganyar', 'latitude' => -7.6162, 'longitude' => 110.9501],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/00/Seal_of_Kebumen_Regency.svg/50px-Seal_of_Kebumen_Regency.svg.png', 'name' => 'Kabupaten Kebumen', 'latitude' => -7.6787, 'longitude' => 109.6542],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Lambang_Kabupaten_Kendal.png/50px-Lambang_Kabupaten_Kendal.png', 'name' => 'Kabupaten Kendal', 'latitude' => -6.9198, 'longitude' => 110.1981],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/LOGO_KABUPATEN_KLATEN.png/50px-LOGO_KABUPATEN_KLATEN.png', 'name' => 'Kabupaten Klaten', 'latitude' => -7.7059, 'longitude' => 110.6071],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Lambang_Kabupaten_Kudus.png/50px-Lambang_Kabupaten_Kudus.png', 'name' => 'Kabupaten Kudus', 'latitude' => -6.806, 'longitude' => 110.8404],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/Lambang_Kabupaten_Magelang.jpg/50px-Lambang_Kabupaten_Magelang.jpg', 'name' => 'Kabupaten Magelang', 'latitude' => -7.4677, 'longitude' => 110.2176],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/01/Lambang_Kabupaten_Pati.png/50px-Lambang_Kabupaten_Pati.png', 'name' => 'Kabupaten Pati', 'latitude' => -6.7528, 'longitude' => 111.0389],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/ca/Coat_of_arms_of_Pekalongan_Regency.svg/50px-Coat_of_arms_of_Pekalongan_Regency.svg.png', 'name' => 'Kabupaten Pekalongan', 'latitude' => -6.8885, 'longitude' => 109.6753],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c7/Logo_Kabupaten_Pemalang.png/50px-Logo_Kabupaten_Pemalang.png', 'name' => 'Kabupaten Pemalang', 'latitude' => -6.8892, 'longitude' => 109.3802],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/Lambang_Kabupaten_Purbalingga.png/50px-Lambang_Kabupaten_Purbalingga.png', 'name' => 'Kabupaten Purbalingga', 'latitude' => -7.3881, 'longitude' => 109.3639],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Lambang_Kabupaten_Purworejo.png/50px-Lambang_Kabupaten_Purworejo.png', 'name' => 'Kabupaten Purworejo', 'latitude' => -7.7135, 'longitude' => 110.0044],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Lambang_Kabupaten_Rembang.webp/50px-Lambang_Kabupaten_Rembang.webp.png', 'name' => 'Kabupaten Rembang', 'latitude' => -6.7063, 'longitude' => 111.3414],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Seal_of_Semarang_Regency.svg/50px-Seal_of_Semarang_Regency.svg.png', 'name' => 'Kabupaten Semarang', 'latitude' => -7.0051, 'longitude' => 110.4381],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/df/Lambang_Kabupaten_Sragen.tif/lossless-page1-50px-Lambang_Kabupaten_Sragen.tif.png', 'name' => 'Kabupaten Sragen', 'latitude' => -7.4265, 'longitude' => 111.0211],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/86/Lambang_Kabupaten_Sukoharjo.tif/lossless-page1-50px-Lambang_Kabupaten_Sukoharjo.tif.png', 'name' => 'Kabupaten Sukoharjo', 'latitude' => -7.6789, 'longitude' => 110.8286],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Shield_of_Tegal_Regency.svg/50px-Shield_of_Tegal_Regency.svg.png', 'name' => 'Kabupaten Tegal', 'latitude' => -6.8793, 'longitude' => 109.1427],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/e/ef/Lambang_Kabupaten_Temanggung.png/50px-Lambang_Kabupaten_Temanggung.png', 'name' => 'Kabupaten Temanggung', 'latitude' => -7.3089, 'longitude' => 110.1602],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/35/Seal_of_wonogiri.png/50px-Seal_of_wonogiri.png', 'name' => 'Kabupaten Wonogiri', 'latitude' => -7.8195, 'longitude' => 110.9384],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d6/Lambang_Kabupaten_Wonosobo.webp/50px-Lambang_Kabupaten_Wonosobo.webp.png', 'name' => 'Kabupaten Wonosobo', 'latitude' => -7.3633, 'longitude' => 109.9034],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/32/Lambang_Kota_Magelang.jpg/50px-Lambang_Kota_Magelang.jpg', 'name' => 'Kota Magelang', 'latitude' => -7.4697, 'longitude' => 110.2250],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/Lambang_Kota_Pekalongan.png/50px-Lambang_Kota_Pekalongan.png', 'name' => 'Kota Pekalongan', 'latitude' => -6.8800, 'longitude' => 109.6900],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Lambang_Kota_Salatiga.png/50px-Lambang_Kota_Salatiga.png', 'name' => 'Kota Salatiga', 'latitude' => -7.3305, 'longitude' => 110.5084],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0f/Seal_of_the_City_of_Semarang.svg/50px-Seal_of_the_City_of_Semarang.svg.png', 'name' => 'Kota Semarang', 'latitude' => -6.9500, 'longitude' => 110.4200],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a6/Surakarta_coa.png/50px-Surakarta_coa.png', 'name' => 'Kota Surakarta', 'latitude' => -7.5667, 'longitude' => 110.8167],
            ['image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Shield_of_the_city_of_Tegal.svg/50px-Shield_of_the_city_of_Tegal.svg.png', 'name' => 'Kota Tegal', 'latitude' => -6.8600, 'longitude' => 109.1600],
        ];

        foreach ($cities as $city) {
            $city['created_at'] = Carbon::now();
            $city['updated_at'] = Carbon::now();
        }

        DB::table('cities')->insert($cities);
    }
}
