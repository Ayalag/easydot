<div>
    <form wire:submit.prevent="submit">
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
                                name="identificacion" id="cedula" value="cedula" wire:click="$set('showPais',false)">
                            <label
                                class="form-check-label mr-2 easyBlue600 mb-2 @if ($errors->has('typeId')) text-danger @endif"
                                for="inlineRadio1">Pasaporte</label>
                            <input wire:model="typeId" class="form-check-input mb-2" type="radio"
                                name="identificacion" id="pasaporte" value="pasaporte" wire:click="$set('showPais',true)">
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
                            data-live-search="true" title="eCivil" name="eCivil" id="eCivil" >
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
                                <i class="fas fa-paperclip"></i> adjuntar identificación
                            </label>
                            <input id="file-upload" type="file" />
                        </div>
                    </div>
                    
                    <div class="form-group col-xs-12 col-sm-12 col-md-4" style="width: 282px"> 
                        @if($showPais)
                        <select wire:model.defer="pais"
                            class="form-control input__style @if ($errors->has('pais')) border border-danger @endif"
                            data-live-search="true" title="pais" name="pais" id="pais" >
                            <option value=»»>país</option>
                            <option value=»AF» >Afganistán</option>
                            <option value=»AL» >Albania</option>
                            <option value=»DZ» >Argelia</option>
                            <option value=»AS» >Samoa Americana</option>
                            <option value=»AD» >Andorra</option>
                            <option value=»AO» >Angola</option>
                            <option value=»AI» >Anguilla</option>
                            <option value=»AQ» >Antártida</option>
                            <option value=»AG» >Antigua y Barbuda</option>
                            <option value=»AR» >Argentina</option>
                            <option value=»AM» >Armenia</option>
                            <option value=»AW» >Aruba</option>
                            <option value=»AU» >Australia</option>
                            <option value=»AT» >Austria</option>
                            <option value=»AZ» >Azerbaiyán</option>
                            <option value=»BS» >Bahamas</option>
                            <option value=»BH» >Bahrein</option>
                            <option value=»BD» >Bangladesh</option>
                            <option value=»BB» >Barbados</option>
                            <option value=»BY» >Bielorrusia</option>
                            <option value=»BE» >Bélgica</option>
                            <option value=»BZ» >Belice</option>
                            <option value=»BJ» >Benin</option>
                            <option value=»BM» >Bermudas</option>
                            <option value=»BT» >Bután</option>
                            <option value=»BO» >Bolivia</option>
                            <option value=»BA» >Bosnia y Herzegovina</option>
                            <option value=»BW» >Botswana</option>
                            <option value=»BV» >Isla Bouvet</option>
                            <option value=»BR» >Brasil</option>
                            <option value=»IO» >Territorios británicos del océano Índico</option>
                            <option value=»BN» >Brunei</option>
                            <option value=»BG» >Bulgaria</option>
                            <option value=»BF» >Burkina Faso</option>
                            <option value=»BI» >Burundi</option>
                            <option value=»KH» >Camboya</option>
                            <option value=»CM» >Camerún</option>
                            <option value=»CA» >Canadá</option>
                            <option value=»CV» >Cabo Verde</option>
                            <option value=»KY» >Islas Caimán</option>
                            <option value=»CF» >República Centroafricana</option>
                            <option value=»TD» >Chad</option>
                            <option value=»CL» >Chile</option>
                            <option value=»CN» >China</option>
                            <option value=»CX» >Isla de Christmas</option>
                            <option value=»CC» >Islas de Cocos o Keeling</option>
                            <option value=»CO» >Colombia</option>
                            <option value=»KM» >Comores</option>
                            <option value=»CG» >Congo</option>
                            <option value=»CD» >Congo, República Democrática del</option>
                            <option value=»CK» >Islas Cook</option>
                            <option value=»CR» >Costa Rica</option>
                            <option value=»CI» >Costa de Marfíl</option>
                            <option value=»HR» >Croacia (Hrvatska)</option>
                            <option value=»CU» >Cuba</option>
                            <option value=»CY» >Chipre</option>
                            <option value=»CZ» >República Checa</option>
                            <option value=»DK» >Dinamarca</option>
                            <option value=»DJ» >Djibouti</option>
                            <option value=»DM» >Dominica</option>
                            <option value=»DO» >República Dominicana</option>
                            <option value=»TP» >Timor Oriental</option>
                            <option value=»EC» >Ecuador</option>
                            <option value=»EG» >Egipto</option>
                            <option value=»SV» >El Salvador</option>
                            <option value=»GQ» >Guinea Ecuatorial</option>
                            <option value=»ER» >Eritrea</option>
                            <option value=»EE» >Estonia</option>
                            <option value=»ET» >Etiopía</option>
                            <option value=»FK» >Islas Malvinas</option>
                            <option value=»FO» >Islas Faroe</option>
                            <option value=»FJ» >Fiji</option>
                            <option value=»FI» >Finlandia</option>
                            <option value=»FR» >Francia</option>
                            <option value=»GF» >Guayana Francesa</option>
                            <option value=»PF» >Polinesia Francesa</option>
                            <option value=»TF» >Territorios franceses del Sur</option>
                            <option value=»GA» >Gabón</option>
                            <option value=»GM» >Gambia</option>
                            <option value=»GE» >Georgia</option>
                            <option value=»DE» >Alemania</option>
                            <option value=»GH» >Ghana</option>
                            <option value=»GI» >Gibraltar</option>
                            <option value=»GR» >Grecia</option>
                            <option value=»GL» >Groenlandia</option>
                            <option value=»GD» >Granada</option>
                            <option value=»GP» >Guadalupe</option>
                            <option value=»GU» >Guam</option>
                            <option value=»GT» >Guatemala</option>
                            <option value=»GN» >Guinea</option>
                            <option value=»GW» >Guinea-Bissau</option>
                            <option value=»GY» >Guayana</option>
                            <option value=»HT» >Haití</option>
                            <option value=»HM» >Islas Heard y McDonald</option>
                            <option value=»HN» selected >Honduras</option>
                            <option value=»HK» >Hong Kong</option>
                            <option value=»HU» >Hungría</option>
                            <option value=»IS» >Islandia</option>
                            <option value=»IN» >India</option>
                            <option value=»ID» >Indonesia</option>
                            <option value=»IR» >Irán</option>
                            <option value=»IQ» >Irak</option>
                            <option value=»IE» >Irlanda</option>
                            <option value=»IL» >Israel</option>
                            <option value=»IT» >Italia</option>
                            <option value=»JM» >Jamaica</option>
                            <option value=»JP» >Japón</option>
                            <option value=»JO» >Jordania</option>
                            <option value=»KZ» >Kazajistán</option>
                            <option value=»KE» >Kenia</option>
                            <option value=»KI» >Kiribati</option>
                            <option value=»KR» >Corea</option>
                            <option value=»KP» >Corea del Norte</option>
                            <option value=»KW» >Kuwait</option>
                            <option value=»KG» >Kirguizistán</option>
                            <option value=»LA» >Laos</option>
                            <option value=»LV» >Letonia</option>
                            <option value=»LB» >Líbano</option>
                            <option value=»LS» >Lesotho</option>
                            <option value=»LR» >Liberia</option>
                            <option value=»LY» >Libia</option>
                            <option value=»LI» >Liechtenstein</option>
                            <option value=»LT» >Lituania</option>
                            <option value=»LU» >Luxemburgo</option>
                            <option value=»MO» >Macao</option>
                            <option value=»MG» >Madagascar</option>
                            <option value=»MW» >Malawi</option>
                            <option value=»MY» >Malasia</option>
                            <option value=»MV» >Maldivas</option>
                            <option value=»ML» >Malí</option>
                            <option value=»MT» >Malta</option>
                            <option value=»MH» >Islas Marshall</option>
                            <option value=»MQ» >Martinica</option>
                            <option value=»MR» >Mauritania</option>
                            <option value=»MU» >Mauricio</option>
                            <option value=»YT» >Mayotte</option>
                            <option value=»MX» >México</option>
                            <option value=»FM» >Micronesia</option>
                            <option value=»MD» >Moldavia</option>
                            <option value=»MC» >Mónaco</option>
                            <option value=»MN» >Mongolia</option>
                            <option value=»MS» >Montserrat</option>
                            <option value=»MA» >Marruecos</option>
                            <option value=»MZ» >Mozambique</option>
                            <option value=»MM» >Birmania</option>
                            <option value=»NA» >Namibia</option>
                            <option value=»NR» >Nauru</option>
                            <option value=»NP» >Nepal</option>
                            <option value=»AN» >Antillas Holandesas</option>
                            <option value=»NL» >Países Bajos</option>
                            <option value=»NC» >Nueva Caledonia</option>
                            <option value=»NZ» >Nueva Zelanda</option>
                            <option value=»NI» >Nicaragua</option>
                            <option value=»NE» >Níger</option>
                            <option value=»NG» >Nigeria</option>
                            <option value=»NU» >Niue</option>
                            <option value=»NF» >Norfolk</option>
                            <option value=»MP» >Islas Marianas del Norte</option>
                            <option value=»NO» >Noruega</option>
                            <option value=»OM» >Omán</option>
                            <option value=»PK» >Paquistán</option>
                            <option value=»PW» >Islas Palau</option>
                            <option value=»PA» >Panamá</option>
                            <option value=»PG» >Papúa Nueva Guinea</option>
                            <option value=»PY» >Paraguay</option>
                            <option value=»PE» >Perú</option>
                            <option value=»PH» >Filipinas</option>
                            <option value=»PN» >Pitcairn</option>
                            <option value=»PL» >Polonia</option>
                            <option value=»PT» >Portugal</option>
                            <option value=»PR» >Puerto Rico</option>
                            <option value=»QA» >Qatar</option>
                            <option value=»RE» >Reunión</option>
                            <option value=»RO» >Rumania</option>
                            <option value=»RU» >Rusia</option>
                            <option value=»RW» >Ruanda</option>
                            <option value=»SH» >Santa Helena</option>
                            <option value=»KN» >Saint Kitts y Nevis</option>
                            <option value=»LC» >Santa Lucía</option>
                            <option value=»PM» >St. Pierre y Miquelon</option>
                            <option value=»VC» >San Vicente y Granadinas</option>
                            <option value=»WS» >Samoa</option>
                            <option value=»SM» >San Marino</option>
                            <option value=»ST» >Santo Tomé y Príncipe</option>
                            <option value=»SA» >Arabia Saudí</option>
                            <option value=»SN» >Senegal</option>
                            <option value=»SC» >Seychelles</option>
                            <option value=»SL» >Sierra Leona</option>
                            <option value=»SG» >Singapur</option>
                            <option value=»SK» >República Eslovaca</option>
                            <option value=»SI» >Eslovenia</option>
                            <option value=»SB» >Islas Salomón</option>
                            <option value=»SO» >Somalia</option>
                            <option value=»ZA» >República de Sudáfrica</option>
                            <option value=»ES» >España</option>
                            <option value=»LK» >Sri Lanka</option>
                            <option value=»SD» >Sudán</option>
                            <option value=»SR» >Surinam</option>
                            <option value=»SJ» >Islas Svalbard y Jan Mayen</option>
                            <option value=»SZ» >Suazilandia</option>
                            <option value=»SE» >Suecia</option>
                            <option value=»CH» >Suiza</option>
                            <option value=»SY» >Siria</option>
                            <option value=»TW» >Taiwán</option>
                            <option value=»TJ» >Tayikistán</option>
                            <option value=»TZ» >Tanzania</option>
                            <option value=»TH» >Tailandia</option>
                            <option value=»TG» >Togo</option>
                            <option value=»TK» >Islas Tokelau</option>
                            <option value=»TO» >Tonga</option>
                            <option value=»TT» >Trinidad y Tobago</option>
                            <option value=»TN» >Túnez</option>
                            <option value=»TR» >Turquía</option>
                            <option value=»TM» >Turkmenistán</option>
                            <option value=»TC» >Islas Turks y Caicos</option>
                            <option value=»TV» >Tuvalu</option>
                            <option value=»UG» >Uganda</option>
                            <option value=»UA» >Ucrania</option>
                            <option value=»AE» >Emiratos Árabes Unidos</option>
                            <option value=»UK» >Reino Unido</option>
                            <option value=»US» >Estados Unidos</option>
                            <option value=»UM» >Islas menores de Estados Unidos</option>
                            <option value=»UY» >Uruguay</option>
                            <option value=»UZ» >Uzbekistán</option>
                            <option value=»VU» >Vanuatu</option>
                            <option value=»VA» >Ciudad del Vaticano (Santa Sede)</option>
                            <option value=»VE» >Venezuela</option>
                            <option value=»VN» >Vietnam</option>
                            <option value=»VG» >Islas Vírgenes (Reino Unido)</option>
                            <option value=»VI» >Islas Vírgenes (EE.UU.)</option>
                            <option value=»WF» >Islas Wallis y Futuna</option>
                            <option value=»YE» >Yemen</option>
                            <option value=»YU» >Yugoslavia</option>
                            <option value=»ZM» >Zambia</option>
                            <option value=»ZW» >Zimbabue</option>
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
                            data-live-search="true" title="Provincia" name="provincia" id="provincia" >
                            <option value="" selected>Provincia</option>
                            @foreach ($provincia as $p)
                            <option value="{{ $p->id_Provincia }}">{{ $p->Nombre_Provincia }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for=""></label>
                        <select wire:model="selectedDistrito" class="form-control input__style " data-live-search="true"
                            title="Distrito" name="distrito" id="distrito" >
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
                            >
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
                            id="celular" placeholder="Celular">
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
                                        <div class="col-xs-12 col-sm-12 col-md-10 col-lg-12 easyBlue600 @if ($errors->has('ppe'))  text-danger @endif"">
                                                ¿Eres una persona <br>
                                                politicamente expuesta?
                                            </div>
                                            <label class=" form-check-label mr-1 h4" for="">Si</label>
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
                                class="form-control input__style @if ($errors->has('ppecargo')) border border-danger @endif"
                                id="cargo" placeholder="Cargo">
                        </div>
                        <div class="form-group col-md-6">
                            <label for=""></label>
                            <input wire:model.defer="ppemail" type="mail"
                                class="form-control input__style @if ($errors->has('ppemail')) border border-danger @endif"
                                id="casa" placeholder="Correo electrónico">
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
                                    <option value="1922">1922</option>

                                </select>
                            </div>
                        </div>
                        <div class="form-group col-md-6 text-center">
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
                                    <option value="1922">1922</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    @endif
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

    </form>
        </div>
