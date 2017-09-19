<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurants extends Model
{
    protected $fillable = ['id', 'nom', 'adresse','cp','ville','tel','horaire','description', 'dateouverture'];

    public function reservation(){
        return $this->hasMany('App\reservations');
    }
}
