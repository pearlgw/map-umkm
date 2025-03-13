<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\DataUmkm;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $cities = City::withCount('umkms')->get();
        return view('index', compact('cities'));
    }

    public function detailUmkm($cityId)
    {
        $umkms = DataUmkm::where('city_id', $cityId)->paginate(10);
        return view('detail_umkm', compact('umkms'));
    }
}
