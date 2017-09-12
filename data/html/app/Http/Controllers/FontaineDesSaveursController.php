<?php

namespace App\Http\Controllers;


use

    App\reservations;
use Illuminate\Http\Request;

class FontaineDesSaveursController extends Controller
{
    public function index(){
        $FontaineDesSaveurs=FontaineDesSaveurs::all();
        return view('FontaineDesSaveurs.index',['FontaineDesSaveurs'=>$FontaineDesSaveurs]);
    }
}
