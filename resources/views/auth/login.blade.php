{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.layout')
@section('content')
    <section id="connexionpage" class="d-flex align-items-center justify-content-center">
        <div class="usernameconfirm container">
            <div>
                <h2 style="margin: 0">Connexion</h2>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mt-5">
                        <input type="email" class=" form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Adresse email" name="email" :value="old('email')" required autofocus
                            autocomplete="username">
                    </div>

                    <x-input-error :messages="$errors->get('email')" class="mt-2" />

                    <div class="form-group mt-4">
                        <input type="password" class=" form-control @error('password') is-invalid @enderror" id="password"
                            placeholder="Mot de passe" name="password" value="{{ old('password') }}" required
                            autocomplete="current-password">
                    </div>

                    <x-input-error :messages="$errors->get('password')" class="mt-2" />


                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi ') }}</span>
                        </label>
                    </div>

                    <div class="form-check mt-4">
                        <p>Vous n'avez pas un compte? <a href="{{ route('register') }}">S'inscrire</a></p>
                    </div>
                    <button type="submit" class="btn mt-2 mb-3">Continuer</button>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
