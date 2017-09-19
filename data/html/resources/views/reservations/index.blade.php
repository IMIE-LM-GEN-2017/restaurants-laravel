
@extends('template.default')
@section('title', 'Reservation')
@section('content')
    <html>

    <form method="get" action="{{ route('ResSave') }}">
    {{ csrf_field() }}

    {!! Form::label('date') !!}
    {!! Form::date('date') !!}

    {!! Form::label('nb_personnes') !!}
    {!! Form::text('nb_personnes') !!}

        {!! Form::label('restaurant_id') !!}
        {!! Form::text('restaurant_id') !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}

    </form>






    </html>

@endsection

