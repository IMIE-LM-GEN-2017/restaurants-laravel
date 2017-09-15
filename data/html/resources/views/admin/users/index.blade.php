@extends('templates.admin')

@section('title', 'Liste des membres')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>nom</td>
            <td>prenom</td>
            <td>adresse</td>
            <td>ville</td>
            <td>cp</td>
            <td>date_de_naissance</td>
            <td>email</td>
            <td>tel</td>
            <td>password</td>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>
                    <a href="{{route('AdminUserDestroy', ['id'=>$user->id])}}">Supprimer</a>
                    <a href="{{route('AdminUserEdit', ['id'=>$user->id])}}">Editer</a>
                    <a href="{{route('AdminUserShow', ['id'=>$user->id])}}">Afficher</a>
                </td>
                <td>{{$user->id}}</td>
                <td>{{$user->nom}}</td>
                <td>{{$user->prenom}}</td>
                <td>{{$user->adresse}}</td>
                <td>{{$user->ville}}</td>
                <td>{{$user->cp}}</td>
                <td>{{$user->date_de_naissance}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->tel}}</td>
                <td>{{$user->password}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection