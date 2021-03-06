@extends('master')

@section('titulo', 'Inserta - Producto')

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
                <label for="exampleInputEmail1">Nombre</label>
                <input id="nombre" class="form-control" type="text" placeholder="Nombre">
                <small class="form-text text-muted">Ingrese nombre del producto</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Descripcion</label>
                <input id="descripcion" class="form-control" type="text" placeholder="Descripcion">
                <small class="form-text text-muted">Ingrese una descripcion</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Precio de Venta</label>
                <input id="precio_venta" class="form-control" type="text" placeholder="Precio de venta">
                <small class="form-text text-muted">Ingrese el precio de venta</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Stock</label>
                <input id="stock" class="form-control" type="text" placeholder="Stock">
                <small class="form-text text-muted">Ingrese la canidad de stock</small>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">Categoria</label>
                <select class="form-control" id="id_categoria">
                    @foreach($categorias as $categoria)
                        <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Ingrese la categoria</small>
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
        $('#form_producto').submit(function(e) {
            required_failed = false;
            e.preventDefault();

            /*+---------------------------------------------------------------+
            //| este codigo con el fin de obligar campos required en celular  |
              +---------------------------------------------------------------+
            */
            // vailda todos los input
            $('#form_producto').find('input').each(function() {
                if ($(this).prop('required') == true)
                {
                    console.log($(this).attr('nombre'));
                    console.log($(this).val());
                    console.log($(this).attr('descripcion'));
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
                url: '/producto/inserta',
                type: "POST",
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
                    alert("Registro creado correctamente!");
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