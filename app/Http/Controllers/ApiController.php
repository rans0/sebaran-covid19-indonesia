<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Charts\CovidChart;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function SebaranCovid()
    {

        $responeProvinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
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

        //mengirim data
        $data = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $labels = $data->flatten(1)->pluck('Provinsi');
        $positifchart = $data->flatten(1)->pluck('Kasus_Posi');
        $meninggalchart = $data->flatten(1)->pluck('Kasus_Meni');

        //flatten(1) untuk menghilangkan key array pertama, kasus ini key attributes yang dihilangkan
        //pluck untuk mengambil value dari key

        //membuat chart
        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Kasus Positif', 'bar', $positifchart)->backgroundColor('yellow');
        $chart->dataset('Kasus Meninggal', 'bar', $meninggalchart)->backgroundColor('red');

        return view('index', compact('global', 'provinsi', 'indonesia', 'positif', 'meninggal', 'sembuh'), [
            'chart' => $chart,
        ]);
    }

    public function showchart()
    {
        //mengirim data
        $data = collect(Http::get('https://api.kawalcorona.com/indonesia/provinsi')->json());
        $labels = $data->flatten(1)->pluck('Provinsi');
        $positifchart = $data->flatten(1)->pluck('Kasus_Posi');
        $meninggalchart = $data->flatten(1)->pluck('Kasus_Meni');

        //flatten(1) untuk menghilangkan key array pertama, kasus ini key attributes yang dihilangkan
        //pluck untuk mengambil value dari key

        //membuat chart
        $chart = new CovidChart;
        $chart->labels($labels);
        $chart->dataset('Kasus Positif', 'bar', $positifchart)->backgroundColor('yellow');
        $chart->dataset('Kasus Meninggal', 'bar', $meninggalchart)->backgroundColor('red');

        return view('graph', [
            'chart' => $chart,
        ]);
    }

    public function SebaranIndo()
    {

        $responeProvinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $responeIndonesia = Http::get('https://api.kawalcorona.com/indonesia');

        $provinsi = $responeProvinsi->json();
        $indonesia = $responeIndonesia->json();

        return view('table-indonesia', compact('provinsi', 'indonesia'));
    }

    public function SebaranGLobal()
    {

        $responeGlobal = Http::get('https://api.kawalcorona.com/');
        $positfGlobal = Http::get('https://api.kawalcorona.com/positif');
        $sembuhGlobal = Http::get('https://api.kawalcorona.com/sembuh');
        $meninggalGlobal = Http::get('https://api.kawalcorona.com/meninggal');
   
        $positif = $positfGlobal->json();
        $sembuh = $sembuhGlobal->json();
        $meninggal = $meninggalGlobal->json();
        $global = $responeGlobal->json();

        return view('table-global', compact('positif', 'sembuh', 'meninggal', 'global'));
    }

}
