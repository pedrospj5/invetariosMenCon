<?php

namespace App\Http\Controllers;
use App\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_sucursales = Sucursal::where('estado','=','ACTIVO')->get();
        return view('sucursal.listar', ["lista_sucursales"=> $lista_sucursales]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sucursal.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal= new Sucursal;
        $sucursal->nombreSucursal = $request->nombreSucursal;
        $sucursal->direccionSucursal = $request->direccionSucursal;
        $sucursal->ciudadSucursal = $request->ciudadSucursal;
        $sucursal->telefonoSucursal = $request->telefonoSucursal;
        $sucursal->personaEncargadaSucursal = $request->personaEncargadaSucursal;
        $sucursal->estado = "ACTIVO";
        $sucursal->save();
        return redirect('/sucursal')->with('ok', 'sucursal Creada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sucursal=Sucursal::find($id);
        return view('sucursal.ver', compact('sucursal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sucursal=Sucursal::find($id);
        return view('sucursal.editar', compact('sucursal'));
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
        $sucursal=Sucursal::find($id);
        $sucursal->nombreSucursal = $request->nombreSucursal;
        $sucursal->direccionSucursal = $request->direccionSucursal;
        $sucursal->ciudadSucursal = $request->ciudadSucursal;
        $sucursal->telefonoSucursal = $request->telefonoSucursal;
        $sucursal->personaEncargadaSucursal = $request->personaEncargadaSucursal;
        $sucursal->save();
        return redirect('/sucursal')->with('ok', 'sucursal Modificado');
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
