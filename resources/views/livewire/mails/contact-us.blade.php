<div>
    <div class="container-formulario__contact-us shadow-lg mb-5">
        <div class="container-formulario__contact-us__titulo underline">te gustaria contactarnos?</div>
        <form wire:submit.prevent="contactUs" class="pt-4">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input wire:model="nombre" type="text" class="form-control" id="nombre" name="nombre"
                    aria-describedby="nombre" placeholder="nombre" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input wire:model="celular" type="text" class="form-control" id="celular" name="celular"
                    aria-describedby="celular" placeholder="celular" required>
            </div>
            <div class="form-group">
                <label for="mail">Correo electrónico</label>
                <input wire:model="mail" type="email" class="form-control" id="mail" name="mail"
                    placeholder="correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="textarea">Envíanos tu mensaje</label>
                <textarea wire:model="mensaje" type="textarea" class="form-control" id="textarea" name="textarea"
                    placeholder="Mensaje" required></textarea>
            </div>
            <div class="footer text-right">
                <button type="submit" class="btn btn-primary btn-sm">enviar</button>
            </div>
        </form>
    </div>

</div>
