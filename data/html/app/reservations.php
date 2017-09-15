<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    protected $fillable = ['id', 'restaurant_id','commentaire_id', 'users_id'];

    public function users(){
        return $this->hasMany('App\User');
    }

    public function commentaires(){
        return $this->belongsTo('App\commentaires');
    }
    public function restaurants(){
        return $this->belongsTo('App\restaurants');
    }
}
