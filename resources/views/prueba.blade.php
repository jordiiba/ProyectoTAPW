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
    <div class="welcome" id="welcome">
        <div class="container">
            <div class="w3-welcome-heading">
                <h2>Bienvenido</h2>
            </div>
            <div class="w3l-welcome-text">
                <p>Nam libero tempore cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus omnis optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae </p>
            </div>
        </div>
    </div>
@stop

@section('footer')
    @parent
@stop