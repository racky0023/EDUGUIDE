<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
   //protected $fillable =  ['nom_cour','id'];
   protected $guarded = ['name_prof'];
   
    public function professeur(){
        return $this->belongsTo('App\Professeur');
    }

    
        public function User(){
            return $this->belongsToMany("App\User");
        }



         
    
       
       




}