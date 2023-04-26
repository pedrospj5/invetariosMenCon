<?php

namespace App\Http\Controllers;
use App\Sucursal;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function reporteSucursales(){
        $lista_sucursales = Sucursal::where('estado','=','ACTIVO')->get();
        $pdf = \PDF::loadView('reportes.sucursales',compact('lista_sucursales'));
        return $pdf->stream('sucursales.pdf');
    }
}
