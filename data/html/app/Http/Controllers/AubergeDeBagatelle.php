<?php

namespace App\Http\Controllers;


use App\reservations;
use Illuminate\Http\Request;

class AubergeDeBagatelleController extends Controller
{
    public function index(){
        $AubergeDeBagatelle=AubergeDeBagatelle::all();
        return view('AubergeDeBagatelle.index',['AubergeDeBagatelle'=>$AubergeDeBagatelle]);
    }
}
