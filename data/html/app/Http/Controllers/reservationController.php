<?php

namespace App\Http\Controllers;


use App\reservations;
use App\restaurants;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function index()
    {
        $reservations = reservations::all();
        return view('reservations.index', ['reservations' => $reservations]);
    }

    public function show($id)
    {
        $reservation = reservation::findOrFail($id);

        return view('reservation.show', ['reservation' => $reservation]);

    }

    public function create($id)
    {
        $restau = restaurants::findOrFail($id);

        return view('reservations.create', ['restaurant' => $restau]);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'nb_personnes' => 'required|int',
            'restaurant_id' => 'required|exists:restaurants,id'
        ]);

        $data = $request->all();

        $data['users_id'] = Auth()->user()->id;

        reservations::create($data);

        return redirect()->route('ResMyList');
    }

    public function mylist()
    {
        $resas = reservations::get()->where('users_id', '=', Auth()->user()->id);


        return view('reservations.mylist', ['reservations' => $resas]);
    }
}
