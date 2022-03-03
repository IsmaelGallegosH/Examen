@extends('adminlte::page')

@section('title', 'Dashboard')



@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
@stop

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="post" class="form-horizontal">
                    @csrf
                    <div class="card">
                        <div class="card-header">                           
                                <h1 class="card-title">Lista de Tickets</h1>
                                <p class="card-category"> </p>
                      
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-12 text-right">
                                        <a href="" class="btn btn-primary">Agregar Ticket</a>
                                    </div>
                                <div class="table-responsive ">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Id Ticket</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Utilidad</th>
                                            <th>Producto</th>
                                            <th>Id venta</th>

                                            <th class="text-right">Acciones</th>
                                        </thead>
                                        <tbody>
                                            @foreach($ventas as $venta)
                                                <tr>
                                                    <td>{{$venta->id_venta}}</td>
                                                    <td>{{$venta->precio}}</td>
                                                    <td>{{$venta->cantidad}}</td>
                                                    <td>{{$venta->utilidad}}</td>
                                                    <td>{{$venta->fk_id_producto}}</td>
                                                    <td>{{$venta->fk_id_venta}}</td>
                                                    <td class="text-right">
                                                        <a href="" class="btn btn-info"><i class="material-icons">Info</i></a>
                                                        <a href="" class="btn btn-warning"><i class="material-icons">Editar</i></a>
                                                        <a href="" class="btn btn-danger"> <i class="material-icons">Eliminar</i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>  
                        </div>
                    </div>
                </form>
            </div>  
        </div>
    </div>
</div>
@stop



@section('js')
    <script>
        src="https://code.jquery.com/jquery-3.5.1.js"
    </script>
    <script>
        src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"
    </script>
    <script>
        src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"
    </script>
@stop