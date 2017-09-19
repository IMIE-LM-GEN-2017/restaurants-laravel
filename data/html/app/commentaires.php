<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentaires extends Model
{

    protected $fillable = ['id', 'commentaire', 'note','users_id'];

    public function resto(){
        return $this->hasMany('App\restaurants');
    }
    public function user()
{
    return $this->belongTo('App\User');
}

}
