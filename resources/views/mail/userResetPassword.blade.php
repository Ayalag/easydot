@component('mail::message')
# ¡Hola!

Estás recibiendo este email porque se ha solicitado un cambio de contraseña para tu cuenta.

@component('mail::button', ['url' => $url])
Restablecer contraseña
@endcomponent

Este enlace para restablecer la contraseña caduca en 60 minutos.

Si no has solicitado un cambio de contraseña, puedes ignorar o eliminar este e-mail.

Saludos,<br>
easydot
@endcomponent
