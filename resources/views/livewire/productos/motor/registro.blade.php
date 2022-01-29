<div>
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
    <div wire:ignore.self class="container container-registro-datos shadow-lg text-center">
        <form wire:submit.prevent="submit">
            <div class="col-lg-4 offset-lg-4 pb-3">
                <div class="row justify-content-center pt-5">
                    <input type="text" class="form-control input__style" id="placa" placeholder="placa"
                        wire:model="placa" required>
                    <span class="text-danger">@error('placa'){{ $message }}@enderror</span>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2  pb-3">
                    <div class="row justify-content-center ">
                        <input type="text" class="form-control input__style" id="marca" placeholder="marca"
                            wire:model="marca" required>
                        <span class="text-danger">@error('marca'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2  pb-3">
                        <div class="row justify-content-center">
                            <input type="text" class="form-control input__style" id="modelo" placeholder="modelo"
                                wire:model="modelo" required>
                            <span class="text-danger">@error('modelo'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-lg-8  offset-lg-2 pb-3">
                            <div class="row">
                                <div class="col-4">
                                    <input type="text" class="form-control input__style" id="ano" placeholder="año"
                                        wire:model="year" required>
                                    <span class="text-danger">@error('year'){{ $message }}@enderror</span>
                                    </div>
                                    <div class="col-8">
                                        <input type="text" class="form-control input__style" id="ano" placeholder="color"
                                            wire:model="color" required>
                                        <span class="text-danger">@error('color'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 offset-lg-2 pb-3">
                                    <div class="row justify-content-center">
                                        <input type="text" class="form-control input__style" id="motorNum" placeholder="numero de motor"
                                            wire:model="motorNum" required>
                                        <span class="text-danger">@error('motorNum'){{ $message }}@enderror</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 offset-lg-2  pb-3">
                                        <div class="row justify-content-center">
                                            <input type="text" class="form-control input__style" id="chasisNum" placeholder="numero de chasis"
                                                wire:model="chasisNum" required>
                                            <span class="text-danger">@error('chasisNum'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 offset-lg-3 pb-5 input-group input-file" name="upload">
                                            <span class="pb-1 text-center">Foto de registro vehicular</span>
                                            <div class="row justify-content-center">
                                                <label for="file-upload" class="custom-file-upload input__style">
                                                    <i class="fas fa-paperclip"></i> clic para adjuntar
                                                </label>
                                                <input class="@error('file') is invalid @enderror" id="file-upload" type="file" wire:model="file"
                                                    required />
                                                {{-- <span class="text-danger">@error('file') {{ $message }} @enderror</span> --}}
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
