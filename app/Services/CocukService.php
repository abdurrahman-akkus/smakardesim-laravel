<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Utils\Cryptologist;
use App\Models\User;
use App\Models\Cocuk;

class CocukService {
    public function kardesOl($id)
    {
        $decryptedId = Cryptologist::decrypt($id);

        $cocuk = Cocuk::find($decryptedId);

        $cocuk->kardes_sayisi = $cocuk->kardes_sayisi+1;
        
        $sonuc = $cocuk->save();

        return $sonuc;
    }

    public function cocukKaydet(Request $request)
    {
        $sonuc = Cocuk::create($request->all());
        return Cryptologist::encrypt($sonuc->id);
    }

    public function cocukGuncelle(Request $request)
    {
        $data = $request->json()->all();

        $id = $data["id"];

        $decryptedId = Cryptologist::decrypt($id);

        $cocuk = Cocuk::find($decryptedId);
        
        if(Auth::id()!=$cocuk -> yetkili_kullanici){
            return response()->json(['error'=>'Yetkisiz Deneme']);
        }

        $cocuk -> yetkili_kullanici = $data["yetkili_kullanici"];
        $cocuk -> ad = $data["ad"];
        $cocuk -> yetkili_adi = $data["yetkili_adi"];
        $cocuk -> yetkili_soyadi = $data["yetkili_soyadi"];
        $cocuk -> faaliyet_no = $data["faaliyet_no"];
        $cocuk -> iletisim = $data["iletisim"];
        $cocuk -> sma_tip = $data["sma_tip"];
        $cocuk -> valilik_izin_baslangic = $data["valilik_izin_baslangic"];
        $cocuk -> valilik_izin_bitis = $data["valilik_izin_bitis"];
        $cocuk -> valilik_izni_url = $data["valilik_izni_url"];
        $cocuk -> hastalik_raporu_url = $data["hastalik_raporu_url"];
        $cocuk -> resim_url = $data["resim_url"];
        $cocuk -> kardes_sayisi = $data["kardes_sayisi"];
        $cocuk -> toplanacak = $data["toplanacak"];
        $cocuk -> toplanan = $data["toplanan"];
        $cocuk -> yuzde = $data["yuzde"];
        $cocuk -> birim = $data["birim"];
        $cocuk -> kisa_aciklama = $data["kisa_aciklama"];
        $cocuk -> aciklama = $data["aciklama"];
        $cocuk -> hastalik_raporu_turu = $data["hastalik_raporu_turu"];
        $cocuk -> valilik_izin_turu = $data["valilik_izin_turu"];
        $cocuk -> tamamlandi_mi = $data["tamamlandi_mi"];
        $cocuk -> aktif_mi = 0; // Tüm Güncellemeler Denetime Tabi
        
        $sonuc = $cocuk->save($request->all());

        return $sonuc;
    }

    public function tekCocukAl($id)
    {
        $decryptedId = Cryptologist::decrypt($id);

        $cocuk = Cocuk::find($decryptedId);

        if(Auth::id()!=$cocuk->yetkili_kullanici){
            if(User::find(Auth::id())->role>1){
                return $cocuk;
            }
            return response()->json(['error'=>'Yetkisiz Deneme']);
        }

        return $cocuk;
    }
}

?>