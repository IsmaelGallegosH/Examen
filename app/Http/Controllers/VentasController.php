<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\venta;
use App\Models\cliente;
use App\Models\empleado;
use App\Models\ventadetalle;


class VentasController extends Controller
{
    public function index()
    {


        $ventas = venta::select('ventas.id_venta', 'ventas.total','cliente.nombre','cliente.apellido')->join('cliente', 'ventas.fk_id_cliente', '=', 'cliente.id_cliente')->get();

        return view('ventas.ventas',compact('ventas'));
    }

    public function create()
    {

        $ventas = venta::all();
        $clientes = cliente::all();
        $empleados = empleado::all();
        return view('ventas.create',compact('empleados', 'ventas', 'clientes'));
    }

    public function store(Request $request)
    {   
        $venta = new venta;
        $venta->total = 0;
        $venta->estatus = 0;
        $venta->fk_id_empleado = $request->empleado;
        $venta->fk_id_cliente = $request->cliente;
        $venta->save();

        $ventasdet = new ventadetalle;
        $ventasdet->precio = 0;
        $ventasdet->cantidad = 0;
        $ventasdet->utilidad = 0;
        $ventasdet->fk_id_venta = $venta->id_venta;
        $ventasdet->fk_id_producto = 1;
        $ventasdet->save();

        $ventas = venta::all();
        return view('ventas.ventas',compact('ventas'));
    }

    public function ver(venta $venta)
    {
        $ventas = venta::select('*')->join('venta-detalle', 'ventas.id_venta', '=', 'venta-detalle.fk_id_venta')->where('venta-detalle.fk_id_venta','=',$venta->id_venta)->get();
        
        
        return view('ventas.tickets.tickets',compact('ventas'));
    }
}
