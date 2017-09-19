@extends('template.admin')

@section('title', 'Liste des commentaires')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <td>Actions</td>
            <td>id</td>
            <td>commentaires</td>
        </tr>
        </thead>
        <tbody>
        @foreach($commentaires as $commentaire)
            <tr>
                <td>
                    <a href="{{route('AdminComDestroy', ['id'=>$commentaire->id])}}">Supprimer</a>
                    <a href="{{route('AdminComEdit', ['id'=>$commentaire->id])}}">Editer</a>
                    <a href="{{route('AdminComShow', ['id'=>$commentaire->id])}}">Afficher</a>
                </td>
                <td>{{$commentaire->id}}</td>
                <td>{{$commentaire->commentaire}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection