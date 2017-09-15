@if(Auth::guest())
    <a class="navbar-item" href="{{ route('login') }}">Login</a>
    <a class="navbar-item" href="{{ route('register') }}">Inscription</a>
@else
    <div class="navbar-item has-dropdown is-hoverable">
        <div class="navbar-link"><i class="fa fa-fw fa-user"></i> {{ auth()->user()->pseudo }}</div>
        <div id="UserDropdown" class="navbar-dropdown is-right">
            <a class="navbar-item" href="{{ route('AdminUserIndex') }}">
                <i class="fa fa-fw fa-cogs"></i> Administration
            </a>
            <a class="navbar-item" href="{{ route('AdminUserDashboard') }}">
                <i class="fa fa-fw fa-user"></i> Mon compte
            </a>

            <hr class="navbar-divider">


        </div>
    </div>
@endif