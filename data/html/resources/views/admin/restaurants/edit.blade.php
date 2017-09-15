@extends('templates.admin')

@section('title', 'Edition d un/une restaurant)

@section('content')
    {!! Form::model($restaurant, ['route'=>['AdminRestoUpdate', $restaurant->id]]) !!}

    {!! Form::label('nom') !!}
    {!! Form::text('nom') !!}

    {!! Form::label('description') !!}
    {!! Form::textarea('description') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection