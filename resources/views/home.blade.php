@extends('layouts.layout')
@section('content')
    <section class="me-auto" id="conteneur">
        <section class="col-md-1" id="menuslateral">
            <ul>
                <!-- Home -->
                <li><a href=""><i class="fas fa-home" data-title="Accueil"></i></a></li>
                <!-- Produits / Services -->
                <li><a href="{{ route('detailproduit') }}"><i class="fa-solid fa-bag-shopping" data-title="Produit"></i></a>
                </li>
                <!-- Nouveautés  -->
                <li><a href=""><i class="fa-solid fa-newspaper" data-title="Nouveautés"></i></a></li>
                <!-- Promotions / Offres spéciales  -->
                <li><a href=""><i class="fas fa-tags" data-title="Promotions"></i></a></li>
                <!-- Blog / Actualités -->
                <li><a href=""><i class="fas fa-feather-alt" data-title="Actualités"></i></a></li>
                <!-- À Propos -->
                <li><a href=""><i class="fas fa-book-open" data-title="À propos"></i></a></li>
                <!-- Support -->
                <li><a href=""><i class="fas fa-question-circle" data-title="Support"></i></a></li>
                <!-- Login -->
                <li class="d-none d-lg-block "><a href="{{ route('bienvenue') }}"><i class="fa-solid fa-user"
                            data-title="S'inscrire"></i></a></li>
            </ul>
        </section>
        <section id="bannierhome" class="col-md-11 p-0 d-flex align-items-center justify-content-center"
            style="background:url('{{ asset('assets/images/Union.png') }}') no-repeat; background-size:cover">
            <div class="text-center texte ">
                <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h1>
                <a href="">S'inscrire</a>
            </div>
        </section>
    </section>
    <div class="produits container">
        <h2><b>Récemment Ajoutés</b></h2>
        <div class="line"></div>
        <br>
        <div class="mt-3 grid-container">
            @forelse ($produits_recents as $produit_recent)
                <div class="produit">
                    <div class="contentproduit">
                        <div class="square">
                            <a href="{{ route('detailproduit') }}">
                                    @if($produit_recent->medias->count() > 0)
                                    <img src="{{ asset('storage/' . $produit_recent->medias[0]->path) }}"
                                         alt="{{ $produit_recent->medias[0]->nom }}">
                                    @else
                                        <img src="{{ asset('admin_assets/img/no-img.png') }}" width="60" height="60" alt="{{ $product->name }}">
                                    @endif
                                </a>
                        </div>
                        <div class="info d-flex">
                            <div>
                                <h1>{{ $produit_recent->nom }}</h1>
                                <p>{{ $produit_recent->description }}</p>
                                <h3>{{ $produit_recent->prix }}</h3>
                            </div>
                            <div class="icons-container d-flex">
                                <div>
                                    <H1><i class="bi bi-heart "></i></H1>
                                </div>
                                <div>
                                    <h3><i class="bi bi-cart-dash-fill"></i></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class="text-center m-auto">
                    Aucun produit ajouté récemment
                </p>
            @endforelse


        </div>

        <h2><b>Articles Populaires</b></h2>
        <div class="line"></div>
        <br>
        <div class="grid-container ">
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>

                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <h2><b>Suggestions de recherche</b></h2>
        <div class="line"></div>
        <br>
        <div class="row mb-5 mt-2">
            <div class="col-xs-4 col-sm-3 col-md-2  suggestion">Hommes</div>
            <div class="col-xs-4 col-sm-3 col-md-2  suggestion">Femmes</div>
            <div class="col-xs-4 col-sm-3 col-md-2  suggestion">Enfants</div>
            <div class="col-xs-4 col-sm-3 col-md-2  suggestion">Divertissements</div>
            <div class="col-xs-4 col-sm-3 col-md-2  suggestion">Accessoires</div>
            <div class="col-xs-4 col-sm-3 col-md-2  suggestion">Toutes les catégories</div>
        </div>
        <h2><b>Fil d'actualité</b></h2>
        <div class="line"></div>
        <br>
        <div class="grid-container ">
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">

                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-container ">
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image5.png') }}"
                                alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">

                            Abdoul BACHABI, [12/02/2024 12:23]
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-container ">
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image1.jpg') }}"
                                alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image2.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="info d-flex">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                        </div>
                        <div class="icons-container d-flex">
                            <div>
                                <H1><i class="bi bi-heart "></i></H1>
                            </div>
                            <div>
                                <h3><i class="bi bi-cart-dash-fill"></i></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="seemore container mb-5 text-center  d-block align-items-center justify-content-center ">
        <form action="{{ route('subscribers.store') }}" method="post">
            @csrf
            @if (session('success'))
                <div class="alert alert-primary  animate__animated animate__bounceInRight alert-dismissible"
                    role="alert" id="primary">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('success') }}
                </div>
            @elseif(session('existe'))
                <div class="alert alert-danger  animate__animated animate__bounceInRight alert-dismissible" role="alert"
                    id="info">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('existe') }}
                </div>
            @endif

            @if (!session('success') && !session('existe'))
                {{-- Ne rien afficher ici ou ajouter du contenu par défaut --}}
            @endif
            <H2>Abonnez vous à notre newsletter</H2>
            <p>Ne manquez pas nos meilleures offres ! Ne vous inquiétez pas, nous ne vous spammerons pas.</p>
            <div class="newsletters ">
                <input type="email" name="subscribersmail" required placeholder="Entrez votre email ici">
                <span class="ms-auto  "><input type="submit" value="S'abonner"></span>
            </div>
        </form>
    </div>
    <script src="https://kit.fontawesome.com/3a537738e0.js" crossorigin="anonymous"></script>
    @include('partials.footer')
@endsection
