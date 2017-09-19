<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Admin\controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class userController extends controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = user::all();
        return view('admin.users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('admin.users.create');
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
        ]);

        $data = $request->all();


        $user = user::create($data);

        // Redirection et message
        if ($user->exists) {
            Session::flash('message', 'Nouveau client créée');
            return redirect()->route('AdminUserIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue');
            return redirect()->route('AdminUserCreate');
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
        $user = user::findOrFail($id);

        return view('admin.users.show', ['user' => $user]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = user::findOrFail($id);

        return view('admin.users.edit', ['user' => $user]);
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
        $user = user::findOrFail($id);

        if ($user->update($request->all())) {
            Session::flash('message', 'user mise à jour');
            return redirect()->route('AdminUserIndex');
        } else {
            Session::flash('message', 'Une erreur est survenue lors de la mise à jour');
            return redirect()->route('AdminUserEdit', ['id' => $id]);
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
        $user = user::findOrFail($id);
        $user->delete();

        Session::flash('message', 'client supprimé');

        return redirect()->route('AdminUserIndex');
    }
}
