<?php

namespace App\Http\Controllers;


use App\reservations;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function index(){
        $reservations=reservations::all();
        return view('reservations.index',['reservations'=>$reservations]);
    }
    public function show($id)
    {
        $reservation = reservation::findOrFail($id);

        return view('reservation.show', ['reservation' => $reservation]);

    }
}
