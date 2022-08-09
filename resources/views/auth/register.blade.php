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
            font-size: 1.5rem;
            font-weight: 800;
        }

        .header-container__tittle2 {
            color: #033777 !important;
            font-size: 1.5rem;
        }

        .title_user_creation {
            color: #033777;
            font-size: 1.5rem;
            font-weight: 800;
            padding-bottom: 15px;
        }

        .disclaimer{
            color: #033777;
            font-size: 0.8rem;
            font-weight: 600;
            margin: 8px;
            line-height: normal;
        }

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

        input[type="text"]::placeholder,
        input[type="email"]::placeholder, 
        input[type="password"]::placeholder {
            /* Firefox, Chrome, Opera */
            text-align: center;
        }

        .input__style {
            background-color: #eff1f4;
            border: none;
            border-radius: 8px;
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
    <div class="container-account__register pt-4">
        <div class="container header-container text-center">
            <div class="header-container__tittle">
                Nos encanta que formes parte de
            </div>
            <div class="header-container__tittle2">
                <a href="{{ route('home') }}"> <span style="color: #ff0180">easydot</span><span style="color:#009ee2">.</span>com.pa</a>  
            </div>
            {{-- <div class="header-container__paragrpah1 underline text-center">
                ingresa a tu cuenta para una <br>
                experiencia más easy.
            </div>
            <div class="header-container__paragrpah2 text-center pt-5">
                Iniciar sesión
            </div> --}}
        </div>
        <div class="row justify-content-center pt-4">
            <div class="col-xs-2 col-sm-6 col-md-6 col-lg-4">
                <div class="shadow-lg bg-white rounded">
                    <div class="card-body">
                        <div class="title_user_creation text-center">
                            <span class="underline">crear usuario</span>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group row justify-content-center ">
                                <div class="col-12">
                                    <input id="name" type="text"
                                        class="form-control input__style @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Nombres">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row justify-content-center ">
                                <div class="col-12">
                                    <input id="lastname" type="text"
                                        class="form-control input__style @error('lastname') is-invalid @enderror"
                                        name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus
                                        placeholder="Apellidos">

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row justify-content-center ">
                                <div class="col-12">
                                    <input id="usuario" type="text"
                                        class="form-control input__style @error('usuario') is-invalid @enderror"
                                        name="usuario" value="{{ old('usuario') }}" required autocomplete="usuario" autofocus
                                        placeholder="Usuario"  maxlength="20">

                                    @error('usuario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row justify-content-center">
                                <div class="col-12">
                                    <input id="email" type="email"
                                        class="form-control input__style @error('email')  is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Correo electrónico">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password" type="password"
                                        class="form-control input__style @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="new-password" placeholder="Contraseña">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <input id="password-confirm" type="password" class="form-control input__style"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Repetir contraseña">
                                </div>
                            </div>
                            <div class="disclaimer text-center">
                                <span>Creando esta cuenta aceptas los <a href="{{ route('terminos-y-condiciones') }}"  style="color:#009ee2">Términos y condiciones</a><br>
                                de <span style="color: #ff0180">easy</span>. así como la política de <a style="color:#009ee2" href="/terminos-y-condiciones#two">Protección de datos</a>.</span>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn-login">
                                        crear
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ url('js/app.js') }}"></script>

</html>



