@extends('template.admin')

@section('title', 'Edition d un commentaire)

@section('content')
    {!! Form::model($commentaire, ['route'=>['AdminComUpdate', $commentaire->id]]) !!}

    {!! Form::label('nom') !!}
    {!! Form::text('nom') !!}

    {!! Form::label('commentaire') !!}
    {!! Form::textarea('commentaire') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection