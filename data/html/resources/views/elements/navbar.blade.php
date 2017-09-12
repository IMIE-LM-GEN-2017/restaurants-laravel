<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Pour les Gourmands</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('ResIndex') }}">reservations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('RestoIndex') }}">restaurants</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('RestoIndex') }}">
                    @if(Auth::guest())
                    login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('RestoIndex') }}">inscription</a>
            </li>
            <li>
                @else
                    <a class="navbar-item " href="{{ route('logout') }}"
                       onclick="event.preventDefault();
               document.getElementById('logout-form').submit();">
                        Logout
                    </a>

            </li>



        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
    @endif
</nav>
