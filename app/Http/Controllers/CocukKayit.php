<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cocuk;

class CocukKayit extends Controller
{
    public function Sayfa()
    {
        $yetkiliId = Auth::id();
        $cocuklar = Cocuk::where("yetkili_kullanici","=",$yetkiliId)->get();
        $user = User::where("id","=", Auth::id())->first();
        
        return view('cocuk-kayit')
                    ->with("cocuklar",$cocuklar)
                    ->with("yetkiliId",$yetkiliId)
                    ->with("kullanici",$user);
    }
}
