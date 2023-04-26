<?php

namespace App\Http\Controllers;
use App\Producto;
use App\Ubicacion;
use App\Sucursal;
use App\Inventario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_inventario = DB::table('inventarios')
        ->join('productos','productos.id','=','inventarios.producto_id')
        ->join('sucursals','sucursals.id','=','inventarios.sucursal_id')
        ->join('ubicacions','ubicacions.id','=','inventarios.ubicacion_id')
        ->select('inventarios.id','productos.nombreProducto','sucursals.nombreSucursal','ubicacions.nombreUbicacion','inventarios.cantidad')
        ->get();
        return view('inventario.listar', ["lista_inventario"=> $lista_inventario]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lista_porductos = Producto::where('estado','=','ACTIVO')->get();
        $lista_ubicaciones = Ubicacion::where('estado','=','ACTIVO')->get();
        $lista_sucursales = Sucursal::where('estado','=','ACTIVO')->get();
        return view('inventario.crear', compact('lista_porductos','lista_ubicaciones', 'lista_sucursales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inventario=new Inventario();
        $inventario->producto_id=$request->producto_id;
        $inventario->sucursal_id=$request->sucursal_id;
        $inventario->ubicacion_id=$request->ubicacion_id;
        $inventario->cantidad=0;
        $inventario->save();
        return redirect('/inventario')->with('ok', 'inventario Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lista_porductos = Producto::where('estado','=','ACTIVO')->get();
        $lista_ubicaciones = Ubicacion::where('estado','=','ACTIVO')->get();
        $lista_sucursales = Sucursal::where('estado','=','ACTIVO')->get();
        $registro_inventario = DB::table('inventarios')
        ->join('productos','productos.id','=','inventarios.producto_id')
        ->join('sucursals','sucursals.id','=','inventarios.sucursal_id')
        ->join('ubicacions','ubicacions.id','=','inventarios.ubicacion_id')
        ->select('inventarios.id','productos.codigoProducto','productos.presentacionProducto','productos.nombreProducto','sucursals.nombreSucursal','ubicacions.nombreUbicacion','inventarios.cantidad','inventarios.producto_id', 'inventarios.sucursal_id', 'inventarios.ubicacion_id')     
        ->where('inventarios.id', '=', $id)
        ->get();
        return view('inventario.editar', compact('registro_inventario','lista_porductos','lista_ubicaciones', 'lista_sucursales'));
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
        $inventario=Inventario::find($id);
        $inventario->producto_id=$request->producto_id;
        $inventario->sucursal_id=$request->sucursal_id;
        $inventario->ubicacion_id=$request->ubicacion_id;       
        $inventario->save();
        return redirect('/inventario')->with('ok', 'inventario Creado');

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
