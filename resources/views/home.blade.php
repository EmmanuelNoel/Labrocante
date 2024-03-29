@extends('layouts.layout')
@section('content')
    <section class="me-auto" id="conteneur">
        @include('partials.sidebar')
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
                            <a href="{{ route('detailproduit', ['id' => $produit_recent->id  ]) }}">
                                @if ($produit_recent->medias->count() > 0)
                                    <img src="{{ asset('storage/' . $produit_recent->medias[0]->path) }}"
                                        alt="{{ $produit_recent->medias[0]->nom }}">
                                @else
                                    <img src="{{ asset('admin_assets/img/no-img.png') }}" width="60" height="60"
                                        alt="{{ $product->name }}">
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
            @forelse ($fil_actualites as $fil_actualite)
                <div class="produit">
                    <div class="contentproduit">
                        <div class="square">
                            <a href="">
                                @if ($fil_actualite->medias->count() > 0)
                                    <img src="{{ asset('storage/' . $fil_actualite->medias[0]->path) }}"
                                        alt="{{ $fil_actualite->medias[0]->nom }}">
                                @else
                                    <img src="{{ asset('admin_assets/img/no-img.png') }}" width="60" height="60"
                                        alt="{{ $fil_actualite->name }}">
                                @endif
                            </a>
                        </div>
                        <div class="info d-flex">
                            <div>
                                <h1>{{ $fil_actualite->nom }}</h1>
                                <p>{{ $fil_actualite->description }}</p>
                                <h3>{{ $fil_actualite->prix }}</h3>
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

            {{ $fil_actualites->links('pagination::simple-bootstrap-4') }}

        </div>

    </div>
    <div class="seemore container mb-5 text-center  d-block align-items-center justify-content-center ">
        <form action="{{ route('subscribers.store') }}" method="post">
            @csrf
            @if (session('success'))
                <div class="alert alert-primary  animate__animated animate__bounceInRight alert-dismissible" role="alert"
                    id="primary">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    {{ session('success') }}
                </div>
            @elseif(session('existe'))
                <div class="alert alert-danger show-popup col-md-4 animate__animated animate__bounceInRight alert-dismissible" role="alert"
                    id="info" data-show-popup="true">
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
    <script src="{{asset('home.js')}}"></script>
    @include('partials.footer')
@endsection
