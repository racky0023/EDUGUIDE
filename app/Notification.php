<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    public function Cour(){
        return $this->belongsTo('App\Cour');
    }
    public function Eleve(){
        return $this->belongsTo('App\Eleve');
    }
}
