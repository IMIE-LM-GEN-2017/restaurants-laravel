<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reservations extends Model
{
    protected $fillable = ['id', 'id_restaurants', 'id_commentaires'];
}
