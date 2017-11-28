@extends('master')

@section('titulo', 'Inicio')

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
    <table id="tabla">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Modificar</th>
            <th>Eliminar</th>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nombre}}</td>
                    <td><a href="/categoria/vista_actualiza/{{$categoria->id}}">Modificar</a></td>
                    <td><a href="/categoria/vista_borra/{{$categoria->id}}">Eliminar</a></td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>

        </tfoot>
    </table>
@stop

@section('footer')
    @parent
@stop