@extends('layouts.layout')
@section('content')
    <div class="ficheproduit">
        <div class="container">
            <div class="row">
                <div class="col-lg-5  infoproduit">
                    <div class="imgproduits ">
                        <img src="{{ asset('assets/images/image7.jpg') }}" alt="Stage 1">
                    </div>
                    {{-- <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="mt-5 carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-lg-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/image1.jpg') }}"
                                                alt="Image 3" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class=" col-lg-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/image2.jpg') }}"
                                                alt="Image 3" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class=" col-lg-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/image5.png') }}"
                                                alt="Image 3" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class=" col-lg-4">
                                        <div class="card">
                                            <div class="card-img">
                                                <img src="{{ asset('assets/images/image4.png') }}"
                                                alt="Image 3" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div> --}}
                    <div class="text-center">
                        <div class=" mt-5 row">
                            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="https://via.placeholder.com/500x400/31f?text=1" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="https://via.placeholder.com/500x400/e66?text=2" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="https://via.placeholder.com/500x400/7d2?text=3" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="https://via.placeholder.com/500x400?text=4" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="https://via.placeholder.com/500x400/aba?text=5" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="https://via.placeholder.com/500x400/fc0?text=6" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
                    <div class="actionproduit mt-5">
                        <a href="" class="liens me-4">Acheter</a>
                        <a href="" class="liens ms-5 me-3">Faire une offre</a>
                        <a href="" class="liens ms-5 ">Message</a>
                    </div>
                </div>
                <div class="col-lg-7 infodetail ">
                    <div class="row">
                        <div class="detailproduit ">
                            <h1>Nom produit</h1>
                            <span><i class="bi bi-heart me-4" style="color:#D84545"></i><i class="bi bi-cart-dash-fill ms-5" style="color:#FABC01"></i></span>
                            <h3>25000 FCFA</h3>
                            <h1><span class="bi bi-circle" style="color: rgb(194, 190, 190);">&nbsp;&nbsp;&nbsp;</span>Nom
                                du
                                vendeur</h1>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident est, delectus rerum
                                repellat
                                dolor alias maxime pariatur minus veritatis a ex, dolorem perferendis, quibusdam minima.
                                Officia ab
                                nobis modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. A unde maiores modi
                                temporibus
                                id nihil excepturi voluptas, tenetur vero. Quod illo nisi ex quaerat atque, impedit sint
                                harum fugit
                                delectus. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet, corporis velit.
                                Nam
                                repudiandae veniam repellendus alias libero itaque. Quo laudantium ducimus labore numquam
                                unde
                                suscipit blanditiis repudiandae nemo id nobis.Lorem ipsum dolor, sit amet consectetur
                                adipisicing
                                elit. Eveniet, corporis velit. Nam repudiandae veniam repellendus alias libero itaque. Quo
                                laudantium ducimus labore numquam unde suscipit blanditiis repudiandae nemo id nobis. </p>
                            <div class="line"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="infocontainer">
                            <div class="info-item">
                                <h5>Marque</h5>
                                <h5>Dimension</h5>
                                <h5>Taille</h5>
                                <h5>Etat</h5>
                                <h5>Matiere</h5>
                                <h5>Couleur</h5>
                                <h5>Localisation</h5>
                                <h5>Personne interessée</h5>
                                <h5>Ajoutée </h5>
                            </div>
                            <div class="dashes">
                                <h5>------------------------------</h5>
                                <h5>---------------</h5>
                                <h5>--------</h5>
                                <h5>--------</h5>
                                <h5>--------</h5>
                                <h5>-------</h5>
                                <h5>--------</h5>
                                <h5>--------</h5>
                                <h5>il y a -----</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="produits container">
        <h1><b>Fil d'actualité</b></h1>
        <div class="line"></div>
        <br>
        <div class="grid-container ">
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image1.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex info">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                            <h1 class="mt-3"><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                        <div class="ms-auto">
                            <H1><i class="bi bi-heart " style="color:#D84545;"></i></H1>
                            <h3 class="paniertop"><i class="bi bi-cart-dash-fill"></i></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image2.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex info">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                            <h1 class="mt-3"><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                        <div class="ms-auto">
                            <H1><i class="bi bi-heart " style="color:#D84545;"></i></H1>
                            <h3 class="paniertop"><i class="bi bi-cart-dash-fill"></i></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex info">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                            <h1 class="mt-3"><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                        <div class="ms-auto">
                            <H1><i class="bi bi-heart " style="color:#D84545;"></i></H1>
                            <h3 class="paniertop"><i class="bi bi-cart-dash-fill"></i></h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="produit">
                <div class="contentproduit">
                    <div class="square">
                        <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                    </div>
                    <div class="d-flex info">
                        <div>
                            <h1>Nom produit</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                            <h3>25000 FCFA</h3>
                            <h1 class="mt-3"><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                        <div class="ms-auto">
                            <H1><i class="bi bi-heart " style="color:#D84545;"></i></H1>
                            <h3 class="paniertop"><i class="bi bi-cart-dash-fill"></i></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
