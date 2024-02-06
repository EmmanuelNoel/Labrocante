@extends('layouts.layout')
@section('content')
<section class="panier">
   <div class="container">
    <h1 class="mt-3 fs-3"><b>Récemment Ajoutés</b></h1>
    <div class="line"></div>
    <br>
    <div class="mb-5 row">
        <div class="col-lg-6">
            <div class="card">
                <div class="row">
                  <div class="col-lg-5 image">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image4.png') }}" alt="reussite 1" class="img-fluid rounded-start"></a>
                    </div>
                  </div>
                  <div class="mt-0  col-md-7">
                    <div class="card-body">
                      <div class="mb-4  d-flex">
                        <p><img src="" alt="" class="circle" style="background-color:#AAAAAA;height:30px" >Nom du vendeur</p>
                      </div>
                      <div  class="mb-4 mt-3 d-flex">
                        <p>Nom produit</p>
                        <i class="mt-1 bi bi-heart" style="color:#D84545;margin-left:8%"></i>
                        <p style="color:#FABC01;margin-left:20%">25.000 FCFA</p>
                      </div>
                      <div class=" mt-4 d-flex">
                        <a class="panierbutuon" style="background-color:#D84545;margin-right:17%">Annuler la commande</a>
                        <a class="panierbutuon" href="" style="background-color:#FABC01;">commander</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="row">
                  <div class="col-lg-5 image">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image5.png') }}" alt="reussite 1" class="img-fluid rounded-start"></a>
                    </div>
                  </div>
                  <div class="mt-0  col-md-7">
                    <div class="card-body">
                      <div class="mb-4  d-flex">
                        <p><img src="" alt="" class="circle" style="background-color:#AAAAAA;height:30px" >Nom du vendeur</p>
                      </div>
                      <div  class="mb-4 mt-3 d-flex">
                        <p>Nom produit</p>
                        <i class="mt-1 bi bi-heart" style="color:#D84545;margin-left:8%"></i>
                        <p style="color:#FABC01;margin-left:20%">25.000 FCFA</p>
                      </div>
                      <div class=" mt-4 d-flex">
                        <a class="panierbutuon" style="background-color:#D84545;margin-right:17%">Annuler la commande</a>
                        <a class="panierbutuon" href="" style="background-color:#FABC01;">commander</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="row">
                  <div class="col-lg-5 image">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image1.jpg') }}" alt="reussite 1" class="img-fluid rounded-start"></a>
                    </div>
                  </div>
                  <div class="mt-0  col-md-7">
                    <div class="card-body">
                      <div class="mb-4  d-flex">
                        <p><img src="" alt="" class="circle" style="background-color:#AAAAAA;height:30px" >Nom du vendeur</p>
                      </div>
                      <div  class="mb-4 mt-3 d-flex">
                        <p>Nom produit</p>
                        <i class="mt-1 bi bi-heart" style="color:#D84545;margin-left:8%"></i>
                        <p style="color:#FABC01;margin-left:20%">25.000 FCFA</p>
                      </div>
                      <div class=" mt-4 d-flex">
                        <a class="panierbutuon" style="background-color:#D84545;margin-right:17%">Annuler la commande</a>
                        <a class="panierbutuon" href="" style="background-color:#FABC01;">commander</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="row">
                  <div class="col-lg-5 image">
                    <div class="square">
                        <a href="{{ route('detailproduit') }}"><img src="{{ asset('assets/images/image6.jpg') }}" alt="reussite 1" class="img-fluid rounded-start"></a>
                    </div>
                  </div>
                  <div class="mt-0  col-md-7">
                    <div class="card-body">
                      <div class="mb-4  d-flex">
                        <p><img src="" alt="" class="circle" style="background-color:#AAAAAA;height:30px" >Nom du vendeur</p>
                      </div>
                      <div  class="mb-4 mt-3 d-flex">
                        <p>Nom produit</p>
                        <i class="mt-1 bi bi-heart" style="color:#D84545;margin-left:8%"></i>
                        <p style="color:#FABC01;margin-left:20%">25.000 FCFA</p>
                      </div>
                      <div class=" mt-4 d-flex">
                        <a class="panierbutuon" style="background-color:#D84545;margin-right:17%">Annuler la commande</a>
                        <a class="panierbutuon" href="" style="background-color:#FABC01;">commander</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </div>


</div>
</section>

@endsection
