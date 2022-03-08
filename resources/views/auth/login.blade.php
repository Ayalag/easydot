<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Easydot</title>

    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <style>
        @import url(https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&display=swap);

        body {
            background-color: white;
            font-family: "Montserrat", sans-serif;
            overflow: hidden;
        }

        .underline::before {
            content: "_";
            color: #ff0180;
        }

        .header-container__tittle {
            color: #033777;
            font-size: 2rem;
            font-weight: 800;
        }

        .header-container__paragrpah1{
            color: #033777;
            font-size: 1.2rem;
        }

        .header-container__paragrpah2{
            font-size: 1.5rem;
            color: #033777;
        }


        /* .container-userconfirm {
            margin: 50px auto;
            text-align: center;
            color: var(--easyBlue);
            font-size: 18px;
            height: 100vh; */
        /* } */

        /* .container-userconfirm__title>p:first-child {
            font-size: 25px;
        }

        .container-userconfirm__title>p:first-child,
        .container-account__title>p:first-child {
            font-weight: 800;
            margin-bottom: 5px;
        }

        .container-new-account__title a,
        .nRegister a {
            text-decoration: none;
            color: inherit;
        }

        .container-check {
            width: 30%;
            margin: auto;
        } */

        .login_mail,
        .login_pass {
            background-position: 10px center;
            background-repeat: no-repeat;
            border: 1px solid #ccc;
            color: #595959;
            -webkit-border-radius: 4px;
            -moz-border-radius: 4px;
            -ms-border-radius: 4px;
            -o-border-radius: 4px;
            border-radius: 4px;

            padding: 10px 5px 10px 20px;
            text-indent: 20px;

            -webkit-transition: all 0.2s;
            -moz-transition: all 2s;
            transition: all 0.2s;
        }

        button[class="btn-login"] {
            font-size: 15px;
            background-color: #ff0180;
            border-radius: 5px;
            border-style: none;
            /* box-shadow: #38549D 0 5px 0 0; */
            color: #ffffff;
            outline-style: none;
            padding: 5px 30px;
        }

        .nRegister {
            margin-top: 8px;
            font-size: 10px;
            text-align: end;
            text-decoration: none;
            font-size: 0.8rem;
            font-weight: 800;
            color: #033777;
        }

        /* @media screen and (max-width: 599px) {
            .container-check {
                width: 100%;
            }
        } */

    </style>

</head>

</head>

<body>
    <div class="container-account__login pt-4">
        <div class="container header-container text-center">
            <div class="header-container__tittle">
                ¡Hola!
            </div>
            <div class="header-container__paragrpah1 underline text-center">
                ingresa a tu cuenta para una <br>
                experiencia más easy.
            </div>
            <div class="header-container__paragrpah2 text-center pt-5">
                Iniciar sesión
            </div>
        </div>
        <div class="row justify-content-center pt-4">
            <div class="col-xs-2 col-sm-6 col-md-6 col-lg-4">
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
                                        class="form-control login_mail @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
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
                                        class="form-control login_pass @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password"
                                        placeholder="contraseña">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn-login">
                                        ingresar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-12 nRegister ">
                    <a href="{{ route('register') }}">
                        <p class="underline">crear una cuenta</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
</body>

<script src="{{ url('js/app.js') }}"></script>

</html>
