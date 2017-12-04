@extends('master')

@section('titulo', 'Inicio - Cliente Cupon')

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
        <a class="btn btn-primary" href="/clientecupon/vista_inserta">Agregar</a>
        <br><br>
        <table id="tabla" class="table table-striped">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Usuario</th>
                <th scope="col">Clave</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </thead>
            <tbody>
                @foreach($clientecupon as $clicup)
                    <tr>
                        <td scope="col">{{$clicup->id}}</td>
                        <td>{{$clicup->usuario}}</td>
                        <td>{{$clicup->clave}}</td>
                        <td><a href="/clientecupon/vista_actualiza/{{$clicup->id}}">Modificar</a></td>
                        <td><a href="/clientecupon/vista_borra/{{$clicup->id}}">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
            <th scope="col">Id</th>
            <th scope="col">Usuario</th>
            <th scope="col">Clave</th>
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