@extends('templates.default')

@section('title', 'Affichage ...')

@section('content')
    <pre>
        {{var_dump($user->id)}}
        {{var_dump($user->nom)}}
        {{var_dump($user->prenom)}}
        {{var_dump($user->adresse)}}
        {{var_dump($user->ville)}}
        {{var_dump($user->cp)}}
        {{var_dump($user->date_de_naissance)}}
        {{var_dump($user->email)}}
        {{var_dump($user->tel)}}
        {{var_dump($user->password)}}
        {{var_dump($user->updated_at)}}
        {{var_dump($user->created_at)}}
    </pre>
    <h2 class="title">clients</h2>
    <p>Ici, la liste des clients</p>
@endsection