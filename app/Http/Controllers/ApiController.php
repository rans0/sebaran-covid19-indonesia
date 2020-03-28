<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function SebaranCovid()
    {
        $responeProvinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');

        // $respones = Http::get('https://api.kawalcorona.com/sembuh');
        $responeIndonesia = Http::get('https://api.kawalcorona.com/indonesia');

        $responeGlobal = Http::get('https://api.kawalcorona.com/');

        $positfGlobal = Http::get('https://api.kawalcorona.com/positif');
        $sembuhGlobal = Http::get('https://api.kawalcorona.com/sembuh');
        $meninggalGlobal = Http::get('https://api.kawalcorona.com/meninggal');

        $provinsi = $responeProvinsi->json();
        $indonesia = $responeIndonesia->json();
        $positif = $positfGlobal->json();
        $sembuh = $sembuhGlobal->json();
        $meninggal = $meninggalGlobal->json();
        $global = $responeGlobal->json();

        // dd($data);

        return view('index', compact('global', 'provinsi', 'indonesia', 'positif', 'meninggal', 'sembuh'));
    }
}
