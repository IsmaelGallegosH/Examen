@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Agregar venta</h1>
@stop

@section('content')
        <form action="{{route('ventas.store')}}" method="post" class="form-horizontal">
            @csrf   
            <div class="form-group">
                <label for="exampleFormControlSelect1">Vendedor</label>
                <select class="form-control" id="exampleFormControlSelect1" name="empleado">


                  @foreach($empleados as $empleado)
                    <option value="{{$empleado->id_empleado}}" >{{ $empleado->nombre . " ". $empleado->apellido }}</option>
                  @endforeach

                </select>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect1">Cliente</label>

                <select class="form-control" id="exampleFormControlSelect1" name="cliente">
                <label for="exampleFormControlSelect1">Cliente</label>

                @foreach($clientes as $cliente)
                    <option value="{{$cliente->id_cliente}}" >{{ $cliente->nombre . " ". $cliente->apellido }}</option>
                  @endforeach

                </select>

              </div>

            
        
                <div class="form-group col-md-6">
                    <label for="inputCity">Total</label>
                    <input type="text" class="form-control" id="inputCity" readonly>
                </div>
                 
                
            </div>
           
          <a href="/Ventas" class="btn btn-primary">Regresar</a>
          <button type="submit" class="btn btn-success">Guardar</button>
        </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop