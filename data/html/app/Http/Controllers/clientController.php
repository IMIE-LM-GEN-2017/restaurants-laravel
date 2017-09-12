<?php

namespace App\Http\Controllers;


use App\clients;
use Illuminate\Http\Request;

class clientController extends Controller
{
    public function index(){
        $clients=clients::all();
        return view('clients.index',['clients'=>$clients]);
    }
}
