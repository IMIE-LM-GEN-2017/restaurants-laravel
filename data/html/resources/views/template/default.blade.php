


<html>
<head>
    <title>Pour les Gourmands - @yield('title')</title>
    <link rel="stylesheet" href="css/welcome.css"/>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="bootstrap.css" media="screen,projection"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <!-- Add the CSRF token in a meta tag to have it easily in JS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        /*css*/
        body { font-family: Gabriola, "Gentium Basic", Georgia;
            font-size: 20px;
            color:white;
            background-image:url(http://www.wallpapers-mania.org/images/Deco/fond-page-web-planches-noires-verticales.jpg);
            background-attachment:fixed;
            background-repeat:no-repeat;
        }

        h1{
            font-size: 100px;
            text-align: center;
        }
        .vignettes{
            background-color: dimgray;
            margin-left: 100px;
            margin-right: 100px;
            opacity: 0.8;
        }

        .card {
            width:250px;
            height:400px;
            margin:auto;
            text-align:center;
            border: 1px rgba(255,255,255) solid;
            background-color: white;
        }

        .card-img-top{
            height: 200px;
            width:200px;
        }

        .card-group{
            display: flex;

        }

        .card-body{
            color:black;

        }
    </style>

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

    @yield('content')
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {

        // Get all "navbar-burger" elements
        var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

        // Check if there are any nav burgers
        if ($navbarBurgers.length > 0) {

            // Add a click event on each of them
            $navbarBurgers.forEach(function ($el) {
                $el.addEventListener('click', function () {

                    // Get the target from the "data-target" attribute
                    var target = $el.dataset.target;
                    var $target = document.getElementById(target);

                    // Toggle the class on both the "navbar-burger" and the "navbar-menu"
                    $el.classList.toggle('is-active');
                    $target.classList.toggle('is-active');

                });
            });
        }

    });



</script>
@component('elements.footer')
@endcomponent
</body>
</html>