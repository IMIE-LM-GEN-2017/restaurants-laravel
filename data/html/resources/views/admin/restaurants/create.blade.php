@extends('templates.admin')

@section('title', 'Nouveau restaurant')

@section('content')
    {!! Form::open(['route'=>'AdminRestoStore']) !!}

    {!! Form::label('name') !!}
    {!! Form::text('name') !!}

    {!! Form::label('description') !!}
    {!! Form::textarea('description') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection