<?php
namespace App\Utils;

use Illuminate\Support\Facades\Crypt;

class Cryptologist {
    public static function encrypt($string)
    {
         return Crypt::encryptString($string);
    }

    public static function decrypt($string)
    {
         return Crypt::decryptString($string);
    }
}