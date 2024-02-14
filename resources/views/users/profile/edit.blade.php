@extends('users.layouts.layout')

@section('content')
    <div class="container px-lg-5 py-3 px-4">

        <div class="row">
            <p class="profile_edit_titre">
                Profil
            </p>
        </div>

        @include('users.profile.partials.update-profile-information-form')


        <div class="row mt-5">
            <p class="profile_edit_autre">
             Autre informations
            </p>
        </div>

        @include('users.profile.partials.update-another-information-form')

        <div class="row mt-5">
            <p class="profile_edit_autre">
             Sécurité du compte
            </p>
        </div>

        @include('users.profile.partials.update-password-form')

    </div>
@endsection
