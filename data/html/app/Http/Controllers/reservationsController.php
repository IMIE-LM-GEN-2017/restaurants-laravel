<?php

namespace App\Http\Controllers;


use App\reservations;
use Illuminate\Http\Request;

class reservationsController extends Controller
{
    public function index(){
        $restaurants=reservations::all();
        return view('reservations.index',['reservations'=>$restaurants]);
    }
}
