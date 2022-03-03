@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
        <form action="" method="post" class="form-horizontal">
            @csrf   
            <div class="form-group">
                <label for="disabledTextInput">ID</label>
                <input type="text" id="disabledTextInput" class="form-control" name="id_empleado" value="{{$empleado->id_empleado}}" readonly>
              </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" name="email" value="{{$empleado->email}}" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Telefono</label>
                    <input type="number" class="form-control" name="telefono" value="{{$empleado->telefono}}" readonly>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre</label>
                    <input type="text" class="form-control" name="nombre" value="{{$empleado->nombre}}" readonly>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Apellido</label>
                    <input type="text" class="form-control" name="apellido" value="{{$empleado->apellido}}" readonly>
                </div>
            </div>

           
          <a href="{{route('empleados.index')}}" class="btn btn-primary">Regresar</a>
        </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop