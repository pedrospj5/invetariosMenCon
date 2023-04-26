<?php

namespace App\Http\Controllers;
use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller

{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_proveedores = Proveedor::where('estado','=','ACTIVO')->get();
        return view('proveedor.listar', ["lista_proveedores"=> $lista_proveedores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proveedor = new Proveedor;
        $proveedor->codigoProveedor = $request->codigoProveedor;
        $proveedor->nombreProveedor = $request->nombreProveedor;
        $proveedor->direccionProveedor = $request->direccionProveedor;
        $proveedor->telefonoProveedor = $request->telefonoProveedor;
        $proveedor->personaContactoProveedor = $request->personaContactoProveedor;
        $proveedor->telefonoPersonaContactoProveedor = $request->telefonoPersonaContactoProveedor;
        $proveedor->correoPersonaContactoProveedor = $request->correoPersonaContactoProveedor;
        $proveedor->estado = "ACTIVO";
        $proveedor->save();
        return redirect('/proveedor')->with('ok', 'proveedor Creado');
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
        $proveedor=Proveedor::find($id);
        return view('proveedor.editar', compact('proveedor'));
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
        $proveedor=Proveedor::find($id);
        $proveedor->codigoProveedor = $request->codigoProveedor;
        $proveedor->nombreProveedor = $request->nombreProveedor;
        $proveedor->direccionProveedor = $request->direccionProveedor;
        $proveedor->telefonoProveedor = $request->telefonoProveedor;
        $proveedor->personaContactoProveedor = $request->personaContactoProveedor;
        $proveedor->telefonoPersonaContactoProveedor = $request->telefonoPersonaContactoProveedor;
        $proveedor->correoPersonaContactoProveedor = $request->correoPersonaContactoProveedor;
        $proveedor->save();
        return redirect('/proveedor')->with('ok', 'proveedor Modificado');
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
