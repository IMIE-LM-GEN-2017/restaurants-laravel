<?php

namespace App\Http\Controllers;


use App\reservations;
use Illuminate\Http\Request;

class PlanchaGourmandeController extends Controller
{
    public function index(){
        $PlanchaGourmande=PlanchaGourmande::all();
        return view('PlanchaGourmande.index',['PlanchaGourmande'=>$PlanchaGourmande]);
    }
}
