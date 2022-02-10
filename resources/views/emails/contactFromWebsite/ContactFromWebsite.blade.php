<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuevo Mensaje</title>
</head>

<body>
    <div>
        Has recibido un nuevo mensaje
    </div>
    <div>
        Nombre: {{ $username ?? '' }}
    </div>
    <div>
        Celular: {{ $usercell ?? '' }}
    </div>
    <div>
        Correo: {{ $usermail ?? '' }}
    </div>
    <div>
        Medio de contacto Preferido: {{ $userpreferedContact ?? '' }}
    </div>
    <div>
        Mensaje: {{ $usermessage ?? '' }}
    </div>
    @isset($tipo)
        Desea cotizar un seguro completo de: {{ $tipo }}
    @endisset
</body>

</html>
