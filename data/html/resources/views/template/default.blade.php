<html>
<head>
    <title>Pour les Gourmands - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

    {{--<link rel="stylesheet" href="{{asset('css/welcome.css')}}"/>--}}

    @yield('styles')

    <!-- Add the CSRF token in a meta tag to have it easily in JS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
<div class="container">

    @component('elements.navbar')
    @endcomponent

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if(Session::has('message'))
        <div class="message">
            <div class="message-header">Information</div>
            <div class="message-body">
                {{ session('message') }}
            </div>
        </div>
    @endif

    <h1 class="title">@yield('title')</h1>

    <!-- Erreurs de validation -->
    @if($errors->any())
        <div class="message is-danger">
            <div class="message-header">Erreur de formulaire</div>
            <div class="message-body">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div style="background-color:#EEE; color:#333">
        @yield('content')
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>

@yield('scripts')

@component('elements.footer')
@endcomponent
</body>
</html>