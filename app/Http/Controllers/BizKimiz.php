<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BizKimiz extends Controller
{
    public function Sayfa()
    {
        return view('biz-kimiz');
    }
}
