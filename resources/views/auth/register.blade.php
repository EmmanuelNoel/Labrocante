

@extends('layouts.layout')
@section('content')
    <section id="connexionpage" class="d-flex align-items-center justify-content-center">
        <div class="usernameconfirm container mb-3">
            <div>
                <h2 style="margin: 0">Inscription</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-group mt-4">
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" id="name"
                            placeholder="Nom" name="name" :value="old('name')" required autofocus autocomplete="name">
                    </div>

                    <x-input-error :messages="$errors->get('name')" class="mt-2" />

                    <div class="form-group mt-4">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Adresse email" name="email" :value="old('email')" required
                            autocomplete="username">
                    </div>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <div class="form-group mt-4">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="Mot de passe" name="password" value="{{ old('password') }}" required
                            autocomplete="new-password">
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />

                    <div class="form-group mt-4">
                        <input type="password" class="form-control @error('ppassword_confirmation') is-invalid @enderror"
                            id="password_confirmation" placeholder="Confirmation mot de passe" name="password_confirmation"
                            value="{{ old('password_confirmation') }}" required autocomplete="new-password">
                    </div>

                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                    {{--
                    <input type="checkbox" class="form-check-input" id="exampleCheck" name="remember">
                    <label class="form-check-label" for="exampleCheck">
                        Se souvenir de moi </label>
            </div> --}}
                    <div class="form-check mt-4">
                        <p>Vous avez un compte ? <a href="{{ route('login') }}"> Se connecter</a></p>
                    </div>
                    <button type="submit" class="btn mb-3">Continuer</button>
                </form>
            </div>
        </div>
    </section>
@endsection
