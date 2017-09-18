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
        $commentaires= users::findOrFail($id);
        return view('commentaire.show',['users'=> $commentaires]);
    }

    public function save(Request $request){
        $this->validate($request, [
            'commentaire'=>'required|string',
            'note'=>'required|int',
            'restaurant_id'=>'required|exists:restaurants,id'
        ]);

        $data = $request->all();

        $data['clients_id']= Auth()->user()->id;

        commentaires::create($data);

        return redirect()->route('RestoShow', ['id'=>$data['restaurant_id']]);

    }
}
