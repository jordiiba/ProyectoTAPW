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
    <a href="">Agregar</a>
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
                    <td></td>
                    <td></td>
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