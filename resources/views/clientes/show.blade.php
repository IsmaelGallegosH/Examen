@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Cliente</h1>
@stop

@section('content')
        <form>
            <fieldset disabled>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Email</label>
                    <input type="email" class="form-control" id="inputEmail4"  value="{{$cliente->email}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Usuario</label>
                    <input type="text" class="form-control" id="inputPassword4" value="{{$cliente->usuario}}">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nombre</label>
                    <input type="email" class="form-control" id="disabledTextInput" value="{{$cliente->nombre}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Apellido</label>
                    <input type="text" class="form-control" id="disabledTextInput" value="{{$cliente->apellido}}">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="validationCustom03">Fecha Nacimiento</label>
                    <input type="date" class="form-control" name="fecha_nacimiento" value="{{$cliente->fecha_nacimiento}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">ID</label>
                    <input type="text" class="form-control" name="id_cliente" value="{{$cliente->id_cliente}}" readonly>
                </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Direccion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{$cliente->direccion}}</textarea>
            </div>


           
        </fieldset>
          <a href="{{route('clientes.index')}}" class="btn btn-primary">Regresar</a>
        </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop