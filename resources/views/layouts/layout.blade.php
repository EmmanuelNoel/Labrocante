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
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <script src="resources/js/brocante.js"></script>
        @yield('css')
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container m-0">
                <div class="d-flex valgueris">
                    <a class="navbar-brand" href="{{route('home')}}">
                        <img src="{{ asset('assets/images/Logo 1.png') }}" alt="Brocante" width="150" height="50">
                    </a>
                </div>
                <div class="mx-auto my-auto d-none d-sm-flex search-item">
                    <div class="search-icon">
                        <i class="bi bi-search"></i>
                    </div>
                    <div class="search-box">
                    <input  type="search" placeholder="Faire une recherche..." aria-label="Search">
                    </div>
                </div>
                <ul class="navbar-nav navbarmenu mx-lg-0 d-flex  m-0">
                    <li class="nav-item mx-4  me-lg-5 active" id="onalechoix">
                        <a class="nav-link icons" href="#">
                          <span><i class="bi bi-bag"></i></span>
                        </a>
                    </li>
                    <li class="nav-item mx-4 offset-md-8 me-lg-5 active"id="daccord" >
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
                    </form></li>
                    @endauth
                    @guest
                    <li class="nav-item">
                        <a class="nav-link inscrire" href="{{ route('bienvenue') }}"><i class="bi bi-person-circle"></i>&nbsp;S'inscrire</a>
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
        <main>
             @yield('content')
        </main>
        @yield('script')
    </body>
</html>
