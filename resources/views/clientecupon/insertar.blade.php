@extends('master')

@section('titulo', 'Inserta - Cliente Cupon')

@section('styles')
    @parent
@stop

@section('javascripts')
    @parent
@stop

@section('banner')
    @parent
@stop

@section('contenido')
    <br><br><br>
    <form action="#" method="POST" id="form_clientecupon">
        <div style="margin-left: 30%; margin-right: 30%">
            <div class="form-group">
                <label for="exampleInputEmail1">Usurio</label>
                <select class="form-control" id="id_cliente">
                    @foreach($clientes as $cliente)
                        <option value="{{$cliente->id}}">{{$cliente->usuario}}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Ingrese el usuario del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Clave</label>
                <select class="form-control" id="id_cupon">
                    @foreach($cupones as $cupon)
                        <option value="{{$cupon->id}}">{{$cupon->clave}}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Ingrese la clave del cupon</small>
            </div>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
    </form>
    <br><br><br>
@stop

@section('javascripts2')
    @parent
    <script type="text/javascript">
        var required_failed = false;
        $('#form_clientecupon').submit(function(e) {
            e.preventDefault();
            if (confirm('¿Estas seguro de enviar los datos ingresados?')) {
            } else {
                return false;
            }
            var request = $.ajax({
                url: '/clientecupon/inserta',
                type: "POST",
                data: {
                    id_cliente: $('#id_cliente').val(),
                    id_cupon: $('#id_cupon').val()
                }
            });
            request.done(function(msg) {
                var response = msg;
                if (response.success === true) {
                    alert("Registro creado correctamente!");
                    location.href = "/clientecupon/index";
                } else {
                    alert("Error al crear registro: " + response.mensaje);
                }
            });
            request.fail(function(jqXHR, textStatus) {
                alert(textStatus);
            });
        });
    </script>
@stop

@section('footer')
    @parent
@stop