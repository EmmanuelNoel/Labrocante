@extends('layouts.layout')
@section('content')
    <section id="connexionpage" class="d-flex align-items-center justify-content-center">
        <div class="otpconfirm mt-5  container">
            <div>
                {{-- <h2 style="margin: 0">Vérification</h2> --}}
                {{-- <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group mt-5">
                        <input type="email" class=" form-control @error('email') is-invalid @enderror" id="email"
                            placeholder="Adresse email" name="email" value="{{ old('email') }}">
                    </div>

                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <button type="submit" style="background-color: #FABC01;color:white"
                        class="btn  mt-5">Continuer</button>
                </form> --}}
                <div class="prompt">
                    <p>Entrez le code généré dans votre boîte postale pour vous connecter !</p>
                </div>

                <form action = "{{ route('validate-otp') }}" method="POST">
                    @csrf
                    <div class="otp-wrapper mt-4">
                        <input type="text" name="otp[]" class="otp-input text-[32px] text-center form-input"
                            placeholder="0">
                        <input type="text" name="otp[]" class="otp-input text-[32px] text-center form-input"
                            placeholder="0">
                        <input type="text" name="otp[]" class="otp-input text-[32px] text-center form-input"
                            placeholder="0">
                        <input type="text" name="otp[]" class="otp-input text-[32px] text-center form-input"
                            placeholder="0">
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="d-flex justify-content-center">

                        <p class="text-center mt-4 fs-4">
                            Vous n'avez pas reçu de code otp ? &nbsp;<a href="{{ route('sendOtpCode', ['id' => $id]) }}" style="color: #274060;
                            font-size: 25px;font-weight: 700;line-height: 24px;letter-spacing: 0em;">Renvoyer</a>
                        </p>
                    </div>
                    <button type="submit" class="btn">Envoyer</button>
                </form>

            </div>
        </div>
    </section>



    <script>
        document.querySelectorAll('.otp-input').forEach((element, index, array) => {
            element.addEventListener('input', function(event) {
                let inputValue = event.target.value;
                inputValue = inputValue.replace(/[^0-9]/g, '');
                inputValue = inputValue.slice(0, 1);
                event.target.value = inputValue;

                if (inputValue !== '') {
                    if (index < array.length - 1) {
                        array[index + 1].focus();
                    }
                } else {
                    if (index > 0) {
                        array[index - 1].focus();
                    }
                }
            });

            element.addEventListener('blur', function() {
                if (element.value === '' && index > 0) {
                    array[index - 1].focus();
                }
            });
        });
    </script>
@endsection
