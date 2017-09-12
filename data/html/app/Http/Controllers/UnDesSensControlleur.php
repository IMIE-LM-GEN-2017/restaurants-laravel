<?php

namespace App\Http\Controllers;


use App\reservations;
use Illuminate\Http\Request;

class UnDesSensController extends Controller
{
    public function index(){
        $UnDesSens=UnDesSens::all();
        return view('UnDesSens.index',['UnDesSens'=>$UnDesSens]);
    }
}
