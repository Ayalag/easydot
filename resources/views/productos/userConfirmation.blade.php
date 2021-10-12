@extends('layouts.app')

@section('content')
<div class="container container-userconfirm">
    <div class="container-userconfirm__title pb-3">
        <p>¡hola!</p>
        <p>¿ya tienes una cuenta easy?</p>
    </div>
    <div class="container-check shadow-lg bg-white rounded">
        <div class="row p-2">
            <div class="col">
                <div class="form-check form-check-inline">
                    <label class="form-check-label pr-2" for="inlineRadio1">si!</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                </div>
            </div>
            <div class="col">
                <div class="form-check form-check-inline">
                    <label class="form-check-label pr-2" for="inlineRadio1">no</label>
                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1"
                        value="option1">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
