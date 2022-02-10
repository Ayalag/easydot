<div>

    <form wire:submit.prevent="submit">

        @if ($currentStep == 1)
            <div class="container-fluid stepper">
                <div class="row mt-5 justify-content-end">
                    {{-- <div class="col-3"></div> --}}
                    <div class="col-12 text-center">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active"></li>
                            <li class="active"></li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container-fluid p-3">
                <div class="col-12 text-center">
                    <div class="registro-datos__subtitle">
                        <p class="underline">datos personales</p>
                    </div>
                </div>
            </div>
            {{-- STEP 1 REGISTRO DE USUARIO --}}
            <div class="container-fluid container-registro-datos shadow ">
                <div class="p-4">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{-- <label for="nombres">nombres</label> --}}
                            <input type="text" class="form-control input__style @if ($errors->has('nombres')) border border-danger @endif" id="nombres"
                                placeholder="Nombres" wire:model.defer="nombres">
                        </div>
                        <div class="form-group col-md-6">
                            {{-- <label for="apellidos">apellidos</label> --}}
                            <input type="text" class="form-control input__style @if ($errors->has('apellidos')) border border-danger @endif" id="apellidos"
                                placeholder="Apellidos" wire:model.defer="apellidos">
                        </div>
                    </div>
                    <div class="form-row mb-2">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                            <div class="form-check-inline ">
                                <label class="form-check-label pr-2 easyBlue600 ml-2 mb-2 @if ($errors->has('typeId')) text-danger @endif"
                                    for="inlineRadio1">Cédula</label>
                                <input wire:model.defer="typeId" class="form-check-input mb-2" type="radio"
                                    name="identificacion" id="cedula" value="cedula" required>
                                <label class="form-check-label mr-2 easyBlue600 mb-2 @if ($errors->has('typeId')) text-danger @endif"
                                    for="inlineRadio1">Pasaporte</label>
                                <input wire:model.defer="typeId" class="form-check-input mb-2" type="radio"
                                    name="identificacion" id="pasaporte" value="pasaporte" required>
                            </div>
                            <div class="form-group">
                                <input wire:model.defer="identificacion" type="text"
                                    class="form-control input__style @if ($errors->has('identificacion')) border border-danger @endif " id="identificacion"
                                    placeholder="identificacion">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4">
                            <div class="form-check-inline ">
                                <label class="easyBlue600 pb-2">Fecha de nacimiento</label>
                            </div>
                            <div class="form-group">
                                <div class="d-flex">
                                    <select wire:model.defer="dia"
                                        class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-control input__style mr-2 @if ($errors->has('dia')) border border-danger @endif"
                                        id="dd" placeholder="dd">
                                        <option value="" selected>dd</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select wire:model.defer="mes"
                                        class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-control input__style mr-2  @if ($errors->has('mes')) border border-danger @endif"
                                        id="mm" placeholder="mm">
                                        <option value="" selected>mm</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                    <select wire:model.defer="año"
                                        class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-control input__style mr-2  @if ($errors->has('año')) border border-danger @endif"
                                        id="aa" placeholder="aa">
                                        <option value="" selected>año</option>
                                        <option value="1922">1922</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4 text-center">
                            <div class="form-check-inline ">
                                <label class="easyBlue600 pb-3">Genero</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label mr-4 h4" for="">M</label>
                                <input wire:model.defer="genero" class="form-check-input" type="radio" name="genero"
                                    id="hombre" value="hombre">
                                <label class="form-check-label mr-4 h4" for="">F</label>
                                <input wire:model.defer="genero" class="form-check-input" type="radio" name="genero"
                                    id="mujer" value="mujer">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3 text-center">
                            {{-- <label for="eCivil">estado civil</label> --}}
                            <input wire:model.defer="eCivil" type="text"
                                class="form-control input__style @if ($errors->has('eCivil')) border border-danger @endif" id="eCivil"
                                placeholder="Estado Civil">
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
                            <input wire:model.defer="pais" type="text"
                                class="form-control input__style @if ($errors->has('eCivil')) border border-danger @endif" id="pais"
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
                <div class="container-fluid container-registro-contactos shadow p-3">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="">Dirección</label>
                            <select wire:model="selectedProvincia"
                                class="form-control input__style @if ($errors->has('selectedProvincia')) border border-danger @endif" data-live-search="true"
                                title="Provincia" name="provincia" id="provincia" required>
                                <option value="" selected>Provincia</option>
                                @foreach ($provincia as $p)
                                    <option value="{{ $p->id_Provincia }}">{{ $p->Nombre_Provincia }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""></label>
                            <select wire:model="selectedDistrito" class="form-control input__style "
                                data-live-search="true" title="Distrito" name="distrito" id="distrito" required>
                                <option value="" selected>Distrito</option>
                                @if (!is_null($distrito))
                                    @foreach ($distrito as $d)
                                        <option value="{{ $d->id_distrito }}">{{ $d->nombre_distrito }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for=""></label>
                            <select wire:model.defer="selectedCorregimiento" class="form-control input__style "
                                data-live-search="true" title="Corregimiento" name="corregimiento" id="corregimiento"
                                required>
                                <option value="" selected>Corregimiento</option>
                                @if (!is_null($corregimiento))
                                    @foreach ($corregimiento as $c)
                                        <option value="{{ $c->id_corregimiento }}">{{ $c->nombre_corregimiento }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            {{-- <label for=""></label> --}}
                            <input wire:model.defer="barrio" type="text"
                                class="form-control input__style @if ($errors->has('barrio')) border border-danger @endif" id="barrio"
                                placeholder="Barrio / P.H">
                        </div>
                        <div class="form-group col-md-6">
                            {{-- <label for=""></label> --}}
                            <input wire:model.defer="casa" type="text"
                                class="form-control input__style @if ($errors->has('casa')) border border-danger @endif" id="casa"
                                placeholder="# Casa / Apto.">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            {{-- <label for="">celular</label> --}}
                            <input wire:model.defer="celular" type="tel"
                                class="form-control input__style @if ($errors->has('celular')) border border-danger @endif" id="celular"
                                placeholder="Celular">
                        </div>
                        <div class="form-group col-md-6">
                            {{-- <label for="">correo electrónico</label> --}}
                            <input wire:model.defer="contactMail" type="email"
                                class="form-control input__style @if ($errors->has('contactMail')) border border-danger @endif" id="email"
                                placeholder="Correo electrónico">
                        </div>
                    </div>
                </div>
            </div>
            <div class="datos-de-ppp pt-4">
                {{-- <div class="container">
                    <div class="row">
                        <div class="col-12 text-center mb-3 mt-5">
                            <div class="registro-contactos__title">
                                <p class="underline">datos de contacto</p>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="container-fluid container-registro-contactos shadow pt-4">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <div class="container">
                                <div class="row">
                                    {{-- <div class="col-sm-5 easyBlue600 @if ($errors->has('ppe'))  text-danger @endif"">
                                        ¿Eres una persona <br>
                                        politicamente expuesta?
                                    </div> --}}

                                    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4 text-center">
                                        <div class="form-check-inline ">
                                            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-12 easyBlue600 @if ($errors->has('ppe'))  text-danger @endif"">
                                                ¿Eres una persona <br>
                                                politicamente expuesta?
                                            </div>
                                            <label class="form-check-label mr-1 h4" for="">Si</label>
                                                <input wire:model.defer="ppe" class="form-check-input" type="radio"
                                                    name="ppe" id="ppeSi" value="ppeSi" wire:click="$set('show',true)">
                                                <label class="form-check-label mr-1 h4" for="">No</label>
                                                <input wire:model.defer="ppe" class="form-check-input" type="radio"
                                                    name="ppe" id="ppeNo" value="ppeNo" wire:click="$set('show',false)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($show)
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for=""></label>
                                    <input wire:model.defer="ppecargo" type="text"
                                        class="form-control input__style @if ($errors->has('ppecargo')) border border-danger @endif" id="cargo"
                                        placeholder="Cargo">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for=""></label>
                                    <input wire:model.defer="ppemail" type="text"
                                        class="form-control input__style @if ($errors->has('ppemail')) border border-danger @endif" id="casa"
                                        placeholder="Correo electrónico">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label class="easyBlue600">Fecha de inicio del cargo</label>
                                    <div class="col-10 d-flex">
                                        <select wire:model.defer="ppe_inicio_dia"
                                            class="form-control input__style mr-2 @if ($errors->has('ppe_inicio_dia')) border border-danger @endif" id="dd"
                                            placeholder="dd">
                                            <option value="" selected>dd</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <select wire:model.defer="ppe_inicio_mes"
                                            class="form-control input__style mr-2  @if ($errors->has('ppe_inicio_mes')) border border-danger @endif" id="mm"
                                            placeholder="mm">
                                            <option value="" selected>mm</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        <select wire:model.defer="ppe_inicio_año"
                                            class="form-control input__style mr-2  @if ($errors->has('ppe_inicio_año')) border border-danger @endif" id="aa"
                                            placeholder="aa">
                                            <option value="" selected>aa</option>
                                            <option value="1922">1922</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="easyBlue600">Fecha de finalización</label>
                                    <div class="col-10 d-flex">
                                        <select wire:model.defer="ppe_final_dia"
                                            class="form-control input__style mr-2 @if ($errors->has('ppe_final_dia')) border border-danger @endif" id="dd"
                                            placeholder="dd">
                                            <option value="" selected>dd</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                            <option value="13">13</option>
                                            <option value="14">14</option>
                                            <option value="15">15</option>
                                            <option value="16">16</option>
                                            <option value="17">17</option>
                                            <option value="18">18</option>
                                            <option value="19">19</option>
                                            <option value="20">20</option>
                                            <option value="21">21</option>
                                            <option value="22">22</option>
                                            <option value="23">23</option>
                                            <option value="24">24</option>
                                            <option value="25">25</option>
                                            <option value="26">26</option>
                                            <option value="27">27</option>
                                            <option value="28">28</option>
                                            <option value="29">29</option>
                                            <option value="30">30</option>
                                            <option value="31">31</option>
                                        </select>
                                        <select wire:model.defer="ppe_final_mes"
                                            class="form-control input__style mr-2  @if ($errors->has('ppe_final_mes')) border border-danger @endif" id="mm"
                                            placeholder="mm">
                                            <option value="" selected>mm</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                        <select wire:model.defer="ppe_final_año"
                                            class="form-control input__style mr-2  @if ($errors->has('ppe_final_año')) border border-danger @endif" id="aa"
                                            placeholder="aa">
                                            <option value="" selected>aa</option>
                                            <option value="1922">1922</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="container pb-5 pt-2 d-flex flex-column text-center">
                    <button wire:click="increaseStep()" type="button" class="btn_payeasy--load m-auto" id="process">
                        <span wire:loading class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true"></span>siguiente</button>
                    <div class="pt-4 pb-5 mr-4">
                        <a href="javascript:history.back()"><i class="fas fa-arrow-left easyRose800"></i> atrás</a>
                    </div>
                </div>
        @endif
        {{-- STEP 2 --}}
        @if ($currentStep == 2)
            <div class="container-fluid stepper">
                <div class="row mt-5 justify-content-end">
                    {{-- <div class="col-3"></div> --}}
                    <div class="col-12 text-center">
                        <!-- progressbar -->
                        <ul id="progressbar">
                            <li class="active"></li>
                            <li class="active"></li>
                            <li class="semiactive"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-registo__datos-header  mb-3">
                <div class="col-12 text-center">
                    <div class="registro-datos__title">
                        <p class="">¡ya falta muy poco!</p>
                    </div>
                    <div class="registro-datos__subtitle">
                        <p class="underline">datos del producto</p>
                    </div>
                </div>
            </div>
            <div class="container container-registro-datos shadow-lg text-center">
                <div class="col-lg-4 offset-lg-4 pb-3">
                    <div class="row justify-content-center pt-5">
                        <input type="text" class="form-control input__style" id="placa" placeholder="placa"
                            wire:model.defer="placa" maxlength="6" pattern="[a-zA-Z0-9]+">
                        <span class="text-danger">@error('placa'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="col-lg-8 offset-lg-2  pb-3">
                        <div class="row justify-content-center ">
                            <input type="text" class="form-control input__style" id="marca" placeholder="marca"
                                wire:model.defer="marca">
                            <span class="text-danger">@error('marca'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-lg-8 offset-lg-2  pb-3">
                            <div class="row justify-content-center">
                                <input type="text" class="form-control input__style" id="modelo" placeholder="modelo"
                                    wire:model.defer="modelo">
                                <span class="text-danger">@error('modelo'){{ $message }}@enderror</span>
                                </div>
                            </div>
                            <div class="col-lg-8  offset-lg-2 pb-3">
                                <div class="row">
                                    <div class="col-4">
                                        <input type="text" class="form-control input__style" id="ano" placeholder="año"
                                            wire:model.defer="year">
                                        <span class="text-danger">@error('year'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control input__style" id="ano" placeholder="color"
                                                wire:model.defer="color">
                                            <span class="text-danger">@error('color'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 offset-lg-2 pb-3">
                                        <div class="row justify-content-center">
                                            <input type="text" class="form-control input__style" id="motorNum"
                                                placeholder="numero de motor" wire:model.defer="motorNum">
                                            <span class="text-danger">@error('motorNum'){{ $message }}@enderror</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 offset-lg-2  pb-3">
                                            <div class="row justify-content-center">
                                                <input type="text" class="form-control input__style" id="chasisNum"
                                                    placeholder="numero de chasis" wire:model.defer="chasisNum">
                                                <span class="text-danger">@error('chasisNum'){{ $message }}@enderror</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 offset-lg-3 pb-5 input-group input-file" name="upload">
                                                <span class="pb-1 text-center">Foto de registro vehicular</span>
                                                <div class="row justify-content-center">
                                                    <label for="file-upload" class="custom-file-upload input__style">
                                                        <i class="fas fa-paperclip"></i> clic para adjuntar
                                                    </label>
                                                    <input class="@error('file') is invalid @enderror" id="file-upload" type="file"
                                                        wire:model.defer="file" />
                                                </div>
                                            </div>

                                        </div>
                                        <div class="container pb-5 pt-2 d-flex flex-column text-center">
                                            <button type="submit" class="btn_payeasy--load m-auto" id="process">
                                                <span wire:loading class="spinner-border spinner-border-sm" role="status"
                                                    aria-hidden="true"></span>siguiente</button>
                                            <div class="pt-4 pb-5 mr-4">
                                                <a href="javascript:history.back()"><i class="fas fa-arrow-left easyRose800"></i> atrás</a>
                                            </div>
                                        </div>
                                    @endif
                                </form>
                            </div>
























































                            {{-- <div>
<div class="container-fluid container-registo__datos-header  mb-3">
<div class="col-12 text-center">
<div class="registro-datos__title">
<p class="">¡ya falta muy poco!</p>
</div>
<div class="registro-datos__subtitle">
<p class="underline">datos del producto</p>
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
</div> --}}
