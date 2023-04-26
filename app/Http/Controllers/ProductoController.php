<?php

namespace App\Http\Controllers;
use App\Proveedor;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_porductos = Producto::where('estado','=','ACTIVO')->get();
        return view('producto.listar', ["lista_porductos"=> $lista_porductos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            $lista_proveedores = Proveedor::where('estado','=','ACTIVO')->get();
            return view('producto.crear', ["lista_proveedores"=> $lista_proveedores]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto();
        $producto->codigoProducto=$request->codigoProducto;
        $producto->nombreProducto=$request->nombreProducto;
        $producto->presentacionProducto=$request->presentacionProducto;
        $producto->colorProducto=$request->colorProducto;
        $producto->precioMayorProducto=$request->precioMayorProducto;
        $producto->precioFeriaProducto=$request->precioFeriaProducto;
        $producto->precioTiendaProducto=$request->precioTiendaProducto;
        $producto->proveedor_id=$request->proveedor_id;
        $producto->estado="ACTIVO";
        $producto->save();
        return redirect('/producto')->with('ok', 'producto Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productos = DB::table('productos')
        ->join('proveedors','proveedors.id','=','productos.proveedor_id')     
        ->where('productos.id', '=', $id)
        ->get();
        return view('producto.ver', compact('productos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
   
    {
        $pro=Producto::find($id);
        $producto = DB::table('productos')
        ->join('proveedors','proveedors.id','=','productos.proveedor_id')     
        ->where('productos.id', '=', $id)
        ->get();
        $lista_proveedores = Proveedor::where('estado','=','ACTIVO')->get();    
        return view('producto.editar', compact('pro','producto','lista_proveedores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->codigoProducto=$request->codigoProducto;
        $producto->nombreProducto=$request->nombreProducto;
        $producto->presentacionProducto=$request->presentacionProducto;
        $producto->colorProducto=$request->colorProducto;
        $producto->precioMayorProducto=$request->precioMayorProducto;
        $producto->precioFeriaProducto=$request->precioFeriaProducto;
        $producto->precioTiendaProducto=$request->precioTiendaProducto;
        $producto->proveedor_id=$request->proveedor_id;        
        $producto->save();
        return redirect('/producto')->with('ok', 'producto Creado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
