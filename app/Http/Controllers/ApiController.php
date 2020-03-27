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


        $provinsi = $responeProvinsi->json();
        $indonesia = $responeIndonesia->json();
        // dd($data);

        return view('index', compact('provinsi', 'indonesia'));
    }
}
