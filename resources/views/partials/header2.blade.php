<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>La brocante</title>
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
                <div class="container-fluid justify-content-between">
                    <div class="d-flex">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('assets/images/Logo 1.png') }}" alt="Brocante" width="100" height="50">
                        </a>
                    </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <div class="search-item">
                    <div class="dropdown">
                        <div class="dropdown-icon dropdown-toggle" id="dropdown-icon" data-bs-toggle="dropdown" aria-expanded="false" >
                        Article</div>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
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
                <ul class="navbar-nav iconliens flex-row d-none d-md-flex">
                    <li class="nav-item me-3 me-lg-1 active">
                      <a class="nav-link" href="#">
                        <span><i class="bi bi-bell"></i></span>
                      </a>
                    </li>

                    <li class="nav-item me-3 me-lg-1">
                      <a class="nav-link" href="#">
                        <span><i class="bi bi-envelope"></i></span>
                      </a>
                    </li>

                    <li class="nav-item me-3 me-lg-1">
                      <a class="nav-link" href="#">
                        <span><i class="bi bi-cart3"></i></span>
                      </a>
                    </li>

                    <li class="nav-item me-3 me-lg-1">
                      <a class="nav-link" href="#">
                        <span><i class="bi bi-heart"></i></span>
                      </a>
                    </li>

                    <li class="nav-item me-3 me-lg-1">
                      <a class="nav-link" href="#">
                        <span><i class="bi bi-circle"></i></span>
                      </a>
                    </li>
                </ul>
                <ul class="navbar-nav navbarmenu">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('detailproduit') }}">Acheter un article</a>
                    </li>
                    <li class="nav-item">
                        <i class="bi bi-list" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" style=" font-size:40px;margin-left: 50px;color:#FABC01;font-weight:bold;margin-top:5px;"></i>
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
                    </li>
                </ul>
              </div>
            </div>
        </nav>
        </header>
        <main>
             @yield('content')
        </main>
    </body>
</html>
