@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar producto</h1>
@stop

@section('content')
        <form action="{{route('producto.nuevo')}}" method="post" class="form-horizontal">
            @csrf   
            <div class="form-group">
                <label for="disabledTextInput">ID</label>
                <input type="text" id="disabledTextInput" class="form-control" name="upc" required>
              </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Costo</label>
                    <input type="number" class="form-control" name="costo"  required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Precio</label>
                    <input type="number" class="form-control" name="precio" required>
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Existencia</label>
                    <input type="Number" class="form-control" name="existencia"  required>
                </div>
                <div class="form-group col-md-6">
                    
                </div>

                
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Descripcion</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="descripcion" rows="3"></textarea>
              </div>
           
          <a href="/Productos" class="btn btn-primary">Regresar</a>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop