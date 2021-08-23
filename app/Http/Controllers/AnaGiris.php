<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocuk;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Connection;

class AnaGiris extends Controller
{
    public function Sayfa()
    {
        // Slider için çocuklar
        $sliderRandId = DB::table('cocuk')
                   ->select('id')
                   ->where('aktif_mi', '=', 1)
                   ->orderBy(DB::raw('RAND()'), 'asc')
                   ->limit(5);

        $sliderCocuklar = DB::table('cocuk')
                ->joinSub($sliderRandId, 'rand_id', function ($join) {
                    $join->on('cocuk.id', '=', 'rand_id.id');
                })->get();


        // Hedefe yaklaşan çocuklar
        $hedefRandId = DB::table('cocuk')
                    ->select('id')
                    ->where([
                        ['yuzde', '>=', 90],
                        ['aktif_mi', '=', 1]
                    ])
                    ->orderBy(DB::raw('RAND()'), 'asc')
                    ->limit(3);

        $hedefeYaklasanlar = DB::table('cocuk')
                ->joinSub($hedefRandId, 'rand_id', function ($join) {
                    $join->on('cocuk.id', '=', 'rand_id.id');
                })->get();

        // Yeni başlayan çocuklar
        $yeniRandId = DB::table('cocuk')
                    ->select('id')
                    ->where([
                        ['yuzde', '<=', 10],
                        ['aktif_mi', '=', 1]
                    ])
                    ->orderBy(DB::raw('RAND()'), 'asc')
                    ->limit(3);

        $yeniBaslayanlar = DB::table('cocuk')
                ->joinSub($yeniRandId, 'rand_id', function ($join) {
                    $join->on('cocuk.id', '=', 'rand_id.id');
                })->get();
                
        $cocuklar = Cocuk::all();

        $cocukSayisi = sizeof($cocuklar);
        $gonulluler = 0;
        $tamamlananlar = 0;
        foreach ($cocuklar as $cocuk) {
            $gonulluler+=$cocuk["kardes_sayisi"];
            $tamamlananlar+=$cocuk["tamamlandi_mi"]; // Tamamlananlar 1, tamamlanmayanlar 0 olduğu için doğrudan hesaplanma yapıldı.
        }

        return view('index')
            ->with("cocukSayisi", $cocukSayisi)
            ->with("gonulluler",$gonulluler)
            ->with("tamamlananlar",$tamamlananlar)
            ->with("sliderCocuklar",$sliderCocuklar)
            ->with("hedefeYaklasanlar",$hedefeYaklasanlar)
            ->with("yeniBaslayanlar",$yeniBaslayanlar)
            ->with("cocuklar",$cocuklar);
    }
}
