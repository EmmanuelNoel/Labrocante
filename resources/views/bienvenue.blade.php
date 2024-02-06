@extends('layouts.layout')
@section('content')
    <section id="connexionpage" class="d-flex align-items-center justify-content-center">
        <div class="connexion container">
            <div>
                <h2>Bienvenue!</h2>
                <br>
                <p><a href="#"><img src="{{ asset('assets/socialmedia/facebook.png') }}" alt="" width="35"> Continuer avec facebook</a></p>
                <br>
                <p><a href=""><img src="{{ asset('assets/socialmedia/google.png') }}" alt="" width="30">&nbsp;Continuer avec google</a></p>
                <br>
                <p><a href=""><img src="{{ asset('assets/socialmedia/apple.png') }}" alt="" width="30">&nbsp;Continuer avec Apple</a></p>
                <br>
            </div>
            <h5> S'inscrire avec <a href="{{ route('register') }}">e-mail</a></h5>
            <h5>vous avez deja un compte? <a href="{{ route('login') }}">Se connecter</a></h5>
        </div>
    </section>

@endsection
