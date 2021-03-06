<?php

namespace App\Http\Controllers;


use App\restaurants;
use Illuminate\Http\Request;

class restaurantController extends Controller
{
    public function index(){
        $restaurants=restaurants::all();
        return view('restaurants.index',['restaurants'=>$restaurants]);
    }

    public function show($id)
    {
        $restaurants = restaurants::findOrFail($id);

        return view('restaurants.show', ['restaurants' => $restaurants]);

    }

}
