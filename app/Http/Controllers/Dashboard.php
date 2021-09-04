<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class Dashboard extends Controller
{
    public function Sayfa(Request $request)
    {
        $user = User::where("id","=", Auth::id())->first();
        return view('dashboard')
                       ->with("kullanici",$user);
    }
}
