<?php

namespace App\Http\Controllers;


use App\commentaires;
use Illuminate\Http\Request;

class commentaireController extends Controller
{
    public function index(){
        $commentaires=commentaires::all();
        return view('commentaire.index',['commentaires'=>$commentaires]);
    }
    public function show($id)
    {
        $commentaires= clients::findOrFail($id);
        return view('commentaire.show',['client'=> $commentaires]);
    }
}
