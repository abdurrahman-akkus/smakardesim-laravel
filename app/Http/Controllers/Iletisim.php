<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class Iletisim extends Controller
{
    public function Sayfa()
    {
        return view('iletisim');
    }

    public function mailGonder(Request $req)
    {
        Mail::send([],[],function ($message) use ($req)
        {
            $emails = array('iletisim@smakardesim.com',$req["email"]);
            $message->from('sistem@smakardesim.com','SMA Kardeşim');
            $message->to($emails);
            $message->subject('SMA Kardeşim');
            $message->setBody('<table>'.
                '<tr><td>İsim:</td><td>' . $req["name"] . '</td></tr>'.
                '<tr><td>E-Posta:</td><td>' . $req["email"] . '</td></tr>'.
                '<tr><td>Mesaj:</td><td>' . $req["message"] . '</td></tr></table>'.
                '<strong><em>Bu mesaj https://smakardesim.com adresinden otomatik yönlendirilmiştir. Lütfen bu mesajı yanıtlamayınız.</em></strong>','text/html');

        });
    }
}
