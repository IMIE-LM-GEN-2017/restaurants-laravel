<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentaires extends Model
{
    protected $fillable = ['id', 'commentaire', 'note','created_at', 'updated_at','clients_id'];

    public function posts(){
        return $this->hasMany('App\Post');
    }
}
