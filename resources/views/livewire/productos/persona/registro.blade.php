<div>
    <div class="container-fluid mb-3">
        <div class="col-12 text-center">
            <div class="registro-datos__subtitle">
                <p class="underline">datos personales</p>
            </div>
        </div>
    </div>
    <form>
        <div class="container-fluid container-registro-datos shadow-lg ">
            <div class="p-4">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        {{-- <label for="nombres">nombres</label> --}}
                        <input type="text" class="form-control input__style" id="nombres" placeholder="Nombres"
                            wire:model="nombres">
                        <span class="text-danger">@error('nombres'){{ $message }}@enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            {{-- <label for="apellidos">apellidos</label> --}}
                            <input type="text" class="form-control input__style" id="apellidos" placeholder="Apellidos"
                                wire:model="apellidos">
                            <span class="text-danger">@error('apellidos'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="form-row mb-2">
                            <div class="col-2 form-check form-check-inline">
                                <label class="form-check-label pr-2 easyBlue600" for="inlineRadio1">Cedula</label>
                                <input class="form-check-input" type="radio" name="identificacion" id="cedula" value="option1">
                            </div>
                            <div class="col-3 form-check form-check-inline">
                                <label class="form-check-label mr-2 easyBlue600" for="inlineRadio1">Pasaporte</label>
                                <input class="form-check-input" type="radio" name="identificacion" id="pasaporte"
                                    value="option1">
                            </div>
                            <div class="col-4 easyBlue600">
                                <label for="birthday">Fecha de nacimiento</label>
                            </div>
                            <div class="col-2 text-center">
                                <label class="easyBlue600" for="genero">Género</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-5 form-group">
                                <input type="text" class="form-control input__style" id="identificacion"
                                    placeholder="identificacion">
                            </div>
                            <div class="col-4 d-flex">
                                <input type="number" class="form-control input__style mr-2" id="day" placeholder="dd">
                                <input type="number" class="form-control input__style mr-2" id="month" placeholder="mm">
                                <input type="number" class="form-control input__style" id="year" placeholder="aa">
                            </div>
                            <div class="col-2 form-check text-center">
                                <label class="form-check-label mr-4 h4" for="">M</label>
                                <input class="form-check-input" type="radio" name="genero" id="hombre" value="option1">
                            </div>
                            <div class="col-1 form-check">
                                <label class="form-check-label mr-4 h4" for="">F</label>
                                <input class="form-check-input" type="radio" name="genero" id="mujer" value="option1">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3 text-center">
                                {{-- <label for="eCivil">estado civil</label> --}}
                                <input type="text" class="form-control input__style" id="eCivil" placeholder="Estado Civil">
                            </div>
                            <div class="form-group col-md-5 text-center">
                                {{-- <h3>foto de cédula o pasaporte</h3> --}}
                                <div class="input-group input-file" name="upload">
                                    {{-- <input type="file" class="form-control input__style" placeholder='clic para adjuntar' /> --}}
                                    <label for="file-upload" class="custom-file-upload input__style">
                                        <i class="fas fa-paperclip"></i> clic para adjuntar
                                    </label>
                                    <input id="file-upload" type="file" />
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                {{-- <label for="pais">país de nacimiento</label> --}}
                                <input type="text" class="form-control input__style" id="eCivil"
                                    placeholder="Pais de nacimiento">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="datos-de-contacto">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mb-3 mt-5">
                                <div class="registro-contactos__title">
                                    <p class="underline">datos de contacto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid container-registro-contactos shadow-lg p-4">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="">Dirección</label>
                                <input type="text" class="form-control input__style" id="provincia" placeholder="Provincia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for=""></label>
                                <input type="text" class="form-control input__style " id="distrito" placeholder="Distrito">
                            </div>
                            <div class="form-group col-md-4">
                                <label for=""></label>
                                <input type="text" class="form-control input__style " id="corregimiento"
                                    placeholder="Corregimiento">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for=""></label>
                                <input type="text" class="form-control input__style" id="barrio" placeholder="Barrio / P.H">
                            </div>
                            <div class="form-group col-md-3 col-3">
                                <label for=""></label>
                                <input type="text" class="form-control input__style" id="casa" placeholder="# Casa / Apto.">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                {{-- <label for="">celular</label> --}}
                                <input type="text" class="form-control input__style" id="celular" placeholder="Celular">
                            </div>
                            <div class="form-group col-md-6">
                                {{-- <label for="">correo electrónico</label> --}}
                                <input type="email" class="form-control input__style" id="email"
                                    placeholder="Correo electrónico">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="datos-de-ppp">
                    <div class="container">
                        <div class="row">
                            <div class="col-12 text-center mb-3 mt-5">
                                <div class="registro-contactos__title">
                                    {{-- <p class="underline">datos de contacto</p> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid container-registro-contactos shadow-lg p-4">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                {{-- <label for="">¿Eres una persona <br>
                            politicamente expuesta?</label> --}}
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-5 easyBlue600">
                                            ¿Eres una persona <br>
                                            politicamente expuesta?
                                        </div>
                                        <div class="col-sm-2">
                                            <label class="form-check-label mr-4 h4" for="">Si</label>
                                            <input class="form-check-input" type="radio" name="ppp" id="pppSi" value="option1">
                                        </div>
                                        <div class="col-sm-5">
                                            <label class="form-check-label mr-4 h4" for="">No</label>
                                            <input class="form-check-input" type="radio" name="ppp" id="pppNo" value="option1">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for=""></label>
                                <input type="text" class="form-control input__style" id="barrio" placeholder="Cargo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for=""></label>
                                <input type="text" class="form-control input__style" id="casa" placeholder="Correo electrónico">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="easyBlue600" for="birthday">Fecha de inicio del cargo</label>
                                <div class="col-10 d-flex">
                                    <input type="number" class="form-control input__style mr-2" id="day" placeholder="dd">
                                    <input type="number" class="form-control input__style mr-2" id="month" placeholder="mm">
                                    <input type="number" class="form-control input__style" id="year" placeholder="aa">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="easyBlue600" for="birthday">Fecha de finalización</label>
                                <div class="col-10 d-flex">
                                    <input type="number" class="form-control input__style mr-2" id="day" placeholder="dd">
                                    <input type="number" class="form-control input__style mr-2" id="month" placeholder="mm">
                                    <input type="number" class="form-control input__style" id="year" placeholder="aa">
                                </div>
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
