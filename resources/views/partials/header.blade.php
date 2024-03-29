<header>
    <nav class="navbar navbar-expand-lg navbar-light ">
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
                                class="bi bi-person-circle"></i><span class="d-lg-block d-none">&nbsp;S'inscrire</span></a>
                    </li>
                @endguest
                {{-- <li class="nav-item">
                <li class="nav-item">
                    <i class="bi bi-list deroulante" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"></i>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                    <div class="offcanvas-header">
                        <h4 class="offcanvas-title" id="offcanvasRightLabel"><b>Catégories Produits</b></h4>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="category-list">
                            <ul>
                                <li><a href="">Hommes</a></li>
                                <li><a href="">Femmes</a></li>
                                <li><a href="">Enfants</a></li>
                                <li><a href="">Acessoires</a></li>
                                <li><a href="">Divertissement</a></li>
                                <li><a href="">Maison</a></li>
                                <li><a href="">Toutes les catégories</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </li> --}}
            </ul>
        </div>
    </nav>
</header>
