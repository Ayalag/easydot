@extends('layouts.app')

@section('content')
<div class="container container-userconfirm">
    <div class="container-userconfirm__title pb-3">
        <p>¡hola!</p>
        <p>¿ya tienes una cuenta easy?</p>
    </div>
    <div class="container-check shadow-lg bg-white rounded">
        <div class="row p-2">
            <div class="col">
                <div class="form-check form-check-inline">
                    <label class="form-check-label pr-2" for="inlineRadio1">si!</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="yes_account"
                        value="option1">
                </div>
            </div>
            {{-- <a href="/motor"> --}}
                <div class="col">
                    <div class="form-check form-check-inline">
                        <label class="form-check-label pr-2" for="inlineRadio1">no</label>
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="no_account"
                            value="option1">
                    </div>
                </div>
            {{-- </a> --}}
        </div>
    </div>
    <div class="container-account pt-4">
        <div class="container-account__title">
            <p>¡wow super bien!</p>
            <p class="underline">ingresa a tu cuenta para una <br /> experiencia más <span>easy.</span></p>
        </div>
        <div class="row justify-content-center pt-4">
            <div class="col-md-6 col-sm-4 col-xl-4 col-lg-4">
                <div class="shadow-lg bg-white rounded">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row justify-content-center ">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                --}}
                                <div class="col-md-12">
                                    <input style="background-image: url(public/includes/images/icons8-mail-24.png)"
                                        id="email" type="email"
                                        class="form-control login_mail @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus
                                        placeholder="correo electrónico">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-md-12">
                                    <input style="background-image: url(public/includes/images/icons8-lock-24.png)"
                                        id="password" type="password"
                                        class="form-control login_pass @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="contraseña">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12">
                                    <button type="submit" class="btn-login">
                                        {{ __('ingresar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 nRegister ">
                    <a href="/motor">
                        <p class="underline">continuar sin ingresar</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="new-account pt-4">
        <div class="container-new-account__title">
           <a href="#"><p class="underline mb-2">crear una cuenta</p></a> 
           <a href="#"><p class="underline">continuar sin ingresar</p></a> 
        </div>
    </div>
</div>
@endsection

@section('scripts')

<script>
    /*-------------------------------*/
    /*        User confirm           */
    /*-------------------------------*/

    var cAccount = document.querySelector('.container-account');
    var nAccount = document.querySelector('.new-account');

    document.querySelector('#yes_account').addEventListener('click', function (e) {
       
        $(cAccount).slideDown("slow");
        $(nAccount).slideUp("slow");
    });
    document.querySelector('#no_account').addEventListener('click', function (e) {
        
        $(cAccount).slideUp("slow");
        $(nAccount).slideDown("slow");
    });

</script>

@endsection
