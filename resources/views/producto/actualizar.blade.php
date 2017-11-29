@extends('master')

@section('titulo', 'Actualiza - Producto')

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
    <form action="#" method="POST" id="form_producto">
        <div style="margin-left: 30%; margin-right: 30%">
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input id="id" class="form-control" type="text" value="{!!$producto->id!!}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre</label>
                <input id="nombre" class="form-control" type="text" value = "{{$producto->nombre}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <input id="descripcion" class="form-control" type="text" value = "{{$producto->descripcion}}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Precio de Venta</label>
                <input id="precio_venta" class="form-control" type="text" value="{{$producto->precio_venta}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Stock</label>
                <input id="stock" class="form-control" type="text" value="{{$producto->stock}}">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Categoria</label>
                <select class="form-control" id="id_categoria">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
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
        $('#form_producto').submit(function(e) {
            required_failed = false;
            e.preventDefault();
            /*+---------------------------------------------------------------+
            //| este codigo con el fin de obligar campos required en celular  |
              +---------------------------------------------------------------+
            */
            // vailda todos los input
            $('#form_producto').find('input').each(function() {
                if ($(this).prop('required') == true) {
                    console.log($(this).attr('nombre'));
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
                url: '/producto/actualiza/{!!$producto->id!!}',
                type: "PUT",
                data: {
                    nombre: $('#nombre').val(),
                    descripcion: $('#descripcion').val(),
                    precio_venta: $('#precio_venta').val(),
                    stock: $('#stock').val(),
                    id_categoria: $('#id_categoria').val()
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
                    location.href = "/producto/index";
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