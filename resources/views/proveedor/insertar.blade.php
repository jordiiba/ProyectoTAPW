@extends('master')

@section('titulo', 'Inserta - Proveedor')

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
    <form action="#" method="POST" id="form_proveedor">
        <div style="margin-left: 30%; margin-right: 30%">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input id="nombre" class="form-control" type="text" placeholder="Nombre" required>
                <small class="form-text text-muted">Ingrese el nombre del proveedor</small>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Direccion</label>
                <input id="direccion" class="form-control" type="text" placeholder="Direccion" required>
                <small class="form-text text-muted">Ingrese la direccion del cliente</small>
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
        $('#form_proveedor').submit(function(e) {
            required_failed = false;
            e.preventDefault();

            /*+---------------------------------------------------------------+
            //| este codigo con el fin de obligar campos required en celular  |
              +---------------------------------------------------------------+
            */
            // vailda todos los input
            $('#form_proveedor').find('input').each(function() {
                if ($(this).prop('required') == true) {
                    console.log($(this).attr('nombre'));
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
                url: '/proveedor/inserta',
                type: "POST",
                data: {
                    nombre: $('#nombre').val(),
                    direccion: $('#direccion').val()
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
                    location.href = "/proveedor/index";
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