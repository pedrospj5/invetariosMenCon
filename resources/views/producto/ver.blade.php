@extends('layouts.sistema')

@section('content')
VER PRODUCTO


<!-- About Me Box -->
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Detalles Sucursal</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <strong><i class="fas fa-book mr-1"></i> Codigo Producto</strong>
      <p class="text-muted">
        {{$productos[0]->codigoProducto}}
       
      </p>
      <strong><i class="fas fa-book mr-1"></i> Nombre Producto</strong>
      <p class="text-muted">
        
        {{$productos[0]->nombreProducto}}
      </p>

      <hr>

      <strong><i class="far fa-file-alt mr-1"></i> Datos Producto</strong>

      <p class="text-muted">Presentacion: {{$productos[0]->presentacionProducto}} </p>
      <p class="text-muted">Color: {{$productos[0]->colorProducto}}</p>
      <p class="text-muted">Precio por Mayor:{{$productos[0]->precioMayorProducto}} </p>
      <p class="text-muted">Precio de Feria:{{$productos[0]->precioFeriaProducto}} </p>
      <p class="text-muted">Precio Tienda:{{$productos[0]->precioTiendaProducto}} </p>
      <p class="text-muted">Proveedor: {{$productos[0]->nombreProveedor}} </p>
      <hr>


      <hr>

      

    </div>
    <!-- /.card-body -->
  </div>
@endsection