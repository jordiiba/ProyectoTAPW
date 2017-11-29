@extends('master')

@section('titulo', 'Actualiza - Cliente')

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
    <form action="#" method="POST" id="form_cliente">
        <div style="margin-left: 30%; margin-right: 30%">
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input id="id" class="form-control" type="text" value="{!!$cliente->id!!}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input id="usuario" class="form-control" type="text" value="{!!$cliente->usuario!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input id="contrasena" class="form-control" type="password" value="{!!$cliente->contrasena!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombres</label>
                <input id="nombres" class="form-control" type="text" value="{!!$cliente->nombres!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input id="apellidos" class="form-control" type="text" value="{!!$cliente->apellidos!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input id="correo" class="form-control" type="email" value="{!!$cliente->correo!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Compañia</label>
                <input id="compania" class="form-control" type="text" value="{!!$cliente->compania!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">RFC</label>
                <input id="rfc" class="form-control" type="text" value="{!!$cliente->rfc!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input id="telefono" class="form-control" type="text" value="{!!$cliente->telefono!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input id="direccion" class="form-control" type="text" value="{!!$cliente->direccion!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Codigo Postal</label>
                <input id="codigo_postal" class="form-control" type="text" value="{!!$cliente->codigo_postal!!}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ciudad</label>
                <select class="form-control" id="id_ciudad">
                    @foreach($ciudades as $ciudad)
                        <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Modificar</button>
        </div>
    </form>
    <br><br><br>
@stop

@section('javascripts2')
    @parent
    <script type="text/javascript">
        var required_failed = false;
        $('#form_cupon').submit(function(e) {
            required_failed = false;
            e.preventDefault();
            /*+---------------------------------------------------------------+
            //| este codigo con el fin de obligar campos required en celular  |
              +---------------------------------------------------------------+
            */
            // vailda todos los input
            $('#form_cupon').find('input').each(function() {
                if ($(this).prop('required') == true) {
                    console.log($(this).attr('usuario'));
                    console.log($(this).val());
                    if ($(this).val() == '' && required_failed == false) {
                        required_failed = true;
                        alert("Antes de enviar el formulario debes llenar los campos obligatorios (*)");
                        //$("#" + $(this).attr('name')).focus();
                        $(this).focus();
                    }
                }
                //salimos del loop en cuanto haya un campo obligatorio vacio
                if (required_failed) {
                    return false;
                }
            });

            if (required_failed == true) {
                return;
            }
            //+----------------------------------------------------------------+

            /*+---------------------------------------------------------------+
              |   Ventana de alerta antes de enviar formulario                |
              +---------------------------------------------------------------+*/
            if (confirm('¿Estas seguro de enviar los datos ingresados?')) {
                // if true do nothing
            } else { // if false regresa al formulario
                //myMask.hidePleaseWait();
                return false;
            }
            //----------------------------------------------------------------

            //obtenemos los datos del formulario
            var data = $(this).serializeArray();
            //console.log(data);
            var request = $.ajax({
                url: '/cliente/actualiza/{!!$cliente->id!!}',
                type: "PUT",
                data: {
                    usuario: $('#usuario').val(),
                    contrasena: $('#contrasena').val(),
                    nombres: $('#nombres').val(),
                    apellidos: $('#apellidos').val(),
                    correo: $('#correo').val(),
                    compania: $('#compania').val(),
                    rfc: $('#rfc').val(),
                    telefono: $('#telefono').val(),
                    direccion: $('#direccion').val(),
                    codigo_postal: $('#codigo_postal').val(),
                    id_ciudad: $('#id_ciudad').val()
                }

            });
            console.log(request);

            request.done(function(msg) {
                //var response = jQuery.parseJSON(msg);
                var response = msg;
                console.log(request);
                console.log(response);
                if (response.success === true) {
                    alert("Registro modificado correctamente!");
                    location.href = "/cliente/index";
                } else {
                    alert("Error al crear registro: " + response.mensaje);
                }

                //myMask.hidePleaseWait();
            });

            request.fail(function(jqXHR, textStatus) {
                alert(textStatus);
                //myMask.hidePleaseWait();
            });
        });
    </script>
@stop

@section('footer')
    @parent
@stop