<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Utils\Cryptologist;
use App\Models\Cocuk;
use App\Models\Banka;
use App\Models\User;

class BankaService {

    public function bankaKaydet(Request $request)
    {
        $data = $request->all();

        if(Auth::id()!=$data["yetkili_id"]){
            return response()->json(['error'=>'Yetkisiz Deneme']);
        }
        $data["cocuk_id"] = Cryptologist::decrypt($data["cocuk_id"]);
        $sonuc = Banka::create($data);
        return Cryptologist::encrypt($sonuc->id);
    }

    public function bankaGuncelle(Request $request)
    {
        $data = $request->json()->all();

        $id = $data["id"];

        $decryptedId = Cryptologist::decrypt($id);

        if(Auth::id()!=$data["yetkili_id"]){
            return response()->json(['error'=>'Yetkisiz Deneme']);
        }

        $banka = Banka::find($decryptedId);

        $banka -> cocuk_id = Cryptologist::decrypt($data["cocuk_id"]);
        $banka -> banka = $data["banka"];
        $banka -> birim = $data["birim"];
        $banka -> iban = $data["iban"];
        
        $sonuc = $banka->save($request->all());

        return $sonuc;
    }

    public function cocugunBankalari($cocukId)
    {
        $decryptedId = Cryptologist::decrypt($cocukId);

        $cocuk = Cocuk::find($decryptedId);

        if(Auth::id()!=$cocuk->yetkili_kullanici){
            if(User::find(Auth::id())->role<2){ // Yetkisi 1 den büyük olanlar görebilir.
                return response()->json(['error'=>'Yetkisiz Deneme']);
            }
        }

        $bankalar = Banka::where("cocuk_id","=",$decryptedId)->get();
        foreach ($bankalar as $banka){
            $cryptedId = Cryptologist::encrypt($banka->id);
            $banka->id = 0;
            $banka->cryptedId=$cryptedId;
        }
        return $bankalar;
    }

    public function bankaSil($id, Request $request) 
    {
        $data = $request->json()->all();
        
        if(Auth::id()!=$data["yetkili_id"]){
            return response()->json(['error'=>'Yetkisiz Deneme']);
        }

        $decryptedId = Cryptologist::decrypt($id);
        $banka=Banka::find($decryptedId);
        $sonuc = $banka->delete(); //returns true/false
        return $sonuc;
    }
}

?>