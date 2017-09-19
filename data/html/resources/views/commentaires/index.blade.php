@extends('templates.default')


@section('title', 'commentaires')

@section('content')
    <div class="columns is-multiline">
        @if(count($commentaires) === 0)
            <div class="message is-info">
                <div class="message-body">
                    Il n'y a pas encore de commentaires. Revenez plus tard..;
                </div>
            </div>
        @endif
        @foreach($commentaires as $commentaire)
            <div class="column is-one-quarter">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <a href="{{route('ComShow', ['id'=>$commentaire->id])}}">{{$commentaire->title}}</a>
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <small>{{$commentaire->created_at}}</small>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </div>


@endsection

