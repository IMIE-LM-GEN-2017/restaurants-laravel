@extends('template.default')

@section('title', 'Affichage ...')

@section('content')
    <pre>
        {{var_dump($user->id)}}
        {{var_dump($user->commentaire)}}
    </pre>
    <h2 class="title">clients</h2>
    <p>Ici, la liste des commentaires</p>
@endsection