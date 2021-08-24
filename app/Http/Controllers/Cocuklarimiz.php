<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocuk;

class Cocuklarimiz extends Controller
{
    public function Sayfa($param='ad-ASC')
    {
        $parcalar = explode("-", $param);
        $cocuklar = Cocuk::where("aktif_mi","=","1")
                            ->orderBy($parcalar[0],$parcalar[1])->get();

        return view('cocuklarimiz')
                ->with("param",$param)
                ->with("cocuklar",$cocuklar);
    }
}
