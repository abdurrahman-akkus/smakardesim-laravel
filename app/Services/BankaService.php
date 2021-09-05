<?php
namespace App\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Utils\Cryptologist;
use App\Models\Banka;

class BankaService {

    public function bankaKaydet(Request $request)
    {
        $sonuc = Banka::create($request->all());
        return Cryptologist::encrypt($sonuc->id);
    }

    public function bankaGuncelle(Request $request)
    {
        $data = $request->json()->all();

        $id = $data["id"];

        $decryptedId = Cryptologist::decrypt($id);

        $banka = Banka::find($decryptedId);

        $banka -> yetkili_kullanici = $data["yetkili_kullanici"];
        $banka -> ad = $data["ad"];
        $banka -> yetkili_adi = $data["yetkili_adi"];
        $banka -> yetkili_soyadi = $data["yetkili_soyadi"];
        $banka -> faaliyet_no = $data["faaliyet_no"];
        $banka -> iletisim = $data["iletisim"];
        $banka -> sma_tip = $data["sma_tip"];
        $banka -> valilik_izin_baslangic = $data["valilik_izin_baslangic"];
        $banka -> valilik_izin_bitis = $data["valilik_izin_bitis"];
        $banka -> valilik_izni_url = $data["valilik_izni_url"];
        $banka -> hastalik_raporu_url = $data["hastalik_raporu_url"];
        $banka -> resim_url = $data["resim_url"];
        $banka -> kardes_sayisi = $data["kardes_sayisi"];
        $banka -> toplanacak = $data["toplanacak"];
        $banka -> toplanan = $data["toplanan"];
        $banka -> yuzde = $data["yuzde"];
        $banka -> birim = $data["birim"];
        $banka -> kisa_aciklama = $data["kisa_aciklama"];
        $banka -> aciklama = $data["aciklama"];
        $banka -> hastalik_raporu_turu = $data["hastalik_raporu_turu"];
        $banka -> valilik_izin_turu = $data["valilik_izin_turu"];
        $banka -> tamamlandi_mi = $data["tamamlandi_mi"];
        $banka -> aktif_mi = 0; // Tüm Güncellemeler Denetime Tabi
        
        $sonuc = $banka->save($request->all());

        return $sonuc;
    }

    public function tekBankaAl($id)
    {
        $decryptedId = Cryptologist::decrypt($id);

        $banka = Banka::find($decryptedId);

        if(Auth::id()!=$banka->yetkili_kullanici){
            return response()->json(['error'=>'Yetkisiz Deneme']);
        }

        return $banka;
    }
}

?>