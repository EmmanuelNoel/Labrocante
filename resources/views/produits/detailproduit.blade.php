@extends('layouts.layout')
@section('content')
    <div class="ficheproduit container">
        <section class="mesdetailproduits">
            <div class="d-flex detailproduit">
                <div class="infoproduit">
                    <div class="imgproduits ">
                        @if ($produit->medias->count() > 0)
                                    <img src="{{ asset('storage/' . $produit->medias[0]->path) }}"
                                        alt="{{ $produit->medias[0]->nom }}">
                                @else
                                    <img src="{{ asset('admin_assets/img/no-img.png') }}" width="60" height="60"
                                        alt="{{ $produit->name }}">
                                @endif
                    </div>
                    <div class="text-center mt-3">
                        <div class="row">
                            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    @foreach ( $produit->medias as $media )
                                    <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="{{ asset('storage/' . $media->path) }}" class="img-fluid" alt="{{ $media->nom }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                </a>
                                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" infodetail ms-auto me-5">
                    <h1>{{ $produit->nom }}</h1>
                    <p>{{ $produit->details }}
                    </p>
                    <p class="tarifunique">Tarif unique de</p>
                    <div class="d-flex prix">
                        <h3>{{ $produit->prix }}</h3>
                        <div class="d-flex icone ms-auto">
                            <H3><a href="" style="color: #D84545"><i class="bi bi-heart me-5"></i></a></H3>
                            <h3><a href="" style="color: #274060"><i class="bi bi-cart-dash-fill"></i></a></h3>
                        </div>
                    </div>
                    <div class="line"></div>
                    <span class="liens"><a href="">Acheter</a></span>
                </div>
            </div>
        </section>
        <section class="description_service">
            <p>{{ $produit->description }}</p>
        </section>
        <section class="apercu">
            <h2>Apercu</h2>
            <img src="{{ asset('assets/images/image7.jpg') }}" alt="Stage 1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Hendrerit gravida rutrum quisque non tellus orci. Arcu bibendum at varius vel pharetra vel
                turpis. Ut etiam sit amet nisl purus in mollis. Diam in arcu cursus euismod quis viverra. Pellentesque sit
                amet porttitor eget dolor morbi non arcu. Vulputate dignissim suspendisse in est ante. Urna et pharetra
                pharetra massa massa. Sed elementum tempus egestas sed sed risus. Gravida quis blandit turpis cursus in.
                Gravida neque convallis a cras semper auctor neque vitae tempus. Convallis tellus id interdum velit laoreet
                id. Odio morbi quis commodo odio aenean sed adipiscing. Libero id faucibus nisl tincidunt. Massa enim nec
                dui nunc. Lectus sit amet est placerat. Scelerisque mauris pellentesque pulvinar pellentesque. Quis ipsum
                suspendisse ultrices gravida dictum fusce. Urna id volutpat lacus laoreet non curabitur gravida.</p>
        </section>
        <section class="aproposvendeur">
            <h2>Message du créateur</h2>
            <div class="row">
                <div class="col-3 d-flex align-items-center">
                    <img src="{{ asset('assets/images/image2.jpg') }}" alt="">
                    <div class="infovendeur d-block">
                        <h3>Nom vendeur</h3>
                        <p>Site vendeur</p>
                    </div>
                    <div class="verticalline ms-auto me-3"></div>
                </div>
                <div class="col-9 textevendeur">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                        et dolore magna aliqua. Hendrerit gravida rutrum quisque non tellus orci. Arcu bibendum at varius
                        vel pharetra vel turpis. Ut etiam sit amet nisl purus in mollis. Diam in arcu cursus euismod quis
                        viverra. Pellentesque sit amet porttitor eget dolor morbi non arcu. Vulputate dignissim suspendisse
                        in est ante. Urna et pharetra pharetra massa massa. Sed elementum tempus egestas sed sed risus.
                        Gravida quis blandit turpis cursus in. Gravida neque convallis a cras semper auctor neque vitae
                        tempus. Convallis tellus id interdum velit laoreet id. Odio morbi quis commodo odio aenean sed
                        adipiscing. Libero id faucibus nisl tincidunt. Massa enim nec dui nunc. Lectus sit amet est
                        placerat. Scelerisque mauris pellentesque pulvinar pellentesque. Quis ipsum suspendisse ultrices
                        gravida dictum fusce. Urna id volutpat lacus laoreet non curabitur gravida.</p>
                </div>
            </div>
        </section>
    </div>

    @include('partials.footer')
@endsection
@section('script')
<script>
    let items = document.querySelectorAll('.carousel .carousel-item')

    items.forEach((el) => {
        const minPerSlide = 4
        let next = el.nextElementSibling
        for (var i=1; i<minPerSlide; i++) {
            if (!next) {
        // wrap carousel by using first child
        next = items[0]
    }
    let cloneChild = next.cloneNode(true)
    el.appendChild(cloneChild.children[0])
    next = next.nextElementSibling
    }
    })
</script>
@endsection
