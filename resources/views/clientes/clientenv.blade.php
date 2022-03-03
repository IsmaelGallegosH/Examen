@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cliente</h1>
@stop

@section('content')
        <form action="{{route('clientes.guardar')}}" method="post" class="form-horizontal">
            @csrf   
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email"  required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Usuario</label>
                    <input type="text" class="form-control" name="usuario" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre</label>
                    <input type="text" class="form-control" name="nombre" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Apellido</label>
                    <input type="text" class="form-control" name="apellido" required>
                </div>
            </div>

            <div class="col-md-6 mb-3">
                <label for="validationCustom03">Fecha Nacimiento</label>
                <input type="date" class="form-control" name="fecha_nacimiento" required>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Direccion</label>
                <textarea class="form-control" name="direccion" rows="3" required></textarea>
            </div>


           
          <a href="{{route('clientes.index')}}" class="btn btn-primary">Regresar</a>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop