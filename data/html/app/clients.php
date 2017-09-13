<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clients extends Model
{
    protected $fillable = ['id', 'nom', 'adresse','cp','ville','tel','date_de_naissance','mail','date_inscription','mot_de_passe','session','id_reservation'];
}
