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
    <br><br><br>
    <form action="#" method="POST" id="form_clientecupon">
        <div style="margin-left: 30%; margin-right: 30%">
            <div class="form-group">
                <label for="exampleInputEmail1">Id</label>
                <input id="id" class="form-control" type="text" value="{!!$clientecupon->id!!}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Usuario</label>
                <input class="form-control" type="text" value = "{{$clientecupon->usuario}}" disabled>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Clave</label>
                <input class="form-control" type="text" value = "{{$clientecupon->clave}}" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Eliminar</button>
        </div>
    </form>
    <br><br><br>
@stop

@section('javascripts2')
    @parent
    <script type="text/javascript">
        $('#form_clientecupon').submit(function(e) {
            required_failed = false;
            e.preventDefault();
            if (confirm('¿Estas seguro de eliminar los datos?')) {
            } else {
                return false;
            }
            var request = $.ajax({
                url: '/clientecupon/borra/{!!$clientecupon->id!!}',
                type: "DELETE",
            });
            request.done(function(msg) {
                var response = msg;
                if (response.success === true) {
                    alert("Registro eliminado correctamente!");
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