@component('mail::message')
# ¡Hola {{ $details['nombre'] }}! 

Estamos muy contentos de contar contigo como parte de la familia easy, ahora ten
toda la tranquilidad de contar tú también con nosotros, con Bartoli Asesores de 
Seguros y con el respaldo de la aseguradora que has elegido, porque a partir de este 
momento ya tienes cobertura.

<p>
<img src="https://www.easydot.com.pa/public/includes/images/mails/body_mail.png" alt="">
</p>

Recuerda que, si tienes alguna consulta puedes comunicarte con nosotros a 
través de nuestro correo info@easydot.com.pa o vía whatsapp en nuestros horario
de atención.

También ponemos a tu disposición nuestro directorio en el centro de ayuda easy,
en donde encontrarás los canales de comunicación con las aseguradoras, con
Bartoli y con easy.

Puedes descargar tu comprobante en el siguiente <a href="{{ $details['url'] }}">enlace</a>

@endcomponent
