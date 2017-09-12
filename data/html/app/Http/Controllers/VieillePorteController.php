<?php

namespace App\Http\Controllers;


use

    App\reservations;
use Illuminate\Http\Request;

class VieillePorteController extends Controller
{
    public function index(){
        $VieillePorte=VieillePorte::all();
        return view('VieillePorte.index',['VieillePorte'=>$VieillePorte]);
    }
}
