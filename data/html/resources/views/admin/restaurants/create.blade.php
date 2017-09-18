@extends('template.admin')

@section('title', 'Nouveau restaurant')

@section('content')
    {!! Form::open(['route'=>'AdminRestoStore']) !!}

    {!! Form::label('restaurant') !!}
    {!! Form::text('restaurant') !!}

    {!! Form::label('adresse') !!}
    {!! Form::text('adresse') !!}

    {!! Form::label('cp') !!}
    {!! Form::text('cp') !!}

    {!! Form::label('ville') !!}
    {!! Form::text('ville') !!}

    {!! Form::label('tel') !!}
    {!! Form::text('tel') !!}

    {!! Form::label('date d\'ouverture') !!}
    {!! Form::text('name') !!}

    {!! Form::label('description') !!}
    {!! Form::textarea('description') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}
@endsection