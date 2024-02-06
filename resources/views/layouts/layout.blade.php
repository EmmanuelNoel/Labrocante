<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/media.css') }}" rel="stylesheet">
        <script src="resources/js/brocante.js"></script>
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container">
                <div class="d-flex">
                    <a class="navbar-brand" href="#">
                        <img src="{{ asset('assets/images/Logo 1.png') }}" alt="Brocante" width="150" height="50">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto my-auto d-none d-sm-flex search-item">
                    <div class="dropdown">
                        <div class="dropdown-icon dropdown-toggle" id="dropdown-icon" data-bs-toggle="dropdown" aria-expanded="false" >
                        Article</div>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Femmes</a></li>
                        <li><a class="dropdown-item" href="#">Hommes</a></li>
                        <li><a class="dropdown-item" href="#">Enfants</a></li>
                        </ul>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="search-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <div class="search-box">
                    <input  type="search" placeholder="Faire une recherche..." aria-label="Search">
                    </div>
                </div>
                <ul class="navbar-nav navbarmenu d-flex ms-auto">
                    <li class="nav-item me-3 me-lg-1 active">
                        <a class="nav-link icons" href="#">
                          <span><i class="bi bi-bag"></i></span>
                        </a>
                    </li>
                    <li class="nav-item me-3 me-lg-1 active">
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
                    </form></li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link inscrire" href="{{ route('bienvenue') }}">S'inscrire&nbsp;<i class="bi bi-person-circle"></i></a>
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
            </div>
        </nav>
        </header>
        <main>
             @yield('content')
        </main>
        @yield('script')
    </body>
</html>
