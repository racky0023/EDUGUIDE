<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    public function cour(){
        return $this->hasMany('App\Cour');
    }

    public function User(){
        return $this->hasMany('App\User');
    }
    
}
