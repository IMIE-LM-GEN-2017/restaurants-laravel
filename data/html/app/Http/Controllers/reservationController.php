<?php

namespace App\Http\Controllers;


use App\reservations;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function index(){
        $restaurants=reservations::all();
        return view('reservations.index',['reservations'=>$restaurants]);
    }
}
