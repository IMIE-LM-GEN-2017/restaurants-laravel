<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    protected $fillable = ['id', 'restaurant_id','commentaire_id', 'client_id'];
}
