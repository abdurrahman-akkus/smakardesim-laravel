<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cocuk;
use App\Utils\Cryptologist;

class Cocugumuz extends Controller
{
    public function Sayfa($id)
    {
        $cocuk = Cocuk::all()->where("id","=",Cryptologist::decrypt($id))->first();
        //print_r($cocuk."<br>");
        if(empty($cocuk)){
            abort(404);
        }
        return view('cocugumuz')
                ->with("id",$id)
                ->with("cocuk",$cocuk);
    }
}
