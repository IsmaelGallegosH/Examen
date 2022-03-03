<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;


class ProductosController extends Controller
{
    public function index()
    {

        $productos = producto::all();
        return view('productos.productos',compact('productos'));
    }

    public function show(producto $producto)
    {

        
        return view('productos.show',compact('producto'));
    }

    public function edit(producto $producto)
    {
        
        return view("productos.edit", compact('producto'));
    }

    public function create()
    {
        return view('productos.create');
    }

    public function nuevo(Request $request)
    {
        $productos = new producto;

        $productos->upc = $request->upc;
        $productos->descripcion = $request->descripcion;
        $productos->costo = $request->costo;
        $productos->precio = $request->precio;
        $productos->existencia = $request->existencia;
        $productos->save();

        $productos = producto::all();
        return view('productos.productos',compact('productos'));

    }

    public function update(Request $request)
    {
        $productos = producto::find($request->upc);

        $productos->upc = $request->upc;
        $productos->descripcion = $request->descripcion;
        $productos->costo = $request->costo;
        $productos->precio = $request->precio;
        $productos->existencia = $request->existencia;
        $productos->save();

        $productos = producto::all();
        return view('productos.productos',compact('productos'));

    }

    public function delete(producto $producto)
    {

        
        return view('productos.delete',compact('producto'));
    }

    public function destroy(Request $request)
    {

        $productos = producto::find($request->upc);
        $productos->delete();

        $productos = producto::all();
        return view('productos.productos',compact('productos'));
    }

   


    
}
