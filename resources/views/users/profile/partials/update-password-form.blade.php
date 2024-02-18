<form method="post" action="{{ route('password.update') }}" class="">
    @csrf
    @method('put')
    <div class="row  g-3">
        <div class="col-lg-4">
            <div class="profile_edit_inputBloc">
                <x-input-label for="current_password" :value="__('Current Password')" />
                <x-text-input id="current_password" name="current_password" type="password" class="mt-1 form-control"
                    autocomplete="current-password" />
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="profile_edit_inputBloc">
                <x-input-label for="password" :value="__('New Password')" />
                <x-text-input id="password" name="password" type="password" class="mt-1 form-control"
                    autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="profile_edit_inputBloc">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" name="password_confirmation" type="password"
                    class="mt-1 form-control" autocomplete="new-password" />
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>
        </div>
    </div>
    <div class="row mt-5 ">
        <div class="profile_edit_submit d-flex justify-content-center">

            <button type="submit" class="btn btn-primary">
                <span>
                    Enregistrer
                </span>
            </button>

        </div>

        @if (session('status') === 'password-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif

    </div>
</form>
