@extends('template.admin')

@section('title', 'Nouveau commentaires')

@section('content')
    {!! Form::open(['route'=>'AdminComStore']) !!}

    {!! Form::label('nom') !!}
    {!! Form::text('nom') !!}

    {!! Form::label('commentaire') !!}
    {!! Form::textarea('commentaire') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection