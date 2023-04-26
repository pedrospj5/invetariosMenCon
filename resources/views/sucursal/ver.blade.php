@extends('layouts.sistema')

@section('content')

 <!-- About Me Box -->
 <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Detalles Sucursal</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <strong><i class="fas fa-book mr-1"></i> Nombre</strong>

      <p class="text-muted">
        {{$sucursal->nombreSucursal}}
      </p>

      <hr>

      <strong><i class="fas fa-map-marker-alt mr-1"></i> Informacion</strong>

      <p class="text-muted">{{$sucursal->direccionSucursal}} </p>
      <p class="text-muted">{{$sucursal->ciudadSucursal}}</p>
      <p class="text-muted">{{$sucursal->telefonoSucursal}} </p>
      <hr>


      <hr>

      <strong><i class="far fa-file-alt mr-1"></i> Encargado</strong>

      <p class="text-muted">{{$sucursal->personaEncargadaSucursal}}.</p>
    </div>
    <!-- /.card-body -->
  </div>
@endsection