@extends('master')

@section('titulo', 'Borra - Categoria')

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
    <form action="#" method="POST" id="form_categoria">
        <input id="id" type="text" value="{!!$categoria->id!!}" disabled>
        <input id="nombre" type="text" value = "{{$categoria->nombre}}" disabled>
        <input type="submit" value="Elimina">
    </form>
@stop

@section('javascripts2')
    @parent
    <script type="text/javascript">
        var required_failed = false;
        $('#form_categoria').submit(function(e) {
            required_failed = false;
            e.preventDefault();
            /*+---------------------------------------------------------------+
            //| este codigo con el fin de obligar campos required en celular  |
              +---------------------------------------------------------------+
            */
            // vailda todos los input
            $('#form_categoria').find('input').each(function() {
                if ($(this).prop('required') == true) {
                    console.log($(this).attr('name'));
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
              |     validamos que el email tenga la estructura correcta       |
              +---------------------------------------------------------------+ */
            /*var x = document.forms["formreg"]["email"].value;
            var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");
            if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
                alert("ERROR: email incorrecto.\nPorfavor, ingrese una direccion de e-mail correcta");
                required_failed = true;
                $("#email").focus();
                myMask.hidePleaseWait();
                return false;
            }*/
            //+----------------------------------------------------------------+

            /*+---------------------------------------------------------------+
              |     validamos la ciudad y el estado                           |
              +---------------------------------------------------------------+ */

            /*if($('input:radio[name=extranjero]:checked').val() == 0) {
                if ($("#select-estados").val() == "") {
                    alert("ERROR: debe especificar un estado");
                    myMask.hidePleaseWait();
                    return false;
                }
                if ($("#select-ciudades").val() == "") {
                    alert("ERROR: debe especificar una ciudad");
                    myMask.hidePleaseWait();
                    return false;
                }
            } else {
                if ($("#pais").val().trim() == "") {
                    alert("ERROR: debe especificar un pais");
                    myMask.hidePleaseWait();
                    return false;
                }

                if ($("#estado_extranjero").val().trim() == "") {
                    alert("ERROR: debe especificar un estado");
                    myMask.hidePleaseWait();
                    return false;
                }
            }*/

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
                url: '/categoria/borra/{!!$categoria->id!!}',
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
                    location.href = "/categoria/index";
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