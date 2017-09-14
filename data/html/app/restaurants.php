<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurants extends Model
{
    protected $fillable = ['id', 'nom', 'adresse','cp','ville','tel','description','dateouverture','datemiseàjour','id_commentaires'];




}
