<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    protected $fillable = ['id', 'restaurant_id','commentaire_id', 'users_id', 'date', 'nb_personnes'];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function commentaires(){
        return $this->hasOne('App\commentaires');
    }
    public function restaurants(){
        return $this->belongsTo('App\restaurants', 'restaurant_id');
    }
}
