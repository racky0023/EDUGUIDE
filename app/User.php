<?php

namespace App;


use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Gate;



class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    public function Cour(){
        return $this->belongsToMany("App\Cour");
        $user = Auth::user(); 
        $user_id = Auth::id();
        $cours->user_id  = Auth::id();
        $cours->save();
    }
    public function Professeur(){
        return $this->belongsTo('App\Professeur');
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin(){
        return strtolower(@$this->roles) === 'admin'? true : false;
     }
     public function isEleve(){
        return strtolower(@$this->roles) === 'eleve'? true : false;
     }
     public function isProfesseur(){
        return strtolower(@$this->roles) === 'professeur'? true : false;
     }
           
}
