<?php

namespace App\Http\Controllers;


use App\reservations;
use Illuminate\Http\Request;

class BellifontainController extends Controller
{
    public function index(){
        $Bellifontain=Bellifontain::all();
        return view('Bellifontain.index',['Bellifontain'=>$Bellifontain]);
    }
}
