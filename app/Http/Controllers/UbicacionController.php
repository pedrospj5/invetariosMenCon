<?php

namespace App\Http\Controllers;
use App\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lista_ubicaciones = Ubicacion::where('estado','=','ACTIVO')->get();
        return view('ubicacion.listar', ["lista_ubicaciones"=> $lista_ubicaciones]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ubicacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ubicacion= new Ubicacion;
        $ubicacion->nombreUbicacion = $request->nombreUbicacion;
        $ubicacion->detalleUbicacion = $request->detalleUbicacion;     
        $ubicacion->estado = "ACTIVO";
        $ubicacion->save();
        return redirect('/ubicacion')->with('ok', 'sucursal Creada');
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
        $ubicacion=Ubicacion::find($id);
        return view('ubicacion.editar', compact('ubicacion'));
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
        $ubicacion= Ubicacion::find($id);
        $ubicacion->nombreUbicacion = $request->nombreUbicacion;
        $ubicacion->detalleUbicacion = $request->detalleUbicacion;     
        $ubicacion->estado = "ACTIVO";
        $ubicacion->save();
        return redirect('/ubicacion')->with('ok', 'sucursal Creada');
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
