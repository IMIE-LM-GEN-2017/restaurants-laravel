<?php

namespace App\Http\Controllers\Admin;

use App\reservation;

use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class reservationController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = reservation::all();
        return view('admin.reservations.index', ['reservations' => $reservations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.reservations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required|string',

        ]);

        $data = $request->all();

        $reservation = reservation::create($data);

        // Redirection et message
        if ($reservation->exists) {
            Session::flash('message', 'Nouvelle catégorie créée');
            return redirect()->route('AdminResIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminResCreate');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reservation = reservation::findOrFail($id);

        return view('admin.reservations.show', ['reservation' => $reservation]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = reservation::findOrFail($id);

        return view('admin.reservations.edit', ['reservation' => $reservation]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id The id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation des données
        $this->validate($request, [

            'name' => 'required|string',

        ]);
        $reservation = reservation::findOrFail($id);

        if ($reservation->update($request->all())) {
            Session::flash('message', 'reservation mise à jour');
            return redirect()->route('AdminResIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminResEdit', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id The Id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = reservation::findOrFail($id);
        $reservation->delete();

        Session::flash('message', 'reservation supprimé');

        return redirect()->route('AdminResIndex');
    }
}
