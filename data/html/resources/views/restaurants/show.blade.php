@extends('template.default')

@section('title', $restaurants->nom)

@section('content')


    <pre>
        {{var_dump($restaurants->id)}}
        {{var_dump($restaurants->nom)}}
        {{var_dump($restaurants->adresse)}}
        {{var_dump($restaurants->cp)}}
        {{var_dump($restaurants->ville)}}
        {{var_dump($restaurants->tel)}}
        {{var_dump($restaurants->description)}}
        {{var_dump($restaurants->dateouverture)}}
        {{var_dump($restaurants->created_at)}}
        {{var_dump($restaurants->updated_at)}}
    </pre>


    {!! Form::open(['route'=>['ComUpdate',$commentaire->id]]) !!}
    {!! Form::label('nom') !!}
    {!! Form::text('nom') !!}

    {!! Form::label('commentaire') !!}
    {!! Form::textarea('commentaire') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection