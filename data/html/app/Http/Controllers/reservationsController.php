<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurants extends Model
{
    protected $fillable = ['id', 'id_restaurants', 'id_commentaires'];
    public function posts(){
        return $this->hasMany('App\Post');
    }
}
