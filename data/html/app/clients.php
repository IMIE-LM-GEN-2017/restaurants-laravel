<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $fillable = ['id', 'nom', 'prenom', 'adresse','ville','cp','date_de_naissance', 'date_de_naissance','email','password','created_at','update_at','reservation_id'];
}
