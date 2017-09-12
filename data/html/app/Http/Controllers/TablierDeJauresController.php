<?php

namespace App\Http\Controllers;


use

    App\reservations;
use Illuminate\Http\Request;

class TablierDeJauresController extends Controller
{
    public function index(){
        $TablierDeJaures=TablierDeJaures::all();
        return view('TablierDeJaures.index',['TablierDeJaures'=>$TablierDeJaures]);
    }
}
