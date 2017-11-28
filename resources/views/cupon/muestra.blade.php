@extends('master')

@section('titulo', 'Inicio - Cupon')

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
    <br><br>
    <div style="margin-left: 10%; margin-right: 10%">
        <a class="btn btn-primary" href="/cupon/vista_inserta">Agregar</a>
        <br><br>
        <table id="tabla" class="table table-striped">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Clave</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Descuento</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </thead>
            <tbody>
                @foreach($cupones as $cupon)
                    <tr>
                        <td scope="col">{{$cupon->id}}</td>
                        <td>{{$cupon->clave}}</td>
                        <td>{{$cupon->descripcion}}</td>
                        <td>{{$cupon->descuento}}</td>
                        <td><a href="/cupon/vista_actualiza/{{$cupon->id}}">Modificar</a></td>
                        <td><a href="/cupon/vista_borra/{{$cupon->id}}">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <th scope="col">Id</th>
            <th scope="col">Clave</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Descuento</th>
            <th scope="col">Modificar</th>
            <th scope="col">Eliminar</th>
            </tfoot>
        </table>
    </div>
    <br><br>
@stop

@section('javascripts2')
    @parent
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabla').DataTable();
        });
    </script>
@stop

@section('footer')
    @parent
@stop