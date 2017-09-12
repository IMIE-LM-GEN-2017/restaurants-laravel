<?php

namespace App\Http\Controllers;


use

    App\reservations;
use Illuminate\Http\Request;

class NezRougeController extends Controller
{
    public function index(){
        $NezRouge=NezRouge::all();
        return view('NezRouge.index',['NezRouge'=>$NezRouge]);
    }
}
