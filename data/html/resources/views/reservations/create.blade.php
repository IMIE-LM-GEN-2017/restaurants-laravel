@extends('template.default')
@section('title', 'Reservation')
@section('content')
    Réservation pour un repas à "{{$restaurant->nom}}"
    {!! Form::open(['route'=>'ResSave']) !!}

    {!! Form::label('Date') !!}
    <div class="form-group">
        <div class='input-group date' id='resaDate'>
            {!! Form::datetime('date', null, ['class'=>'form-control']) !!}
            <span class="input-group-addon">
               <span class="glyphicon glyphicon-calendar"></span>
            </span>
        </div>
    </div>

    {!! Form::label('Nombre de places') !!}
    {!! Form::number('nb_personnes') !!}
    
    {!! Form::hidden('restaurant_id', $restaurant->id) !!}


    {!! Form::submit('Réserver') !!}
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/locale/fr.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

    <script type="text/javascript">
        $(function () {
            $('#resaDate').datetimepicker({
                format: 'YYYY-MM-DD HH:mm:ss'
            });
        });
    </script>
@endsection

@section('styles')
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css"/>
@endsection
