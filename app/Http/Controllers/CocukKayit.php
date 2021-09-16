<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Utils\Cryptologist;
use App\Models\User;
use App\Models\Cocuk;

class CocukKayit extends Controller
{
    public function Sayfa()
    {
        $yetkiliId = Auth::id();
        $user = User::where("id","=", Auth::id())->first();
        $cocuklar= Cocuk::where("yetkili_kullanici","=",$yetkiliId)->get();
        
        foreach($cocuklar as $cocuk) {
            $cocuk->encryptedId = Cryptologist::encrypt($cocuk->id);
        }

        return view('cocuk-kayit')
                    ->with("cocuklar",$cocuklar)
                    ->with("yetkiliId",$yetkiliId)
                    ->with("kullanici",$user);
    }
}
