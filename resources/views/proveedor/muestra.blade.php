@extends('master')

@section('titulo', 'Inicio - Proveedor')

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
        <a class="btn btn-primary" href="/proveedor/vista_inserta">Agregar</a>
        <br><br>
        <table id="tabla" class="table table-striped">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td scope="col">{{$proveedor->id}}</td>
                        <td>{{$proveedor->nombre}}</td>
                        <td>{{$proveedor->direccion}}</td>
                        <td><a href="/proveedor/vista_actualiza/{{$proveedor->id}}">Modificar</a></td>
                        <td><a href="/proveedor/vista_borra/{{$proveedor->id}}">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Direccion</th>
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