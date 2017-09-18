<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'nom', 'prenom', 'adresse', 'ville', 'cp', 'date_de_naissance', 'email', 'tel', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function reservations()
{
        return $this->hasMany('App\reservations');
}

    public function commentaires()
{
    return $this->hasMany ('App\commentaires');
}
}
