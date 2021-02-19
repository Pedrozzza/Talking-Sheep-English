<nav class="navbar navbar-expand-md navbar-light shadow-sm navbarwhitebold bg-red fixed-top">
    <div class="container-fluid">
        <img src="{{ url('logo/Sheepinflag2.png')}}" class="mr-3" style="height: 40px; width: 40px">
        <a class="navbar-brand" href="{{ url('/#') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto border-left">
                <a href="/#about" style="color: white!important;"><li class="nav-itemleft">Informace</li></a>
                <a href="/#pricelist" style="color: white  !important;"><li class="nav-itemleft">Ceník</li></a>
                <a href="/#contact" style="color: white !important;"><li class="nav-itemleft">Kontakt</li></a>
                <a href="/folders" style="color: white !important;"><li class="nav-itemleft">Studovna</li></a>              
                @if(Auth()->user())
                <a href="/folders" style="color: white !important;"><li class="nav-itemleft">Odevzdávárna</li></a> 
                @endif 
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto border-left">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Přihlásit se</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrovat</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @if(Auth()->user()->id == 1)
                                <a href="/homework" class="dropdown-item contactemail">Homework</a>
                            @endif 
                            <a class="dropdown-item contactemail" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Odhlásit se
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
