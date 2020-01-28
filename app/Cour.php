<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
   //protected $fillable =  ['nom_cour','id'];
   protected $guarded = ['name_prof','cour_image'];
   
    public function professeur(){
        return $this->belongsTo('App\Professeur');
    }

    
        public function Notification(){
            return $this->belongsToMany("App\Notification");
        }



         
    
       
       




}