@extends('layouts.reporte')

@section('content')
<h3 id="titulo">Reporte Sucursales</h3>
<div class="container-fluid">
    <div class="table-bordered">
    <table class="table table-sm">
        <thead class="thead-dark"> 
          <tr>
            <th scope="col">NOMBRE</th>
            <th scope="col">DIRECCION</th>
            <th scope="col">CIUDAD</th>
            <th scope="col">TELEFONO</th>
            <th scope="col">ENCARGADO</th>
          </tr>
        </thead>
        <tbody>          
            @foreach($lista_sucursales as $suc)
            <tr>
            <td>{{$suc->nombreSucursal}}</td>
              <td>{{$suc->direccionSucursal}}</td>
              <td>{{$suc->ciudadSucursal}}</td>
              <td>{{$suc->telefonoSucursal}}</td>
              <td>{{$suc->personaEncargadaSucursal}}</td>     
            </tr>
            @endforeach              
        </tbody>
    </table>
    </div>
</div>
@endsection
<style>
    
    #titulo {
      text-align: center;
    }
    </style>