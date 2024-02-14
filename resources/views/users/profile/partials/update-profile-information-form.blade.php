<form method="post" action="{{ route('profile.update') }}" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="row mt-4">
        <div class="profile_edit_profileBloc">
            <div class="profile_edit_profileImg">
                @if ($user->media->count() > 0)
                    <img src="{{ asset('storage/' . $user->media->path) }}" alt="{{ $user->media->nom }}">
                @else
                    <img name="profil" src="{{ asset('users/assets/icons/Vector.png') }}" alt="icon">
                @endif
            </div>

            <div class="profile_edit_button ms-lg-5 ms-3">
                <button type="button" class="btn btn-primary change" onclick="openFileUploader()">
                    <span>
                        Changer la photo de profil</span>
                </button>
            </div>

            <input type="file" name="image" id="hiddenFileInput" style="display: none;"
                onchange="handleFileSelect(event)">
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror

        </div>

    </div>

    <div class="row mt-5 g-3">
        <div class="col-lg-4">
            <div class="profile_edit_inputBloc">
                <label for="nom" class="form-label">Nom</label>
                <x-text-input id="name" name="name" type="text" class="form-control" :value="old('name', $user->name)"
                    required autofocus autocomplete="name" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
        </div>
        <div class="col-lg-4">
            <div class="profile_edit_inputBloc">
                <label for="email" class="form-label">Email</label>
                <x-text-input id="email" name="email" type="email" class="form-control" :value="old('email', $user->email)"
                    required autocomplete="username" />
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                    <div>
                        <p class="text-sm mt-2 text-gray-800">
                            {{ __('Your email address is unverified.') }}

                            <button form="send-verification"
                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>
                        </p>

                        @if (session('status') === 'verification-link-sent')
                            <p class="mt-2 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to your email address.') }}
                            </p>
                        @endif
                    </div>
                @endif
            </div>
        </div>
        <div class="col-lg-4">
            <div class="profile_edit_inputBloc">
                <label for="nom" class="form-label">Téléphone</label>
                <x-text-input id="telephone" name="telephone" type="text" class="form-control" :value="old('telephone', $user->telephone)"
                    required />
                <x-input-error class="mt-2" :messages="$errors->get('telephone')" />
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

        @if (session('status') === 'profile-updated')
            <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                class="text-sm text-gray-600">{{ __('Données modifiées.') }}</p>
        @endif

    </div>
</form>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const changePhotoButton = document.querySelector('.change');
        const inputFile = document.createElement('input');
        inputFile.type = 'file';
        inputFile.accept = 'image/*';
        const hiddenFileInput = document.getElementById('hiddenFileInput'); // Récupérer l'input caché existant
        const profilImage = document.querySelector('img[name="profil"]'); // Sélectionner l'image

        changePhotoButton.addEventListener('click', function() {
            inputFile.click();
        });

        inputFile.addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // Mettre à jour l'attribut src de l'image
                    profilImage.src = e.target.result;
                    // Créer un FileList contenant le fichier sélectionné
                    const fileList = new DataTransfer();
                    fileList.items.add(file);
                    // Assigner le FileList à l'input caché
                    hiddenFileInput.files = fileList.files;
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>
