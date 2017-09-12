<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentaires extends Model
{
    protected $fillable = ['id', 'commentaires', 'dates_commentaires','notes','id_clients'];
}
