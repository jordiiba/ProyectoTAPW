@extends('master')

@section('titulo', 'Inicio - Producto')

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
        <a class="btn btn-primary" href="/producto/vista_inserta">Agregar</a>
        <br><br>
        <table id="tabla" class="table table-striped">
            <thead>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio Venta</th>
                <th scope="col">Stock</th>
                <th scope="col">Imagen</th>
                <th scope="col">Categoria</th>
                <th scope="col">Modificar</th>
                <th scope="col">Eliminar</th>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                    <tr>
                        <td scope="col">{{$producto->id}}</td>
                        <td>{{$producto->nombre}}</td>
                        <td>{{$producto->descripcion}}</td>
                        <td>{{$producto->precio_venta}}</td>
                        <td>{{$producto->stock}}</td>
                        <td>{{$producto->imagen}}</td>
                        <td>{{$producto->id_categoria}}</td>
                        <td><a href="/producto/vista_actualiza/{{$producto->id}}">Modificar</a></td>
                        <td><a href="/producto/vista_borra/{{$producto->id}}">Eliminar</a></td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <th scope="col">Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Precio Venta</th>
                <th scope="col">Stock</th>
                <th scope="col">Imagen</th>
                <th scope="col">Categoria</th>
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