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
    <table id="tabla">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->id}}</td>
                    <td>{{$categoria->nombre}}</td>
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