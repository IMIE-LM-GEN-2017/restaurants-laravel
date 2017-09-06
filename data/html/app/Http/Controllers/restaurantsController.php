<?php

namespace App\Http\Controllers;


use App\restaurants;
use Illuminate\Http\Request;

class restaurantsController extends Controller
{
    public function index(){
        $restaurants=restaurants::all();
        return view('restaurants.index',['restaurants'=>$restaurants]);
    }
}
