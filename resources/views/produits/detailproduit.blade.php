@extends('layouts.layout')
@section('content')
    <div class="ficheproduit container">
        <section>
            <div class="d-flex">
                <div class="infoproduit">
                    <div class="imgproduits ">
                        <img src="{{ asset('assets/images/image1.jpg') }}" alt="Stage 1">
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
                        <div class=" mt-3 row">
                            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner" role="listbox">
                                    <div class="carousel-item active">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="{{ asset('assets/images/image4.png') }}"
                                                    alt="Image 3" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="{{ asset('assets/images/image4.png') }}"
                                                    alt="Image 3" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="{{ asset('assets/images/image4.png') }}"
                                                    alt="Image 3" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="{{ asset('assets/images/image4.png') }}"
                                                    alt="Image 3" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
                                            <div class="card">
                                                <div class="card-img">
                                                    <img src="{{ asset('assets/images/image4.png') }}"
                                                    alt="Image 3" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="carousel-item">
                                        <div class="col-md-4">
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
                        </div>
                    </div>
                </div>
                <div class=" infodetail ms-auto">
                    <h1>Nom du service</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet provident est, delectus rerum
                        repellat
                        dolor alias maxime pariatur minus veritatis a ex, dolorem perferendis, quibusdam minima.
                        Officia ab
                        nobis modi. Lorem ipsum dolor sit amet consectetur adipisicing elit. A unde maiores modi
                        temporibus
                        id nihil excepturi voluptas, tenetur vero. Quod illo nisi ex quaerat atque, impedit sint
                        harum fugit
                        delectus. Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                    </p>
                    <p class="tarifunique">Tarif unique de</p>
                    <div class="d-flex prix">
                        <h3>25000 FCFA</h3>
                        <div class="d-flex icone ms-auto">
                            <H3><i class="bi bi-heart me-5" style="color: #D84545"></i></H3>
                            <h3><i class="bi bi-cart-dash-fill"></i></h3>
                        </div>
                    </div>
                    <div class="line"></div>
                    <span class="liens"><a href="" >Acheter</a></span>
                </div>
            </div>
        </section>
        <section class="description_service">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hendrerit gravida rutrum quisque non tellus orci. Arcu bibendum at varius vel pharetra vel turpis. Ut etiam sit amet nisl purus in mollis. Diam in arcu cursus euismod quis viverra. Pellentesque sit amet porttitor eget dolor morbi non arcu. Vulputate dignissim suspendisse in est ante. Urna et pharetra pharetra massa massa. Sed elementum tempus egestas sed sed risus. Gravida quis blandit turpis cursus in. Gravida neque convallis a cras semper auctor neque vitae tempus. Convallis tellus id interdum velit laoreet id. Odio morbi quis commodo odio aenean sed adipiscing. Libero id faucibus nisl tincidunt. Massa enim nec dui nunc. Lectus sit amet est placerat. Scelerisque mauris pellentesque pulvinar pellentesque. Quis ipsum suspendisse ultrices gravida dictum fusce. Urna id volutpat lacus laoreet non curabitur gravida.</p>
        </section>
        <section class="apercu">
            <h2>Apercu</h2>
            <img src="{{ asset('assets/images/image7.jpg') }}" alt="Stage 1">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hendrerit gravida rutrum quisque non tellus orci. Arcu bibendum at varius vel pharetra vel turpis. Ut etiam sit amet nisl purus in mollis. Diam in arcu cursus euismod quis viverra. Pellentesque sit amet porttitor eget dolor morbi non arcu. Vulputate dignissim suspendisse in est ante. Urna et pharetra pharetra massa massa. Sed elementum tempus egestas sed sed risus. Gravida quis blandit turpis cursus in. Gravida neque convallis a cras semper auctor neque vitae tempus. Convallis tellus id interdum velit laoreet id. Odio morbi quis commodo odio aenean sed adipiscing. Libero id faucibus nisl tincidunt. Massa enim nec dui nunc. Lectus sit amet est placerat. Scelerisque mauris pellentesque pulvinar pellentesque. Quis ipsum suspendisse ultrices gravida dictum fusce. Urna id volutpat lacus laoreet non curabitur gravida.</p>
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
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Hendrerit gravida rutrum quisque non tellus orci. Arcu bibendum at varius vel pharetra vel turpis. Ut etiam sit amet nisl purus in mollis. Diam in arcu cursus euismod quis viverra. Pellentesque sit amet porttitor eget dolor morbi non arcu. Vulputate dignissim suspendisse in est ante. Urna et pharetra pharetra massa massa. Sed elementum tempus egestas sed sed risus. Gravida quis blandit turpis cursus in. Gravida neque convallis a cras semper auctor neque vitae tempus. Convallis tellus id interdum velit laoreet id. Odio morbi quis commodo odio aenean sed adipiscing. Libero id faucibus nisl tincidunt. Massa enim nec dui nunc. Lectus sit amet est placerat. Scelerisque mauris pellentesque pulvinar pellentesque. Quis ipsum suspendisse ultrices gravida dictum fusce. Urna id volutpat lacus laoreet non curabitur gravida.</p>
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
