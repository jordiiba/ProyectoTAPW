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
    <a href="/categoria/vista_inserta">Agregar</a>
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
@stop

@section('footer')
    @parent
@stop