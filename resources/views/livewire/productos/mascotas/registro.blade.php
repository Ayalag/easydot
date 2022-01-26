<div>
    <div class="container-fluid mb-3">
        <div class="col-12 text-center">
            <div class="registro-datos__title">
                <p class="">¡ya falta muy poco!</p>
            </div>
            <div class="registro-datos__subtitle">
                <p class="underline">datos de la mascota</p>
            </div>
        </div>
    </div>
    <form wire:submit.prevent="submit">
        <div class="container container-registro-datos">
            <div class="container-registros__mascotas p-4 shadow-lg text-center">
                <div class="row pb-4">
                    <div class="col-6">
                        <img src="{{ asset('/public/includes/images/registro/mascotas/perro.png') }}" alt="">
                        <div>
                            <label class="form-check-label m-1 easyBlue600" for="dog">perro</label>
                            <input class="form-check-input m-1" type="radio" name="vet" id="dog" value="option1">
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('/public/includes/images/registro/mascotas/gato.png') }}" alt="">
                        <div>
                            <label class="form-check-label ml-1 mt-2 easyBlue600" for="cat">gato</label>
                            <input class="form-check-input ml-1 mt-2" type="radio" name="vet" id="cat" value="option1">
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col">
                        <input type="text" class="form-control input__style" id="nombre" placeholder="nombre">
                        <span class="text-danger">@error('nombre'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row pb-2">
                        <div class="col">
                            <input type="text" class="form-control input__style" id="raza" placeholder="raza">
                            <span class="text-danger">@error('raza'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="text-left p-2">
                            <span>fecha de nacimiento</span>
                        </div>
                        <div class="
                            row no-gutters pb-2" style="width: 20rem">
                            <div class="col-2 mr-2">
                                <input type="text" class="form-control input__style" id="dd" placeholder="dd">
                                <span class="text-danger">@error('dd'){{ $message }}@enderror</span>
                                </div>
                                <div class="col-2 mr-1">
                                    <input type="text" class="form-control input__style" id="mm" placeholder="mm">
                                    <span class="text-danger">@error('mm'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-2 mr-1">
                                        <input type="text" class="form-control input__style" id="aa" placeholder="aa">
                                        <span class="text-danger">@error('aa'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="col-5 mr-1">
                                            <input type="text" class="form-control input__style" id="sexo" placeholder="sexo">
                                            <span class="text-danger">@error('sexo'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="row pb-2 justify-content-center">
                                            <div class="col-6">
                                                <input type="text" class="form-control input__style" id="valor" placeholder="valor">
                                                <span class="text-danger">@error('valor'){{ $message }}@enderror</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="container-registros__mascotas-veterinario mt-3 ">
                                            <div class="container-registros__mascotas p-4 shadow-lg text-center">
                                                <div class="container-vet__title">
                                                    <p class="underline easyBlue600">clinica veterinaria</p>
                                                </div>
                                                <div class="row pt-2 pb-2">
                                                    <div class="col">
                                                        <input type="text" class="form-control input__style" id="nombreClinica"
                                                            placeholder="nombre de la clinica">
                                                        <span class="text-danger">@error('nombreClinica'){{ $message }}@enderror</span>
                                                        </div>
                                                    </div>
                                                    <div class="row pt-2 pb-2">
                                                        <div class="col">
                                                            <input type="text" class="form-control input__style" id="telefonoClinica"
                                                                placeholder="telefono de la clinica">
                                                            <span class="text-danger">@error('telefonoClinica'){{ $message }}@enderror</span>
                                                            </div>
                                                        </div>
                                                        <div class="row pt-2 pb-2">
                                                            <div class="col">
                                                                <textarea class="input__style" id="w3review" name="w3review" rows="4" cols="33"
                                                                    placeholder="dirección de la clinica"></textarea>
                                                                <span class="text-danger">@error('direccionClinica'){{ $message }}@enderror</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container-registros__mascotas-veterinario mt-3 ">
                                                        <div class="container-registros__mascotas p-4 shadow-lg text-center">
                                                            <div class="container-vet__title">
                                                                <p class="underline easyBlue600">fotos de la mascota</p>
                                                            </div>
                                                            <div class="row pt-2 pb-2">
                                                                <div class="col">
                                                                    <label for="file-upload" class="custom-file-upload input__style">
                                                                        clic para adjuntar
                                                                    </label>
                                                                    <input id="file-upload" type="file" />
                                                                </div>
                                                            </div>
                                                            <div class="row pt-2 pb-2">
                                                                <div class="col">
                                                                    <label for="file-upload" class="custom-file-upload input__style">
                                                                        clic para adjuntar
                                                                    </label>
                                                                    <input id="file-upload" type="file" />
                                                                </div>
                                                            </div>
                                                            <div class="row pt-2 pb-2">
                                                                <div class="col">
                                                                    <label for="file-upload" class="custom-file-upload input__style">
                                                                        clic para adjuntar
                                                                    </label>
                                                                    <input id="file-upload" type="file" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="container pb-5 pt-2 d-flex flex-column text-center">
                                                        <button class="btn_payeasy--load m-auto" id="process">
                                                            <span wire:loading class="spinner-border spinner-border-sm" role="status"
                                                                aria-hidden="true"></span>siguiente</button>
                                                        <div class="pt-4 pb-5 mr-4">
                                                            <a href="javascript:history.back()"><i class="fas fa-arrow-left easyRose800"></i> atrás</a>
                                                        </div>
                                                    </div>
                                            </form>
                                        </div>
