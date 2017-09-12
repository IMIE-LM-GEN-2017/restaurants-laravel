<?php

namespace App\Http\Controllers;


use

    App\reservations;
use Illuminate\Http\Request;

class BistrotDesGourmetsController extends Controller
{
    public function index(){
        $BistrotDesGourmets=BistrotDesGourmets::all();
        return view('BistrotDesGourmets.index',['BistrotDesGourmets'=>$BistrotDesGourmets]);
    }
}
