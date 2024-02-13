<header>
    <nav class="navbar navbar-expand-lg navbar-light ms-5">
        <div class="container m-0">
            <div class="d-flex valgueris">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('assets/images/Logo 1.png') }}" alt="Brocante" width="150" height="50">
                </a>
            </div>
            <div class="mx-auto my-auto d-none d-sm-flex search-item">
                <div class="search-icon">
                    <i class="bi bi-search"></i>
                </div>
                <div class="search-box">
                    <input type="search" placeholder="Faire une recherche..." aria-label="Search">
                </div>
            </div>
            <ul class="navbar-nav navbarmenu mx-lg-0 d-flex  m-0">
                <li class="nav-item mx-4  me-lg-1 active" id="onalechoix">
                    <a class="nav-link icons" href="#">
                        <span><i class="bi bi-bag"></i></span>
                    </a>
                </li>
                <li class="nav-item mx-4 offset-md-8 me-lg-4 active"id="daccord">
                    <a class="nav-link icons" href="#">
                        <span><i class="bi bi-bell"></i></span>
                    </a>
                </li>
                <li class="nav-item mx-4 d-lg-none  offset-md-8 me-lg-5 active" id="dansuntemps">
                    <a class="nav-link icons" href="{{ route('bienvenue') }}">
                        <span><i class="fa-regular fa-user"></i></span>
                    </a>
                </li>
                @auth
                    <li class="nav-item">
                        <a class="nav-link inscrire" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion
                            &nbsp;&nbsp;<i class="bi bi-person-circle"></i>
                        </a>

                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                            @csrf
                        </form>
                    </li>
                @endauth
                @guest
                    <li class="nav-item">
                        <a class="nav-link inscrire" href="{{ route('bienvenue') }}"><i
                                class="bi bi-person-circle"></i>&nbsp;S'inscrire</a>
                    </li>
                @endguest

            </ul>
        </div>
    </nav>
</header>
