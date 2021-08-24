<?php
namespace App\Services;

use App\Utils\Cryptologist;
use App\Models\Cocuk;

class CocukService {
    public function kardesOl($id)
    {
        $decryptedId=Cryptologist::decrypt($id);

        $cocuk = Cocuk::find($decryptedId);

        $cocuk->kardes_sayisi = $cocuk->kardes_sayisi+1;
        
        $sonuc = $cocuk->save();

        return $sonuc;
    }

}

?>