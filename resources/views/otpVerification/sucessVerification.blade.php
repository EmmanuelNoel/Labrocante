@extends('layouts.layout')

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/otp.css') }}">
@endsection

@section('content')
    <section class="section-center">
        <div class=" mt-5 container finalVerification">
            <p>
                <span class="verification-text">
                    Vérification réussie !</span> <span>
                    <img src="{{ asset('assets/images/verification.png') }}" alt="">
                </span>
            </p>
            <p class="mt-2 text-center">
                Votre compte a été créé avec succès.
            </p>
            <div class="text-center">
                <img src="{{ asset('assets/images/Rectangle43.png') }}" alt="">
            </div>
            <div class=" text-center">
                <button class="connexionButton">

                      <a class="connexionButtonText" href="{{ route('login') }}">
                        Se connecter
                      </a>
                   
                </button>

            </div>
        </div>
    </section>
@endsection
