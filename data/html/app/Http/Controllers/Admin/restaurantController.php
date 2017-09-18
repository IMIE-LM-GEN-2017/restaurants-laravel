<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Admin\controller;
use App\restaurants;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class restaurantController extends controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restaurants = restaurants::all();
        return view('admin.restaurants.index', ['restaurants' => $restaurants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurants.create');
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
            'nom' => 'required|string',
            'description' => 'required|string',
            'tel' => 'required|string',
            'dateouverture' => 'required|date',
        ]);

        $data = $request->all();

        $restaurant = restaurants::create($data);

        // Redirection et message
        if ($restaurant->exists) {
            Session::flash('message', 'Nouvelle catégorie créée');
            return redirect()->route('AdminRestoIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminRestoCreate');
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
        $restaurant = restaurants::findOrFail($id);

        return view('admin.restaurants.show', ['restaurant' => $restaurant]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $restaurant = restaurants::findOrFail($id);

        return view('admin.restaurants.edit', ['restaurant' => $restaurant]);
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
            'nom' => 'required|string',
        ]);
        $restaurant = restaurants::findOrFail($id);

        if ($restaurant->update($request->all())) {
            Session::flash('message', 'restaurant mise à jour');
            return redirect()->route('AdminRestoIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminRestoEdit', ['id' => $id]);
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
        $restaurant = restaurant::findOrFail($id);
        $restaurant->delete();

        Session::flash('message', 'restaurant supprimé');

        return redirect()->route('AdminRestoIndex');
    }
}
