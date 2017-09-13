<?php

namespace App\Http\Controllers\Admin;

use App\client;
use App\Http\Controllers\Admin\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = client::all();
        return view('admin.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.clients.create');
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

        $client = client::create($data);

        // Redirection et message
        if ($client->exists) {
            Session::flash('message', 'Nouvelle catégorie créée');
            return redirect()->route('AdminCliIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminCliCreate');
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
        $client = client::findOrFail($id);

        return view('admin.clients.show', ['client' => $client]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = client::findOrFail($id);

        return view('admin.clients.edit', ['client' => $client]);
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
        $client = client::findOrFail($id);

        if ($client->update($request->all())) {
            Session::flash('message', 'client mise à jour');
            return redirect()->route('AdminCliIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminCliEdit', ['id' => $id]);
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
        $client = client::findOrFail($id);
        $client->delete();

        Session::flash('message', 'Client supprimé');

        return redirect()->route('AdminCliIndex');
    }
}
