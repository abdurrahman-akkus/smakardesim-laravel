<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cocuk;

class Dashboard extends Controller
{
    public function Sayfa(Request $request)
    {
        $user = User::where("id","=", Auth::id())->first();
        $cocuklar = Cocuk::where([
            ['yetkili_kullanici', '=', Auth::id()],
            ['aktif_mi', '=', 1]
        ])->get();
        $onaysizCocuklar = Cocuk::where("aktif_mi","=","0")->get();
        return view('dashboard')
                       ->with("cocukSayisi",sizeof($cocuklar))
                       ->with("onaysizCocukSayisi",sizeof($onaysizCocuklar))
                       ->with("kullanici",$user);
    }
}
