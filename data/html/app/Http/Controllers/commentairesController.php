<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurants extends Model
{
    protected $fillable = ['id', 'commentaires', 'date_commentaires','notes','id_clients'];

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
