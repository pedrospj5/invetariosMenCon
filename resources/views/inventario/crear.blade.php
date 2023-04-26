@extends('layouts.sistema')

@section('content')
CREAR INVENTARIO
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
            <div class="col-md-12">
            <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> CREAR REGISTRO</h3>
                    </div>               
                    <form method="POST"  action="{{ route('inventario.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="card-body">                       
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Producto</label>
                                <div class="col-sm-12">
                                    <!-- select -->
                                    <div class="form-group">
                                        <select name="producto_id" id="" class="form-control form-control-lg">
                                            @foreach($lista_porductos as $producto)
                                            <option value="{{$producto->id}}"> {{ $producto->codigoProducto}} - {{ $producto->nombreProducto}} -{{ $producto->presentacionProducto}}</option>
                                            @endforeach
                                        </select>
                                      
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sucursal</label>
                                <div class="col-sm-12">
                                    <!-- select -->
                                    <div class="form-group">
                                        <select name="sucursal_id" id="" class="form-control form-control-lg">
                                            @foreach($lista_sucursales as $sucursal)
                                            <option value="{{$sucursal->id}}"> {{ $sucursal->nombreSucursal}}</option>
                                            @endforeach
                                        </select>
                                      
                                    </div>
                                  </div>
                            </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ubicacion</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <select name="ubicacion_id" id="" class="form-control form-control-lg">
                                        @foreach($lista_ubicaciones as $ubicacion)
                                        <option value="{{$ubicacion->id}}"> {{ $ubicacion->nombreUbicacion}}</option>
                                        @endforeach
                                    </select>
                                  
                                </div>
                              </div>
                        </div>
                        <!--<div class="form-group">
                            <label for="exampleInputEmail1">Cantidad</label>                            
                        <input id="cantidad" type="number" class="form-control @error('name') is-invalid @enderror" name="cantidad" value="" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>-->
                                      
                    </div>
                        <div class="card-footer">                           
                            <button type="submit" class="btn btn-primary">GUARDAR</button>                         
                        </div>
                    
                    </form>
              
            </div>
        </div>
    </div>
</div>
</section>
@endsection