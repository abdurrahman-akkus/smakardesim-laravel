<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocuk;
use App\Models\Banka;
use App\Utils\Cryptologist;

class Cocugumuz extends Controller
{
    public function Sayfa($id)
    {
        $decryptedId=Cryptologist::decrypt($id);
        $cocuk = Cocuk::all()->where("id","=",$decryptedId)->first();
        $bankalar = Banka::all()->where("cocuk_id","=",$decryptedId);

        if(empty($cocuk)){
            abort(404);
        }
        return view('cocugumuz')
                ->with("id",$id)
                ->with("bankalar",$bankalar)
                ->with("cocuk",$cocuk);
    }
}
