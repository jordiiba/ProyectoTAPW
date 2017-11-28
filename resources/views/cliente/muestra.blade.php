@extends('master')

@section('titulo', 'Inicio - Cliente')

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
    <div style="margin-left: 0%; margin-right: 0%">
        <a class="btn btn-primary" href="/cliente/vista_inserta">Agregar</a>
        <br><br>
        <table id="tabla" class="table table-striped">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Usuario</th>
                <th scope="col">Contraseña</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Correo</th>
                <th scope="col">Compañia</th>
                <th scope="col">RFC</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Codigo Postal</th>
                <th scope="col">Ciudad</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </thead>
            <tbody>
                @foreach($clientes as $cliente)
                    <tr>
                        <td scope="col">{{$cliente->id}}</td>
                        <td>{{$cliente->usuario}}</td>
                        <td>{{$cliente->contrasena}}</td>
                        <td>{{$cliente->nombres}}</td>
                        <td>{{$cliente->apellidos}}</td>
                        <td>{{$cliente->correo}}</td>
                        <td>{{$cliente->compania}}</td>
                        <td>{{$cliente->rfc}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->direccion}}</td>
                        <td>{{$cliente->codigo_postal}}</td>
                        <td>{{$cliente->ciudad}}</td>
                        <td><a href="/cliente/vista_actualiza/{{$cliente->id}}">Modificar</a></td>
                        <td><a href="/cliente/vista_borra/{{$cliente->id}}">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Contraseña</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Correo</th>
            <th scope="col">Compañia</th>
            <th scope="col">RFC</th>
            <th scope="col">Telefono</th>
            <th scope="col">Direccion</th>
            <th scope="col">Codigo Postal</th>
            <th scope="col">Ciudad</th>
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