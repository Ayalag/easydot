<div class="container-formulario__info shadow-lg mb-5">
    <div class="container-formulario__titulo underline">envíanos tus datos para cotizar</div>
    <form class="pt-4">
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre"  name="nombre" aria-describedby="nombre" placeholder="nombre" required>
        </div>
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" aria-describedby="celular" placeholder="celular" required>
        </div>
        <div class="form-group">
            <label for="mail">Correo electrónico</label>
            <input type="email" class="form-control" id="mail" placeholder="correo electrónico" required>
        </div>
        <div class="form-group">
            <label for="contacto">Medio de contacto preferido</label>
            <select class="selectpicker"  data-width="100%" title="Escoja una opción" required>
                <option>Whatsapp</option>
                <option>Correo electrónico</option>
                <option>Llamada telefónica</option>
              </select>
        </div>
        <div class="footer text-center">
            <button type="submit" class="btn btn-primary btn-sm">enviar</button>
        </div>

    </form>
</div>

