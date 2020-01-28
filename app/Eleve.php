<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    public function Notification(){
        return $this->hasMany('App\Notification');
    }
}
