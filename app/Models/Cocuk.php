<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cocuk extends Model
{
    use HasFactory;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'cocuk';

    protected $primaryKey = 'id';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    // hangi satırların oluşturma/güncelleme tarihi olduğu yazılır GEREKİRSE EKLENECEK
    //const CREATED_AT = 'creation_date'; 
    //const UPDATED_AT = 'guncelleme_ani';

    // Değiştirilemez sütunlar burada belirtilir.
    protected $guarded = ['id','guncelleme_ani'];

    // Değiştirilebilir sütunlar burada belirtilir.
    /*protected $fillable = [ 'ad',
                            'yetkili_adi',
                            'yetkili_soyadi',
                            'faaliyet_no',
                            'iletisim',
                            'sma_tip',
                            'valilik_izin_baslangic',
                            'valilik_izin_bitis',
                            'toplanacak',
                            'toplanan',
                            'yuzde',
                            'birim',
                            'kisa_aciklama',
                            'aciklama',
                            'valilik_izni_url',
                            'hastalik_raporu_url',
                            'kardes_sayisi',
                            'resim_url',
                            'tamamlandi_mi',
                            'yetkili_kullanici',
                            'valilik_izin_turu',
                            'hastalik_raporu_turu',
                            'aktif_mi'];*/
}
