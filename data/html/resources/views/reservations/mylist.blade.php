@extends('template.default')
@section('title', 'Reservation')
@section('content')
    <h1>Vos reservations</h1>

    <table class="table">
        <thead>
        <tr>
            <td>Restaurant</td>
            <th>Date</th>
            <th>Nb. personnes</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $resa)
            <tr>
                <td><a href="{{route('RestoShow', ['id' => $resa->restaurant_id])}}">{{$resa->restaurants->nom}}</a></td>
                <td>{{$resa->date}}</td>
                <td>{{$resa->nb_personnes}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

