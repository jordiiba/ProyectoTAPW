@extends('master')

@section('titulo', 'Inserta - Cliente')

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
                <label for="exampleInputEmail1">Usuario</label>
                <input id="usuario" class="form-control" type="text" placeholder="Usuario" required>
                <small class="form-text text-muted">Ingrese el usuario del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Contraseña</label>
                <input id="contrasena" class="form-control" type="password" placeholder="Contraseña" required>
                <small class="form-text text-muted">Ingrese la contraseña del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombres</label>
                <input id="nombres" class="form-control" type="text" placeholder="Nombres" required>
                <small class="form-text text-muted">Ingrese los nombres del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Apellidos</label>
                <input id="apellidos" class="form-control" type="text" placeholder="Apellidos" required>
                <small class="form-text text-muted">Ingrese los apellidos del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Correo</label>
                <input id="correo" class="form-control" type="email" placeholder="Correo" required>
                <small class="form-text text-muted">Ingrese el correo del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Compañia</label>
                <input id="compania" class="form-control" type="text" placeholder="Compañia" required>
                <small class="form-text text-muted">Ingrese la compañia del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">RFC</label>
                <input id="rfc" class="form-control" type="text" placeholder="RFC" required>
                <small class="form-text text-muted">Ingrese el RFC del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Telefono</label>
                <input id="telefono" class="form-control" type="text" placeholder="Telefono" required>
                <small class="form-text text-muted">Ingrese el telefono del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input id="direccion" class="form-control" type="text" placeholder="Direccion" required>
                <small class="form-text text-muted">Ingrese la direccion del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Codigo Postal</label>
                <input id="codigo_postal" class="form-control" type="text" placeholder="Codigo Postal" required>
                <small class="form-text text-muted">Ingrese el codigo postal del cliente</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ciudad</label>
                <select class="form-control" id="id_ciudad">
                    @foreach($ciudades as $ciudad)
                        <option value="{{$ciudad->id}}">{{$ciudad->nombre}}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Ingrese la ciudad del cliente</small>
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
        $('#form_cliente').submit(function(e) {
            required_failed = false;
            e.preventDefault();

            /*+---------------------------------------------------------------+
            //| este codigo con el fin de obligar campos required en celular  |
              +---------------------------------------------------------------+
            */
            // vailda todos los input
            $('#form_cliente').find('input').each(function() {
                if ($(this).prop('required') == true) {
                    console.log($(this).attr('usuario'));
                    console.log($(this).val());
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
            //var data = $(this).serializeArray();
            //console.log(data);
            var request = $.ajax({
                url: '/cliente/inserta',
                type: "POST",
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
                    alert("Registro creado correctamente!");
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