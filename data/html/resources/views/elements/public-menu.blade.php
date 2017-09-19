<nav class="navbar ">
    <div class="navbar-brand">
        <a class="navbar-item" href="{{ url('/') }}">Pour les Gourmands</a>
        <div class="navbar-burger burger" data-target="navMenubd">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <div id="navMenubd" class="navbar-menu">
        <div class="navbar-start">
            <a class="navbar-item" href="{{ route('ComIndex') }}"><i class="fa fa-fw fa-file-text-o"></i> Commentaires</a>

            <a class="navbar-item" href="{{ route('UserIndex') }}"><i class="fa fa-fw fa-users"></i> Clients</a>
            <a class="navbar-item" href="{{ route('ResIndex') }}"><i class="fa fa-fw fa-book"></i> Reservation</a>
            <a class="navbar-item" href="{{ route('RestoIndex') }}"><i class="fa fa-fw fa-tags"></i> Restaurants</a>
        </div>e"dededcexe

        <div class="navbar-end">

                @component('elements.user-menu.blade')@endcomponent

        </div>
    </div>
</nav>












