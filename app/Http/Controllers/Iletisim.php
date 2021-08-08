<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Iletisim extends Controller
{
    public function Sayfa()
    {
        return view('iletisim');
    }
}
