<?php

namespace App\Http\Controllers;


use

    App\reservations;
use Illuminate\Http\Request;

class ParvisSaintHilaireController extends Controller
{
    public function index(){
        $ParvisSaintHilaire=ParvisSaintHilaire::all();
        return view('ParvisSaintHilaire.index',['ParvisSaintHilaire'=>$ParvisSaintHilaire]);
    }
}
