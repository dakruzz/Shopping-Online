<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">
            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ route("sites.index") }}">Logo</a>
        </div>

        <!-- Search -->
        <form action="" method="post" class="navbar-form navbar-left">
            <div class="form-group">
                <input name="search" type="text" class="form-control" placeholder="Search" required>
                <button type="submit" class="btn btn-default submit">Submit</button>
            </div>

        </form>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li><a href="{{ route('sites.cart') }}">Basket</a></li>
                    <li class="dropdown">
                        <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}<span class="caret"></span>
                        </a>
                        @if( Auth::user()->name === "admin" )
                            <ul class="dropdown-menu">
                                <li><a href="{{ route("sites.getAddProduct") }}">Add product</a></li>
                                <li><a href="#">Another action</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        @else
                            <ul class="dropdown-menu">
                                <li><a href="#">Another action</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                        @endif
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>