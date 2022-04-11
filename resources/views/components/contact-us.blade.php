<div class="container-formulario__contact-us shadow-lg mb-5">
    <div class="container-formulario__contact-us__titulo underline">te gustaría contactarnos?</div>
    <form method="" action="" class="pt-4">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre"
                placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="celular">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" aria-describedby="celular"
                placeholder="Celular" required>
        </div>
        <div class="form-group">
            <label for="mail">Correo electrónico</label>
            <input type="email" class="form-control" id="mail" name="mail" placeholder="Correo electrónico" required>
        </div>
        <div class="form-group">
            <label for="textarea">Envíanos tu mensaje</label>
            <input type="textarea" class="form-control" id="textarea" name="textarea" placeholder="Mensaje" required
                style="height: 100px">
        </div>
        <div class="footer text-right">
            <button type="submit" class="btn btn-primary btn-sm">enviar</button>
        </div>
    </form>
</div>
