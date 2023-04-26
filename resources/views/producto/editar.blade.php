@extends('layouts.sistema')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
            <div class="col-md-12">
            <!-- general form elements -->
                <div class="card card-warning">
                    <div class="card-header">
                        <h3 class="card-title"> MODIFICAR PRODUCTO</h3>
                    </div>               
                    <form method="POST"  action="{{ route('producto.update',$pro->id) }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                    <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Codigo Producto</label>                            
                        <input id="codigoProducto" type="text" class="form-control @error('name') is-invalid @enderror" name="codigoProducto" value="{{$pro->codigoProducto}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>  
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre Producto</label>                            
                        <input id="nombreProducto" type="text" class="form-control @error('name') is-invalid @enderror" name="nombreProducto" value="{{$pro->nombreProducto}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Presentacion Producto</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                               
                                  <select name="presentacionProducto" id="" class="form-control" >
                                    <option value="{{$pro->presentacionProducto}}">{{$pro->presentacionProducto}}</option>
                                    <option value="PIEZA">PIEZA</option>
                                    <option value="PIEZA IZQUIERDA">PIEZA IZQUIERDA</option>
                                    <option value="PIEZA DERECHA">PIEZA DERECHA</option>
                                    <option value="SET">SET</option>
                                    <option value="PAR">PAR</option>                               
                                  
                                  </select>
                                </div>
                              </div>
                        </div><div class="form-group">
                            <label for="exampleInputEmail1">Color Producto</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                               
                                  <select name="colorProducto" id="" class="form-control" >
                                    <option value="{{$pro->colorProducto}}">{{$pro->colorProducto}}</option>
                                    <option value="ROJO">ROJO</option>
                                    <option value="NARANJA">NARANJA</option>
                                    <option value="VERDE">VERDE</option>
                                    <option value="AZUL">AZUL</option>
                                    <option value="BLANCO">BLANCO</option>
                                    <option value="AMARILLO">AMARILLO</option>
                                    <option value="NEGRO">NEGRO</option>                            
                                    <option value="SIN COLOR">SIN COLOR</option> 
                                  </select>
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Precio Producto Por Mayor</label>                            
                        <input id="precioMayorProducto" type="number" step="0.01" class="form-control @error('name') is-invalid @enderror" name="precioMayorProducto" value="{{$pro->precioMayorProducto}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Precio Producto Feria</label>                            
                        <input id="precioFeriaProducto" type="number" step="0.01" class="form-control @error('name') is-invalid @enderror" name="precioFeriaProducto" value="{{$pro->precioFeriaProducto}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Precio Producto Tienda</label>                            
                        <input id="precioTiendaProducto" type="number" step="0.01" class="form-control @error('name') is-invalid @enderror" name="precioTiendaProducto" value="{{$pro->precioTiendaProducto}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Proveedor</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                                    <select name="proveedor_id" id="" class="form-control form-control-lg">
                                        <option value="{{$pro->proveedor_id}}">{{$producto[0]->nombreProveedor}}</option>
                                        @foreach($lista_proveedores as $proveedor)
                                        <option value="{{$proveedor->id}}"> {{ $proveedor->nombreProveedor}}</option>
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