<?php

namespace App\Http\Controllers;


use App\commentaires;
use Illuminate\Http\Request;

class commentaireController extends Controller
{
    public function index(){
        $commentaires=commentaires::all();
        return view('commentaires.index',['commentaires'=>$commentaires]);
    }
}
