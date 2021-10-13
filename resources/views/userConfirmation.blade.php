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
            <div class="col">
                <div class="form-check form-check-inline">
                    <label class="form-check-label pr-2" for="inlineRadio1">no</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="no_account"
                        value="option1">
                </div>
            </div>
        </div>
    </div>
    <div class="container-account pt-4">
        <div class="container-account__title">
            <p>¡WOW SÚPER BIEN!</p>
            <p class="underline">ingresa a tu cuenta para una <br /> experiencia más <span>easy.</span></p>
        </div>
        <div class="row justify-content-center pt-4">
            <div class="col-md-6 col-sm-4 col-xl-4 col-lg-4">
                <div class="card shadow-lg bg-white rounded">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row justify-content-center ">
                                {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                --}}
                                <div class="col-md-12">
                                    <input style="background-image: url(public/includes/images/icons8-mail-24.png)"
                                        id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
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
                                {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                --}}
                                <div class="col-md-12">
                                    <input style="background-image: url(public/includes/images/icons8-lock-24.png)"
                                        id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password" placeholder="contraseña">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                    </div>
                </div>
            </div> --}}
            <div class="form-group row mb-0">
                <div class="col-md-12">
                    <button type="submit" class="btn-login">
                        {{ __('ingresar') }}
                    </button>

                    {{-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                    </a>
                    @endif --}}
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="col-12 nRegister ">
        <a href="#">
            <p class="underline">continuar sin ingresar</p>
        </a>
    </div>
</div>
</div>
</div>
</div>
@endsection

@section('scripts')

<script>
                    /*-------------------------------*/
                    /*        User confirm           */
                    /*-------------------------------*/

    document.querySelector('#yes_account').addEventListener('click', function (e) {
        var cAccount = document.querySelector('.container-account');
        $(cAccount).slideDown("slow");
    });

</script>

@endsection
