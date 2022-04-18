@component('mail::message')

<span style="color: #033777; font-size:20px; font-weight:800;">¡Hola {{$username}}!</span>

<div style="color: #033777; font-size:16px; font-weight:600;">
Nos alegra mucho que nos hayas contactado.
Confirmamos que hemos recibido tu información para comunicarnos, muy pronto él,
equipo de Bartoli Asesores de Seguros estará en contacto contigo para cotizar y 
asesorarte, ofreciéndote siempre las mejores opciones del mercado.
</div><br>

<div style="padding: 10px; box-shadow: 0 3px 10px rgb(0 0 0 / 0.2)">
    @isset($tipo)
    <div style="color: #033777; font-size:20px; font-weight:800;"><span style="color: #ff0180">_</span>{{$tipo}}</div><br>
    @endisset
    <div style="color: #033777;font-size:16px; font-weight:600;">Datos recibidos:</div><br>
    <div style="color: #033777;font-size:16px; font-weight:400;">Nombre</div>
    <div style="color: #033777;font-size:16px; font-weight:400;">{{$username}}</div><br>
    <div style="color: #033777;font-size:16px; font-weight:400;">Celular</div>
    <div style="color: #033777;font-size:16px; font-weight:400;">{{$usercell}}</div><br>
    <div style="color: #033777;font-size:16px; font-weight:400;">Correo electrónico</div>
    <div style="color: #033777;font-size:16px; font-weight:400;">{{$usermail}}</div><br>
    @isset($userpreferedContact)
    <div style="color: #033777;font-size:16px; font-weight:400;">Medio de contacto preferido</div>
    <div style="color: #033777;font-size:16px; font-weight:400;">{{$userpreferedContact}}</div><br>
    @endisset
    @isset($usermessage)
    <div style="color: #033777;font-size:16px; font-weight:400;">Mensaje:</div>
    <div style="color: #033777;font-size:16px; font-weight:400;">{{$usermessage}}</div><br>
    @endisset
    
</div>

#

<div style="color: #033777;font-size:16px; font-weight:400;">¡Saludos!</div>
<span style="color: #033777;font-size:16px; font-weight:600;">Equipo </span><span style="color: #ff0180;font-size:16px; font-weight:600;">easy</span>


@endcomponent


