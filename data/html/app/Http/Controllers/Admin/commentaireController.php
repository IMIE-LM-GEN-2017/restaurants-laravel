<?php

namespace App\Http\Controllers\Admin;

use App\commentaire;


use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class commentaireController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $commentaires = commentaire::all();

        return view('admin.commentaires.index', ['commentaires' => $commentaires]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.commentaires.create');
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


        $commentaire = commentaires::create($data);

        // Redirection et message
        if ($commentaire->exists) {
            Session::flash('message', 'Nouveau commentaire créée');

            return redirect()->route('AdminComIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminComCreate');
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


        $commentaire = commentaire::findOrFail($id);


        return view('admin.commentaires.show', ['commentaire' => $commentaire]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $commentaire = commentaire::findOrFail($id);


        return view('admin.commentaires.edit', ['commentaire' => $commentaire]);
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
        $commentaire = commentaire::findOrFail($id);


        if ($commentaire->update($request->all())) {
            Session::flash('message', 'commentaire mise à jour');
            return redirect()->route('AdminComIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminComEdit', ['id' => $id]);
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

        $commentaire = commentaire::findOrFail($id);

        $commentaire->delete();

        Session::flash('message', 'commentaire supprimé');

        return redirect()->route('AdminComIndex');
    }
}
