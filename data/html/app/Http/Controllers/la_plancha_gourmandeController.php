<?php

namespace App\Http\Controllers;


use App\reservations;
use Illuminate\Http\Request;

class la_plancha_gourmandeController extends Controller
{
    public function index(){
        $la_plancha_gourmande=la_plancha_gourmande::all();
        return view('la_plancha_gourmande.index',['la_plancha_gourmande'=>$la_plancha_gourmande]);
    }
}
