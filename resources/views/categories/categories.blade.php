@extends('layouts.layout')
@section('content')
    <div class="bg-image">
        <div id="intro-example">
            <img src="{{ asset('assets/images/Rectangle19.png') }}" alt="">
        </div>
        <div class="mask p-5 text-center" style="background-color: rgba(0, 0, 0, 0.7);">
            <div class="d-flex">
                <div class="text-white">
                    <h1 class="mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h1>
                    <a href="" class="liens">Vendre un article</a>
                </div>
            </div>
        </div>
    </div>
    <div class="produits container">
            <h1><b>Catégories</b></h1>
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
            <div class="grid-container ">
                <div class="produit">
                    <div class="contentproduit">
                        <div class="square">
                            <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
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
                            <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
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
                            <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
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
            <div class="grid-container ">
                <div class="produit">
                    <div class="contentproduit">
                        <div class="square">
                            <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image5.png') }}" alt="reussite 1"></a>
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
                            <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
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
    <div class="seemore">
        <a href="" class="liens">Voir plus</a>
    </div>
    @include('partials.footer')
@endsection
