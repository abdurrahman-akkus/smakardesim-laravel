<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cocuk;
use App\Utils\Cryptologist;

class CocukOnay extends Controller
{
    public function Sayfa()
    {
        $yetkiliId = Auth::id();
        $cocuklar; 
        $user = User::where("id","=", Auth::id())->first();

        if($user->role>1){
            $cocuklar= Cocuk::all();
        }
        else{
            $cocuklar= Cocuk::where("yetkili_kullanici","=",$yetkiliId)->get();
        }

        foreach($cocuklar as $cocuk) {
            $cocuk->encryptedId = Cryptologist::encrypt($cocuk->id);
        }
        
        return view('cocuk-onay')
                    ->with("cocuklar",$cocuklar)
                    ->with("yetkiliId",$yetkiliId)
                    ->with("kullanici",$user);
    }
}