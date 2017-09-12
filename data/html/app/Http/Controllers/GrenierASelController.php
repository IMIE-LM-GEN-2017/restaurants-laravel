<?php

namespace App\Http\Controllers;


use

    App\reservations;
use Illuminate\Http\Request;

class GrenierASelController extends Controller
{
    public function index(){
        $GrenierASel=GrenierASel::all();
        return view('GrenierASel.index',['GrenierASel'=>$GrenierASel]);
    }
}
