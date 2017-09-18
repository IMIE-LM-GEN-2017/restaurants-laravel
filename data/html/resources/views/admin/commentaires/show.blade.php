@extends('template.admin')

@section('title', 'commentaires ' . $commentaire->nom)

@section('content')
    <a href="{{ route('AdminComDestroy', ['id'=>$commentaire->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminComEdit', ['id'=>$commentaire->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{var_dump($commentaire->id)}}
        {{var_dump($commentaire->nom)}}
        {{var_dump($commentaire->description)}}
        {{var_dump($commentaire->created_at)}}
        {{var_dump($commentaire->updated_at)}}
    </pre>
@endsection