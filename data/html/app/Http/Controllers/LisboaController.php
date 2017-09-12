<?php

namespace App\Http\Controllers;


use

    App\reservations;
use Illuminate\Http\Request;

class LisboaController extends Controller
{
    public function index(){
        $Lisboa=Lisboa::all();
        return view('Lisboa.index',['Lisboa'=>$Lisboa]);
    }
}
