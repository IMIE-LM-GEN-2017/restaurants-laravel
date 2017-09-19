@extends('template.admin')

@section('title', $user->pseudo)

@section('content')
    <a href="{{ route('AdminUserDestroy', ['id'=>$user->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminUserEdit', ['id'=>$user->id]) }}" class="button is-primary">Editer</a>

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
        {{var_dump($user->created_at)}}
        {{var_dump($user->updated_at)}}
    </pre>
    @endsection