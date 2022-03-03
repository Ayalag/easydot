<div>
    <form wire:submit.prevent="submit" enctype="multipart/form-data">

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
                        <input type="text"
                            class="form-control input__style @if ($errors->has('nombres')) border border-danger @endif"
                            id="nombres" placeholder="Nombres" wire:model.defer="nombres">
                    </div>
                    <div class="form-group col-md-6">
                        {{-- <label for="apellidos">apellidos</label> --}}
                        <input type="text"
                            class="form-control input__style @if ($errors->has('apellidos')) border border-danger @endif"
                            id="apellidos" placeholder="Apellidos" wire:model.defer="apellidos">
                    </div>
                </div>
                <div class="form-row mb-2">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
                        <div class="form-check-inline ">
                            <label
                                class="form-check-label pr-2 easyBlue600 ml-2 mb-2 @if ($errors->has('typeId')) text-danger @endif"
                                for="inlineRadio1">Cédula</label>
                            <input wire:model.defer="typeId" class="form-check-input mb-2" type="radio"
                                name="identificacion" id="cedula" value="cedula" wire:click="$set('showPais',false)"
                                required>
                            <label
                                class="form-check-label mr-2 easyBlue600 mb-2 @if ($errors->has('typeId')) text-danger @endif"
                                for="inlineRadio1">Pasaporte</label>
                            <input wire:model="typeId" class="form-check-input mb-2" type="radio" name="identificacion"
                                id="pasaporte" value="pasaporte" wire:click="$set('showPais',true)" required>
                        </div>
                        <div class="form-group">
                            <input wire:model.defer="identificacion" type="text"
                                class="form-control input__style @if ($errors->has('identificacion')) border border-danger @endif "
                                id="identificacion" placeholder="identificacion">
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
                                    id="birthdayDay" placeholder="día">
                                    <option value="" selected>día</option>
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
                                    id="birthdayMonth" placeholder="mes">
                                    <option value="" selected>mes</option>
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
                                    id="birthdayYear" placeholder="año">
                                    <option value="" selected>año</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                </select>
                            </div>
                            <span class="ageError" id="ageError">*mayoria de edad requerida</span>
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
                    {{-- <div class="form-group col-md-3 text-center"> --}}
                    {{-- <label for="eCivil">estado civil</label> --}}
                    {{-- <input wire:model.defer="eCivil" type="text" --}}
                    {{-- class="form-control input__style @if ($errors->has('eCivil')) border border-danger @endif"
                            id="eCivil" placeholder="Estado Civil"> --}}
                    {{-- </div> --}}
                    <div class="form-group col-sm-12 col-md-3">
                        <select wire:model.defer="eCivil"
                            class="form-control input__style @if ($errors->has('eCivil')) border border-danger @endif"
                            data-live-search="true" title="eCivil" name="eCivil" id="eCivil" required>
                            <option>estado civil</option>
                            <option value="soltero">Soltero</option>
                            <option value="casado">casado</option>
                            <option value="viudo">Viudo</option>
                            <option value="Unido">Unido</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-12 col-md-5 text-center">
                        {{-- <h3>foto de cédula o pasaporte</h3> --}}
                        <div class="input-group input-file" name="upload">
                            {{-- <input type="file" class="form-control input__style" placeholder='clic para adjuntar' /> --}}
                            <label for="file-upload" class="custom-file-upload input__style">
                                <i class="fas fa-paperclip"></i>identificación
                            </label>
                            <input id="file-upload" type="file" wire:model="cedulaFoto" />
                            <span wire:loading wire:target="cedulaFoto" class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true" style="position: relative;left:-30px;bottom:-10px" ></span>
                            @error('cedulaFoto') <span class="error">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="form-group col-xs-12 col-sm-12 col-md-4" style="width: 282px">
                        @if($showPais)
                        <select wire:model.defer="pais"
                            class="form-control input__style @if ($errors->has('pais')) border border-danger @endif"
                            data-live-search="true" title="pais" name="pais" id="pais" required>
                            <option value=''>país</option>
                            <option value="Afganistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="American Samoa">American Samoa</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Anguilla">Anguilla</option>
                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Aruba">Aruba</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bermuda">Bermuda</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bonaire">Bonaire</option>
                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Canary Islands">Canary Islands</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Cayman Islands">Cayman Islands</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Channel Islands">Channel Islands</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Christmas Island">Christmas Island</option>
                            <option value="Cocos Island">Cocos Island</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Cook Islands">Cook Islands</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Cote DIvoire">Cote DIvoire</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Curaco">Curacao</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czech Republic">Czech Republic</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="East Timor">East Timor</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Falkland Islands">Falkland Islands</option>
                            <option value="Faroe Islands">Faroe Islands</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="French Guiana">French Guiana</option>
                            <option value="French Polynesia">French Polynesia</option>
                            <option value="French Southern Ter">French Southern Ter</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Gibraltar">Gibraltar</option>
                            <option value="Great Britain">Great Britain</option>
                            <option value="Greece">Greece</option>
                            <option value="Greenland">Greenland</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guadeloupe">Guadeloupe</option>
                            <option value="Guam">Guam</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Hawaii">Hawaii</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hong Kong">Hong Kong</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="India">India</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Isle of Man">Isle of Man</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea North">Korea North</option>
                            <option value="Korea Sout">Korea South</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Macau">Macau</option>
                            <option value="Macedonia">Macedonia</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Martinique">Martinique</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Midway Islands">Midway Islands</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montserrat">Montserrat</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Nambia">Nambia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherland Antilles">Netherland Antilles</option>
                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                            <option value="Nevis">Nevis</option>
                            <option value="New Caledonia">New Caledonia</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Niue">Niue</option>
                            <option value="Norfolk Island">Norfolk Island</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau Island">Palau Island</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Phillipines">Philippines</option>
                            <option value="Pitcairn Island">Pitcairn Island</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Puerto Rico">Puerto Rico</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                            <option value="Republic of Serbia">Republic of Serbia</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="St Barthelemy">St Barthelemy</option>
                            <option value="St Eustatius">St Eustatius</option>
                            <option value="St Helena">St Helena</option>
                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                            <option value="St Lucia">St Lucia</option>
                            <option value="St Maarten">St Maarten</option>
                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                            <option value="Saipan">Saipan</option>
                            <option value="Samoa">Samoa</option>
                            <option value="Samoa American">Samoa American</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Tahiti">Tahiti</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Togo">Togo</option>
                            <option value="Tokelau">Tokelau</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Erimates">United Arab Emirates</option>
                            <option value="United States of America">United States of America</option>
                            <option value="Uraguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City State">Vatican City State</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                            <option value="Wake Island">Wake Island</option>
                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zaire">Zaire</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                        @endif
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
                            class="form-control input__style @if ($errors->has('selectedProvincia')) border border-danger @endif"
                            data-live-search="true" title="Provincia" name="provincia" id="provincia" required>
                            <option value="" selected>Provincia</option>
                            @foreach ($provincia as $p)
                            <option value="{{ $p->id_Provincia }}">{{ $p->Nombre_Provincia }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">&nbsp;</label>
                        <select wire:model="selectedDistrito" class="form-control input__style " data-live-search="true"
                            title="Distrito" name="distrito" id="distrito" required>
                            <option value="" selected>Distrito</option>
                            @if (!is_null($distrito))
                            @foreach ($distrito as $d)
                            <option value="{{ $d->id_distrito }}">{{ $d->nombre_distrito }}</option>
                            @endforeach
                            @endif
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">&nbsp;</label>
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
                            class="form-control input__style @if ($errors->has('barrio')) border border-danger @endif"
                            id="barrio" placeholder="Barrio / P.H">
                    </div>
                    <div class="form-group col-md-6">
                        {{-- <label for=""></label> --}}
                        <input wire:model.defer="casa" type="text"
                            class="form-control input__style @if ($errors->has('casa')) border border-danger @endif"
                            id="casa" placeholder="# Casa / Apto.">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                        {{-- <label for="">celular</label> --}}
                        <input wire:model.defer="celular" type="tel"
                            class="form-control input__style @if ($errors->has('celular')) border border-danger @endif"
                            id="celular" placeholder="Celular" maxlength="8">
                    </div>
                    <div class="form-group col-md-6">
                        {{-- <label for="">correo electrónico</label> --}}
                        <input wire:model.defer="contactMail" type="email"
                            class="form-control input__style @if ($errors->has('contactMail')) border border-danger @endif"
                            id="email" placeholder="Correo electrónico">
                    </div>
                </div>
            </div>
        </div>
        <div class="datos-de-ppp pt-4">
            <div class="container-fluid container-registro-contactos shadow pt-4">
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-4 text-center">
                                    <div class="form-check-inline ">
                                        <div
                                            class="col-xs-12 col-sm-12 col-md-10 col-lg-12 easyBlue600 @if ($errors->has('ppe'))  text-danger @endif">
                                            ¿Eres una persona <br>
                                            politicamente expuesta?
                                        </div>
                                        <label class=" form-check-label mr-1 h4" for="">Si</label>
                                        <input wire:model.defer="ppe" class="form-check-input" type="radio" name="ppe"
                                            id="ppeSi" value="ppeSi">
                                        <label class="form-check-label mr-1 h4" for="">No</label>
                                        <input wire:model.defer="ppe" class="form-check-input" type="radio" name="ppe"
                                            id="ppeNo" value="ppeNo">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="show-hide" id="show-hide" style="display: none;">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input wire:model.defer="ppecargo" type="text"
                                class="form-control input__style @if ($errors->has('ppecargo')) border border-danger @endif"
                                id="cargo" placeholder="Cargo">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="container-ppe__activo d-flex flex-column">
                                <div class="text-center @if ($errors->has('ppe_activo')) text-danger @endif">
                                    ¿estas en el cargo <br> actualmente?
                                </div>
                                <div class="ppe_otipons text-center">
                                    <label class=" form-check-label mr-4 h5" for="">Si</label>
                                    <input wire:model.defer="ppe_activo" class="form-check-input" type="radio"
                                        name="ppe_activo" id="ppe_activoSi" value="si">
                                    <label class="form-check-label mr-4 h5" for="">No</label>
                                    <input wire:model.defer="ppe_activo" class="form-check-input" type="radio"
                                        name="ppe_activo" id="ppe_activoNo" value="no">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 text-center">
                            <label class="easyBlue600">Fecha de inicio del cargo</label>
                            <div class="col-12 d-flex">
                                <select wire:model.defer="ppe_inicio_dia"
                                    class="form-control input__style mr-2 @if ($errors->has('ppe_inicio_dia')) border border-danger @endif"
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
                                <select wire:model.defer="ppe_inicio_mes"
                                    class="form-control input__style mr-2  @if ($errors->has('ppe_inicio_mes')) border border-danger @endif"
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
                                <select wire:model.defer="ppe_inicio_año"
                                    class="form-control input__style mr-2  @if ($errors->has('ppe_inicio_año')) border border-danger @endif"
                                    id="aa" placeholder="aa">
                                    <option value="" selected>aa</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6 text-center ppeFin" style="display: none;">
                            <label class="easyBlue600">Fecha de finalización</label>
                            <div class="col-12 d-flex">
                                <select wire:model.defer="ppe_final_dia"
                                    class="form-control input__style mr-2 @if ($errors->has('ppe_final_dia')) border border-danger @endif"
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
                                <select wire:model.defer="ppe_final_mes"
                                    class="form-control input__style mr-2  @if ($errors->has('ppe_final_mes')) border border-danger @endif"
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
                                <select wire:model.defer="ppe_final_año"
                                    class="form-control input__style mr-2  @if ($errors->has('ppe_final_año')) border border-danger @endif"
                                    id="aa" placeholder="aa">
                                    <option value="" selected>aa</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                    <option value="2017">2017</option>
                                    <option value="2016">2016</option>
                                    <option value="2015">2015</option>
                                    <option value="2014">2014</option>
                                    <option value="2013">2013</option>
                                    <option value="2012">2012</option>
                                    <option value="2011">2011</option>
                                    <option value="2010">2010</option>
                                    <option value="2009">2009</option>
                                    <option value="2008">2008</option>
                                    <option value="2007">2007</option>
                                    <option value="2006">2006</option>
                                    <option value="2005">2005</option>
                                    <option value="2004">2004</option>
                                    <option value="2003">2003</option>
                                    <option value="2002">2002</option>
                                    <option value="2001">2001</option>
                                    <option value="2000">2000</option>
                                    <option value="1999">1999</option>
                                    <option value="1998">1998</option>
                                    <option value="1997">1997</option>
                                    <option value="1996">1996</option>
                                    <option value="1995">1995</option>
                                    <option value="1994">1994</option>
                                    <option value="1993">1993</option>
                                    <option value="1992">1992</option>
                                    <option value="1991">1991</option>
                                    <option value="1990">1990</option>
                                    <option value="1989">1989</option>
                                    <option value="1988">1988</option>
                                    <option value="1987">1987</option>
                                    <option value="1986">1986</option>
                                    <option value="1985">1985</option>
                                    <option value="1984">1984</option>
                                    <option value="1983">1983</option>
                                    <option value="1982">1982</option>
                                    <option value="1981">1981</option>
                                    <option value="1980">1980</option>
                                    <option value="1979">1979</option>
                                    <option value="1978">1978</option>
                                    <option value="1977">1977</option>
                                    <option value="1976">1976</option>
                                    <option value="1975">1975</option>
                                    <option value="1974">1974</option>
                                    <option value="1973">1973</option>
                                    <option value="1972">1972</option>
                                    <option value="1971">1971</option>
                                    <option value="1970">1970</option>
                                    <option value="1969">1969</option>
                                    <option value="1968">1968</option>
                                    <option value="1967">1967</option>
                                    <option value="1966">1966</option>
                                    <option value="1965">1965</option>
                                    <option value="1964">1964</option>
                                    <option value="1963">1963</option>
                                    <option value="1962">1962</option>
                                    <option value="1961">1961</option>
                                    <option value="1960">1960</option>
                                    <option value="1959">1959</option>
                                    <option value="1958">1958</option>
                                    <option value="1957">1957</option>
                                    <option value="1956">1956</option>
                                    <option value="1955">1955</option>
                                    <option value="1954">1954</option>
                                    <option value="1953">1953</option>
                                    <option value="1952">1952</option>
                                    <option value="1951">1951</option>
                                    <option value="1950">1950</option>
                                    <option value="1949">1949</option>
                                    <option value="1948">1948</option>
                                    <option value="1947">1947</option>
                                    <option value="1946">1946</option>
                                    <option value="1945">1945</option>
                                    <option value="1944">1944</option>
                                    <option value="1943">1943</option>
                                    <option value="1942">1942</option>
                                    <option value="1941">1941</option>
                                    <option value="1940">1940</option>
                                    <option value="1939">1939</option>
                                    <option value="1938">1938</option>
                                    <option value="1937">1937</option>
                                    <option value="1936">1936</option>
                                    <option value="1935">1935</option>
                                    <option value="1934">1934</option>
                                    <option value="1933">1933</option>
                                    <option value="1932">1932</option>
                                    <option value="1931">1931</option>
                                    <option value="1930">1930</option>
                                    <option value="1929">1929</option>
                                    <option value="1928">1928</option>
                                    <option value="1927">1927</option>
                                    <option value="1926">1926</option>
                                    <option value="1925">1925</option>
                                    <option value="1924">1924</option>
                                    <option value="1923">1923</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
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

        @if ($currentStep == 2)
        {{-- STEP 2 --}}

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
        <div class="container-fluid mb-3 pt-4">
            <div class="col-12 text-center">
                <div class="registro-datos__title">
                    <p class="">¡ya falta muy poco!</p>
                </div>
                <div class="registro-datos__subtitle">
                    <p class="underline">datos de la mascota</p>
                </div>
            </div>
        </div>

        <div class="container container-registro-datos">
            <div class="container-registros__mascotas p-4 shadow-lg text-center">
                <div class="row pb-4">
                    <div class="col-6">
                        <img src="{{ asset('/public/includes/images/registro/mascotas/perro.png') }}" alt="">
                        <div>
                            <label
                                class="form-check-label m-1 easyBlue600  @if ($errors->has('mascotaTipo'))text-danger @endif"
                                for="dog">perro</label>
                            <input wire:model.defer="mascotaTipo" class="form-check-input m-1" type="radio" name="vet"
                                id="dog" value="perro" wire:click="petDropdown('dog')">
                        </div>
                    </div>
                    <div class="col-6">
                        <img src="{{ asset('/public/includes/images/registro/mascotas/gato.png') }}" alt="">
                        <div>
                            <label
                                class="form-check-label ml-1 mt-2 easyBlue600 @if ($errors->has('mascotaTipo'))text-danger @endif"
                                for="cat">gato</label>
                            <input wire:model.defer="mascotaTipo" class="form-check-input ml-1 mt-2" type="radio"
                                name="vet" id="cat" value="gato" wire:click="petDropdown('cat')">
                        </div>
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col">
                        <input wire:model.defer="mascotaNombre" type="text"
                            class="form-control input__style  @if ($errors->has('mascotaNombre')) border border-danger @endif "
                            id="nombre" placeholder="nombre">
                    </div>
                </div>
                <div class="row pb-2">
                    <div class="col">
                        <select wire:model.defer="mascotaRaza"
                            class="form-control input__style mr-2  @if ($errors->has('mascotaRaza')) border border-danger @endif"
                            id="raza" placeholder="raza">
                            {{-- <input wire:model.defer="mascotaRaza" type="text" class="form-control input__style  @if ($errors->has('mascotaRaza')) border border-danger @endif" id="raza" placeholder="raza"> --}}
                            <option value="">Escoja una opción</option>
                            @if($dogSelected)
                            <option value="Pembroke Welsh Corgi">Pembroke Welsh Corgi</option>
                            <option value="Perro de Agua Español">Perro de Agua Español</option>
                            <option value="Perro de Agua Francés">Perro de Agua Francés</option>
                            <option value="Perro sin Pelo Mexicano o Xoloitzcuintle">Perro sin Pelo Mexicano o
                                Xoloitzcuintle</option>
                            <option value="Perro sin Pelo del Perú">Perro sin Pelo del Perú</option>
                            <option value="Petit Basset Griffon">Petit Basset Griffon</option>
                            <option value="Pinscher">Pinscher</option>
                            <option value="Podenco Canario">Podenco Canario</option>
                            <option value="Podenco Ibicenco">Podenco Ibicenco</option>
                            <option value="Pointer Inglés">Pointer Inglés</option>
                            <option value="Pomerania">Pomerania</option>
                            <option value="Presa Canario">Presa Canario</option>
                            <option value="Puli">Puli</option>
                            <option value="Ratón Bodeguero Andaluz">Ratón Bodeguero Andaluz</option>
                            <option value="Retriever de pelo rizado">Retriever de pelo rizado</option>
                            <option value="Rottweiler">Rottweiler</option>
                            <option value="San Bernardo">San Bernardo</option>
                            <option value="Samoyedo">Samoyedo</option>
                            <option value="Schnauzer">Schnauzer</option>
                            <option value="Scottish Terrier">Scottish Terrier</option>
                            <option value="Setter Irlandés">Setter Irlandés</option>
                            <option value="Shar Pei">Shar Pei</option>
                            <option value="Shetland Sheepdog">Shetland Sheepdog</option>
                            <option value="Shih Tzu">Shih Tzu</option>
                            <option value="Spinone italiano">Spinone italiano</option>
                            <option value="Teckel">Teckel</option>
                            <option value="Terranova">Terranova</option>
                            <option value="Terrier Australiano">Terrier Australiano</option>
                            <option value="Terrier Checo">Terrier Checo</option>
                            <option value="Terrier Japonés">Terrier Japonés</option>
                            <option value="Terrier Tibetano">Terrier Tibetano</option>
                            <option value="Tosa Inu">Tosa Inu</option>
                            <option value="Weimaraner">Weimaraner</option>
                            <option value="West Highland White Terrier">West Highland White Terrier</option>
                            <option value="Yorkshire Terrier">Yorkshire Terrier</option>
                            @endif
                            @if($catSelected)
                            <option value="Cartujo o Chartreaux">Cartujo o Chartreaux</option>
                            <option value="Común Europeo">Común Europeo</option>
                            <option value="Cornish Rex">Cornish Rex</option>
                            <option value="Devon Rex">Devon Rex</option>
                            <option value="Exótico">Exótico</option>
                            <option value="Himalayo ">Himalayo </option>
                            <option value="Korat">Korat</option>
                            <option value="Lykoi">Lykoi</option>
                            <option value="Maine Coon">Maine Coon</option>
                            <option value="Manx">Manx</option>
                            <option value="Mau Egipcio">Mau Egipcio</option>
                            <option value="Munchkin">Munchkin</option>
                            <option value="Nebelung">Nebelung</option>
                            <option value="Ocicat">Ocicat</option>
                            <option value="Oriental">Oriental</option>
                            <option value="Persa">Persa</option>
                            <option value="Persa Chinchilla">Persa Chinchilla</option>
                            <option value="Persa Tabby">Persa Tabby</option>
                            <option value="Peterbald">Peterbald</option>
                            <option value="Ragamuffin">Ragamuffin</option>
                            <option value="Ragdoll">Ragdoll</option>
                            <option value="Rex">Rex</option>
                            <option value="Savannah">Savannah</option>
                            <option value="Scottish Fold">Scottish Fold</option>
                            <option value="Selkirk Rex">Selkirk Rex</option>
                            <option value="Siamés">Siamés</option>
                            <option value="Siberiano">Siberiano</option>
                            <option value="Snowshoe">Snowshoe</option>
                            <option value="Somalí">Somalí</option>
                            <option value="Sphynx">Sphynx</option>
                            <option value="Toyger">Toyger</option>
                            <option value="Van Turco">Van Turco</option>
                            @endif
                        </select>
                    </div>
                </div>
                <div class="text-left p-2">
                    <span>fecha de nacimiento</span>
                </div>
                <div class="form-group">
                    <div class="d-flex">
                        <select wire:model.defer="mascotaNacDay"
                            class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-control input__style mr-2 @if ($errors->has('mascotaNacDay')) border border-danger @endif"
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
                        <select wire:model.defer="mascotaNacMonth"
                            class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-control input__style mr-2  @if ($errors->has('mascotaNacMonth')) border border-danger @endif"
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
                        <select wire:model.defer="mascotaNacYear"
                            class="col-xs-12 col-sm-4 col-md-4 col-lg-4 form-control input__style mr-2  @if ($errors->has('mascotaNacYear')) border border-danger @endif"
                            id="aa" placeholder="aa">
                            <option value="" selected>aa</option>
                            <option value="2022">2022</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                            <option value="2014">2014</option>
                            <option value="2013">2013</option>
                            <option value="2012">2012</option>
                            <option value="2011">2011</option>
                            <option value="2010">2010</option>
                            <option value="2009">2009</option>
                            <option value="2008">2008</option>
                            <option value="2007">2007</option>
                            <option value="2006">2006</option>
                            <option value="2005">2005</option>
                            <option value="2004">2004</option>
                            <option value="2003">2003</option>
                            <option value="2002">2002</option>
                            <option value="2001">2001</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
                            <option value="1997">1997</option>
                            <option value="1996">1996</option>
                            <option value="1995">1995</option>
                            <option value="1994">1994</option>
                            <option value="1993">1993</option>
                            <option value="1992">1992</option>
                            <option value="1991">1991</option>
                            <option value="1990">1990</option>
                            <option value="1989">1989</option>
                            <option value="1988">1988</option>
                            <option value="1987">1987</option>
                            <option value="1986">1986</option>
                            <option value="1985">1985</option>
                            <option value="1984">1984</option>
                            <option value="1983">1983</option>
                            <option value="1982">1982</option>
                            <option value="1981">1981</option>
                            <option value="1980">1980</option>
                            <option value="1979">1979</option>
                            <option value="1978">1978</option>
                            <option value="1977">1977</option>
                            <option value="1976">1976</option>
                            <option value="1975">1975</option>
                            <option value="1974">1974</option>
                            <option value="1973">1973</option>
                            <option value="1972">1972</option>
                            <option value="1971">1971</option>
                            <option value="1970">1970</option>
                            <option value="1969">1969</option>
                            <option value="1968">1968</option>
                            <option value="1967">1967</option>
                            <option value="1966">1966</option>
                            <option value="1965">1965</option>
                            <option value="1964">1964</option>
                            <option value="1963">1963</option>
                            <option value="1962">1962</option>
                            <option value="1961">1961</option>
                            <option value="1960">1960</option>
                            <option value="1959">1959</option>
                            <option value="1958">1958</option>
                            <option value="1957">1957</option>
                            <option value="1956">1956</option>
                            <option value="1955">1955</option>
                            <option value="1954">1954</option>
                            <option value="1953">1953</option>
                            <option value="1952">1952</option>
                            <option value="1951">1951</option>
                            <option value="1950">1950</option>
                            <option value="1949">1949</option>
                            <option value="1948">1948</option>
                            <option value="1947">1947</option>
                            <option value="1946">1946</option>
                            <option value="1945">1945</option>
                            <option value="1944">1944</option>
                            <option value="1943">1943</option>
                            <option value="1942">1942</option>
                            <option value="1941">1941</option>
                            <option value="1940">1940</option>
                            <option value="1939">1939</option>
                            <option value="1938">1938</option>
                            <option value="1937">1937</option>
                            <option value="1936">1936</option>
                            <option value="1935">1935</option>
                            <option value="1934">1934</option>
                            <option value="1933">1933</option>
                            <option value="1932">1932</option>
                            <option value="1931">1931</option>
                            <option value="1930">1930</option>
                            <option value="1929">1929</option>
                            <option value="1928">1928</option>
                            <option value="1927">1927</option>
                            <option value="1926">1926</option>
                            <option value="1925">1925</option>
                            <option value="1924">1924</option>
                            <option value="1923">1923</option>
                        </select>
                    </div>
                </div>
                <div class="row pb-2 justify-content-center">
                    <div class="col-5 mr-1">
                        <select wire:model.defer="mascotaSexo"
                            class="form-control input__style @if ($errors->has('mascotaSexo')) border border-danger @endif"
                            data-live-search="true" title="mascotaSexo" name="mascotaSexo" id="mascotaSexo" required>
                            <option>sexo</option>
                            <option value="Hembra">Hembra</option>
                            <option value="Macho">Macho</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <input wire:model.defer="mascotaValor" type="number"
                            class="form-control input__style @if ($errors->has('mascotaValor')) border border-danger @endif"
                            id="valor" placeholder="valor" min="1.00" max="1500" step="0.01">

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
                            <input wire:model.defer="nombreClinica" type="text" class="form-control input__style"
                                id="nombreClinica" placeholder="nombre de la clinica">
                        </div>
                    </div>
                    <div class="row pt-2 pb-2">
                        <div class="col">
                            <input wire:model.defer="telefonoClinica" type="text" class="form-control input__style"
                                id="telefonoClinica" placeholder="telefono de la clinica">
                        </div>
                    </div>
                    <div class="row pt-2 pb-2">
                        <div class="col">
                            <textarea wire:model.defer="direccionClinica" class="input__style" rows="4" cols="33"
                                placeholder="dirección de la clinica"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-registros__mascotas-veterinario mt-3 ">
                <div class="container-registros__mascotas p-4 shadow-lg text-center">
                    <div class="container-vet__title">
                        <p class="underline easyBlue600">fotos de la mascota</p>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <label for="mascota1Foto" class="custom-file-upload input__style">
                                clic para adjuntar
                            </label>
                            <input id="mascota1Foto" type="file" wire:model="mascota1Foto" />
                            <span wire:loading wire:target="mascota1Foto"  class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true" style="position: relative;left:134px;bottom:25px" ></span>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <label for="mascota2Foto" class="custom-file-upload input__style">
                                clic para adjuntar
                            </label>
                            <input id="mascota2Foto" type="file" wire:model="mascota2Foto" />
                            <span wire:loading wire:target="mascota2Foto" class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true" style="position: relative;left:134px;bottom:25px" ></span>
                        </div>
                    </div>
                    <div class="row pt-2">
                        <div class="col">
                            <label for="mascota3Foto" class="custom-file-upload input__style">
                                clic para adjuntar
                            </label>
                            <input  id="mascota3Foto" type="file" wire:model="mascota3Foto" />
                            <span wire:loading wire:target="mascota3Foto" class="spinner-border spinner-border-sm" role="status"
                            aria-hidden="true" style="position: relative;left:134px;bottom:25px" ></span>
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
            @endif
    </form>
</div>
