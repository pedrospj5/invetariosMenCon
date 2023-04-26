@extends('layouts.sistema')

@section('content')
{{$registro_inventario}}
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
            <div class="col-md-12">
            <!-- general form elements -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"> MODIFICAR REGISTRO INVENTARIO</h3>
                    </div>               
                <form method="POST"  action="{{ route('inventario.update',$registro_inventario[0]->id) }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Producto</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <select name="producto_id" id="" class="form-control form-control-lg">
                                        <option value="{{$registro_inventario[0]->producto_id}}"> {{ $registro_inventario[0]->codigoProducto}} - {{ $registro_inventario[0]->nombreProducto}} - {{ $registro_inventario[0]->presentacionProducto}} </option>
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
                                        <option value="{{$registro_inventario[0]->sucursal_id}}"> {{ $registro_inventario[0]->nombreSucursal}}</option>
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
                                    <option value="{{$registro_inventario[0]->ubicacion_id}}"> {{ $registro_inventario[0]->nombreUbicacion}}</option>
                                    @foreach($lista_ubicaciones as $ubicacion)
                                    <option value="{{$ubicacion->id}}"> {{ $ubicacion->nombreUbicacion}}</option>
                                    @endforeach
                                </select>
                              
                            </div>
                          </div>
                    </div>
                        
                                             
                        
                       
                       
                    </div>
                        <div class="card-footer">                           
                            <button type="submit" class="btn btn-primary">EDITAR</button>                         
                        </div>
                    
                    </form>
              
            </div>
        </div>
    </div>
</div>
</section>
@endsection