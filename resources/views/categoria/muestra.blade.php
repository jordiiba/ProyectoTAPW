@extends('master')

@section('titulo', 'Inicio - Categoria')

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
        <a class="btn btn-primary" href="/categoria/vista_inserta">Agregar</a>
        <br><br>
        <table id="tabla" class="table table-striped">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                    <tr>
                        <td scope="col">{{$categoria->id}}</td>
                        <td>{{$categoria->nombre}}</td>
                        <td><a href="/categoria/vista_actualiza/{{$categoria->id}}">Modificar</a></td>
                        <td><a href="/categoria/vista_borra/{{$categoria->id}}">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
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