@extends('template.default')

@section('title', $restaurants->nom)

@section('content')

    <a href="{{route('ResCreate', ['id'=>$restaurants->id])}}">Réserver maintenant</a>
    <pre>
        {{var_dump($restaurants->id)}}
        {{var_dump($restaurants->nom)}}
        {{var_dump($restaurants->adresse)}}
        {{var_dump($restaurants->cp)}}
        {{var_dump($restaurants->ville)}}
        {{var_dump($restaurants->tel)}}
        {{var_dump($restaurants->description)}}
        {{var_dump($restaurants->dateouverture)}}
        {{var_dump($restaurants->created_at)}}
        {{var_dump($restaurants->updated_at)}}
    </pre>


    {!! Form::open(['route'=>'ComSave']) !!}

    {!! Form::label('commentaire') !!}
    {!! Form::textarea('commentaire') !!}

    {!! Form::label('Note /5') !!}
    {!! Form::text('note') !!}
    {!! Form::hidden('restaurant_id', $restaurants->id) !!}

    {!! Form::submit('Enregistrer') !!}
    {!! Form::close() !!}

    <h2>Commentaires</h2>
    {{--@foreach($restaurants->reservations as $res)--}}
        {{--{{var_dump($res)}}--}}
    {{--@endforeach--}}
@endsection