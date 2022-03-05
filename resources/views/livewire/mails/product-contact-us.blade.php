<div>
    <div wire:ignore.self class="container-formulario__info shadow-lg mb-5">
        <div class="container-formulario__titulo underline">envíanos tus datos para cotizar</div>
        <form wire:submit.prevent="productContactUs" class="pt-4">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input wire:model.defer="nombre" type="text" class="form-control" id="nombre" name="nombre"
                    aria-describedby="nombre" placeholder="nombre" required>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input wire:model.defer="celular" type="tel" class="form-control" id="celular" name="celular"
                    aria-describedby="celular" placeholder="celular"  pattern="[0-9]{8}" required>
            </div>
            <div class="form-group">
                <label for="mail">Correo electrónico</label>
                <input wire:model.defer="mail" type="email" class="form-control" id="mail" name="mail"
                    placeholder="correo electrónico" required>
            </div>
            <div wire:ignore id="for-contact" class="form-group">
                <label for="contacto">Medio de contacto preferido</label>
                <select wire:model.defer="contacto" class="selectpicker" data-width="100%" title="Escoja una opción"
                    name="contacto" required data-container="#for-contact">
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
</div>
