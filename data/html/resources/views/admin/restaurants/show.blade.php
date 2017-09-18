@extends('template.admin')

@section('title', $restaurant->nom)

@section('content')
    <a href="{{ route('AdminRestoDestroy', ['id'=>$restaurant->id]) }}" class="button is-danger">Supprimer</a>
    <a href="{{ route('AdminRestoEdit', ['id'=>$restaurant->id]) }}" class="button is-primary">Editer</a>

    <pre>
        {{var_dump($restaurant->id)}}
        {{var_dump($restaurant->nom)}}
        {{var_dump($restaurant->description)}}
        {{var_dump($restaurant->created_at)}}
        {{var_dump($restaurant->updated_at)}}
    </pre>
@endsection