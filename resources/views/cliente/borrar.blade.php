@extends('master')

@section('titulo', 'Borra - Cupon')

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
    <form action="#" method="POST" id="form_cupon">
        <div style="margin-left: 30%; margin-right: 30%">
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input id="id" class="form-control" type="text" value="{!!$cupon->id!!}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Clave</label>
                <input id="clave" class="form-control" type="text" value="{!!$cupon->clave!!}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <input id="descripcion" class="form-control" type="text" value="{!!$cupon->descripcion!!}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descuento</label>
                <input id="descuento" class="form-control" type="text" value="{!!$cupon->descuento!!}" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Eliminar</button>
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
                    console.log($(this).attr('clave'));
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
            if (confirm('¿Estas seguro de eliminar los datos?')) {
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
                url: '/cupon/borra/{!!$cupon->id!!}',
                type: "DELETE",

            });
            console.log(request);

            request.done(function(msg) {
                //var response = jQuery.parseJSON(msg);
                var response = msg;
                console.log(request);
                console.log(response);
                if (response.success === true) {
                    alert("Registro eliminado correctamente!");
                    location.href = "/cupon/index";
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