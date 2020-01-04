<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AbonnementController extends Controller
{
    public function expired(){
        $name = "racky";
        $date = "31 - 12 -2019";
        Illuminate\Support\Facades\Mail::to('racky.welegmail.com')->send(new AbonnementMail($name, $date));
        return "Message envoyé";
     }
     
}
