<div>
    <form wire:submit.prevent="register">
        {{-- STEP 1 --}}

        @if ($currentStep == 1)

        <div class="step-one">
            <div class="card">
                <div class="card-header">
                    <x-multi-step-list />
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="submenu--item" for="">Nombres</label>
                                <input type="text" class="form-control" placeholder="nombres" wire:model="nombres">
                                <span class="text-danger">@error('nombres'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="submenu--item" for="">Apellidos</label>
                                <input type="text" class="form-control" placeholder="apellidos" wire:model="apellidos">
                                <span class="text-danger">@error('apellidos'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-2 ">
                            <label class="submenu--item" for="">Tipo de identificación</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" value="cedula" wire:model="typeId"
                                    wire:click="$set('show',false)">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Cédula
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" value="pasaporte " wire:model="typeId"
                                    wire:click="$set('show',true)">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Pasaporte
                                </label>
                            </div>
                            <span class="text-danger">@error('typeId'){{ $message }}@enderror</span>
                        </div>
                        @if($show)
                        <div class="col-md-4 mb-2 ">
                            <div class="form-group">
                                <label class="submenu--item" for="">Nacionalidad</label>
                                <select class="form-control" wire:model="pais">
                                    <option value="" selected>País</option>
                                    <option value="Panama">Panamá</option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Nivaragua">Rep. Dominicana</option>
                                    <option value="Nigeria">El Salvador</option>
                                    <option value="Phillipines">Phillipines</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                                <span class="text-danger">@error('pais'){{ $message }}@enderror</span>
                            </div>
                        </div>  
                        @else
                        <div class="col-md-3 mb-2 "></div>  
                        @endif
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="submenu--item" for="">Identificacion</label>
                                <input type="text" class="form-control" placeholder="00-000-0000"
                                    wire:model="identificacion">
                                <span class="text-danger">@error('identificacion'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label class="submenu--item" for="">Género</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="genero1" value="hombre"
                                    wire:model="genero">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Hombre
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="genero" id="genero2" value="mujer "
                                    wire:model="genero">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Mujer
                                </label>
                            </div>
                            <span class="text-danger">@error('genero'){{ $message }}@enderror</span>
                        </div>
                        <div class="col-md-6 mb-2">
                            <label  class="submenu--item" for="">Fecha de nacimiento</label>
                            <input type="date" class="form-control" wire:model="fecha_de_nacimiento">
                            <span class="text-danger">@error('fecha_de_nacimiento'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <label  class="submenu--item" for="">Estado Civil</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_civil" id="estado_civil1" value="soltero"
                                    wire:model="estado_civil">
                                <label class="form-check-label" for="estado_civil1">
                                    Soltero
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_civil" id="estado_civil2" value="casado"
                                    wire:model="estado_civil">
                                <label class="form-check-label" for="estado_civil2">
                                    Casado
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_civil" id="estado_civil3" value="viudo"
                                    wire:model="estado_civil">
                                <label class="form-check-label" for="estado_civil3">
                                    Viudo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estado_civil" id="estado_civil4" value="unido"
                                    wire:model="estado_civil">
                                <label class="form-check-label" for="estado_civil4">
                                    Unido
                                </label>
                            </div>
                            <span class="text-danger">@error('estado_civil'){{ $message }}@enderror</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" cols="2" rows="2" wire:model="description"></textarea>
                        <span class="text-danger">@error('description'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
        </div>

        @endif

        {{-- STEP 2 --}}

        @if ($currentStep == 2)

        <div class="step-two">
            <div class="card">
                <div class="card-header">
                    <x-multi-step-list step-info2="current" />
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" class="form-control" placeholder="Enter email address"
                                    wire:model="email">
                                <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" class="form-control" placeholder="Enter phone number"
                                    wire:model="phone">
                                <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="">Country of residence</label>
                                <select class="form-control" wire:model="country">
                                    <option value="" selected>Select country</option>
                                    <option value="United States">United States</option>
                                    <option value="India">India</option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Nigeria">Nigeria</option>
                                    <option value="Phillipines">Phillipines</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Bangladesh">Bangladesh</option>
                                </select>
                                <span class="text-danger">@error('country'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">City</label>
                                <input type="text" class="form-control" placeholder="Enter city" wire:model="city">
                                <span class="text-danger">@error('city'){{ $message }}@enderror</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endif

        {{-- STEP 3 --}}

        @if ($currentStep == 3)

        <div class="step-three">
            <div class="card">
                <div class="card-header">STEP 3/4 - Frameworks experience</div>
                <div class="card-body">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur explicabo, impedit maxime possimus
                    excepturi veniam ut error sit, molestias aliquam repellat eos porro? Sit ex voluptates nemo
                    veritatis delectus quia?
                    <div class="frameworks d-flex flex-column align-items-left mt-2">
                        <label for="laravel">
                            <input type="checkbox" id="laravel" value="laravel" wire:model="frameworks"> Laravel
                        </label>
                        <label for="codeigniter">
                            <input type="checkbox" id="codeigniter" value="codeigniter" wire:model="frameworks">
                            Codeigniter
                        </label>
                        <label for="vuejs">
                            <input type="checkbox" id="vuejs" value="vuejs" wire:model="frameworks"> Vue Js
                        </label>
                        <label for="cakePHP">
                            <input type="checkbox" id="cakePHP" value="cakePHP" wire:model="frameworks"> CakePHP
                        </label>
                    </div>
                    <span class="text-danger">@error('frameworks'){{ $message }}@enderror</span>
                </div>
            </div>
        </div>

        @endif

        {{-- STEP 4 --}}

        @if ($currentStep == 4)

        <div class="step-four">
            <div class="card">
                <div class="card-header">STEP 4/4 - Attachments</div>
                <div class="card-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque delectus officia inventore id
                    facere at aspernatur ad corrupti asperiores placeat, fugiat tempora soluta optio recusandae eligendi
                    impedit ipsam ullam amet!
                    <div class="form-group">
                        <label for="cv">CV</label>
                        <input type="file" class="form-control" wire:model="cv">
                        <span class="text-danger">@error('cv'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="terms" class="d-block">
                            <input type="checkbox" id="terms" wire:model="terms"> You must agree with our <a
                                href="#">Terms and Conditions</a>
                        </label>
                        <span class="text-danger">@error('terms'){{ $message }}@enderror</span>
                    </div>
                </div>
            </div>
        </div>

        @endif

        <div class="action-buttons d-flex justify-content-between bg-white pt-2 pb-2">

            @if ($currentStep == 1)
            <div></div>
            @endif

            @if ($currentStep == 2 || $currentStep == 3 || $currentStep == 4)
            <button type="button" class="btn btn-md btn-secondary" wire:click="decreaseStep()">Back</button>
            @endif

            @if ($currentStep == 1|| $currentStep == 2 || $currentStep == 3 || $currentStep == 4)
            <button type="button" class="btn btn-md btn-success" wire:click="increaseStep()">Next</button>
            @endif

            @if ($currentStep == 4)
            <button type="submit" class="btn btn-md btn-primary">Submit</button>
            @endif

        </div>

    </form>
</div>
