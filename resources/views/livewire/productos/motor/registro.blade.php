<div class="">
    <div class="container-fluid mb-3">
        <div class="col-12 text-center">
            <div class="registro-datos__title">
                <p class="">¡ya falta muy poco!</p>
            </div>
            <div class="registro-datos__subtitle">
                <p class="underline">datos personales</p>
            </div>
        </div>
    </div>
    <div class="container container-registro-datos shadow-lg text-center">
        <form action="">
            <div class="col-lg-4 offset-lg-4 pb-3">
                <div class="row justify-content-center pt-5">
                    <input type="text" class="form-control input__style" id="placa" placeholder="Placa"
                        wire:model="placa">
                    <span class="text-danger">@error('placa'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2  pb-3">
                    <div class="row justify-content-center ">
                        <input type="text" class="form-control input__style" id="marca" placeholder="Marca"
                            wire:model="marca">
                        <span class="text-danger">@error('marca'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2  pb-3">
                        <div class="row justify-content-center">
                            <input type="text" class="form-control input__style" id="modelo" placeholder="Modelo"
                                wire:model="modelo">
                            <span class="text-danger">@error('modelo'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-lg-8  offset-lg-2 pb-3">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control input__style" id="ano" placeholder="Año"
                                        wire:model="year">
                                    <span class="text-danger">@error('year'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control input__style" id="ano" placeholder="Color"
                                            wire:model="color">
                                        <span class="text-danger">@error('color'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 offset-lg-2 pb-3">
                                    <div class="row justify-content-center">
                                        <input type="text" class="form-control input__style" id="motorNum" placeholder="Numero de motor"
                                            wire:model="motorNum">
                                        <span class="text-danger">@error('motorNum'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 offset-lg-2  pb-3">
                                        <div class="row justify-content-center">
                                            <input type="text" class="form-control input__style" id="chasisNum" placeholder="Numero de chasis"
                                                wire:model="chasisNum">
                                            <span class="text-danger">@error('chasisNum'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 offset-lg-3 pb-5 input-group input-file" name="upload">
                                            <span class="pb-1 text-center">Foto de registro vehicular</span>
                                            <div class="row justify-content-center">
                                                <label for="file-upload" class="custom-file-upload input__style">
                                                    <i class="fas fa-paperclip"></i> clic para adjuntar
                                                </label>
                                                <input id="file-upload" type="file" />
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="container pb-5 pt-2 d-flex flex-column text-center">
                                    <x-btn-main class='fntw-600 mt-3'>
                                        <x-a-link class="slider_btn__comprar" link='/autos'>
                                            siguiente
                                        </x-a-link>
                                    </x-btn-main>

                                    <div class="pt-4 pb-5 mr-4">
                                        <a href="javascript:history.back()"><i class="fas fa-arrow-left easyRose800"></i> atrás</a>
                                    </div>
                                </div>
                            </div>
