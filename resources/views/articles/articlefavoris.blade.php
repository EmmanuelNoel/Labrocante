@extends('layouts.layout')
@section('content')
<section>
        <div class="produits">
            <div class="container">
                <h1><b>Articles Favoris</b></h1>
                <div class="line"></div>
                <br>
                <div class="grid-container ">
                    <div class="produit">
                        <div class="square">
                            <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image5.png') }}" alt="reussite 1"></a>
                        </div>
                        <div class="d-flex justify-content-between  info">
                            <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill" style="color: #D84545"></i></h1>
                            <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                    class="bi bi-cart-dash-fill"></i></h3>
                            <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                    </div>
                    <div class="produit">
                        <div class="square">
                             <a href=""><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1"></a>
                        </div>
                        <div class="d-flex justify-content-between  info">
                            <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill" style="color: #D84545"></i></h1>
                            <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                    class="bi bi-cart-dash-fill"></i></h3>
                            <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                    </div>
                    <div class="produit">
                        <div class="square">
                             <a href=""><img src="{{ asset('assets/images/image7.jpg') }}" alt="reussite 1"></a>
                        </div>
                        <div class="d-flex justify-content-between  info">
                            <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill" style="color: #D84545"></i></h1>
                            <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                    class="bi bi-cart-dash-fill"></i></h3>
                            <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                    </div>
                    <div class="produit">
                        <div class="square">
                             <a href=""><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1"></a>
                        </div>
                        <div class="d-flex justify-content-between  info">
                            <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill" style="color: #D84545"></i></h1>
                            <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                    class="bi bi-cart-dash-fill"></i></h3>
                            <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                    </div>
                    <div class="produit">
                        <div class="square">
                             <a href=""><img src="{{ asset('assets/images/image10.png') }}" alt="reussite 1"></a>
                        </div>
                        <div class="d-flex justify-content-between  info">
                            <h1>Nom produit &nbsp;&nbsp;&nbsp;&nbsp;<i class="bi bi-heart-fill" style="color: #D84545"></i></h1>
                            <h3 style="font-size:25px;color:#FABC01;font-weight:bold">25000 FCFA<i
                                    class="bi bi-cart-dash-fill"></i></h3>
                            <h1><img src="" alt="" class="circle" style="background-color:#AAAAAA"> Nom du
                                vendeur</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
