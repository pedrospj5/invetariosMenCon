@extends('layouts.sistema')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
          <!-- left column -->
            <div class="col-md-12">
            <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title"> CREAR PRODUCTO</h3>
                    </div>               
                    <form method="POST"  action="{{ route('producto.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Codigo Producto</label>                            
                        <input id="codigoProducto" type="text" class="form-control @error('name') is-invalid @enderror" name="codigoProducto" value="" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>  
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre Producto</label>                            
                        <input id="nombreProducto" type="text" class="form-control @error('name') is-invalid @enderror" name="nombreProducto" value="" required autocomplete="name" autofocus>
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
                        <input id="precioMayorProducto" type="number" step="0.01" class="form-control @error('name') is-invalid @enderror" name="precioMayorProducto" value="" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Precio Producto Feria</label>                            
                        <input id="precioFeriaProducto" type="number" step="0.01" class="form-control @error('name') is-invalid @enderror" name="precioFeriaProducto" value="" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Precio Producto Tienda</label>                            
                        <input id="precioTiendaProducto" type="number" step="0.01" class="form-control @error('name') is-invalid @enderror" name="precioTiendaProducto" value="" required autocomplete="name" autofocus>
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
                                        @foreach($lista_proveedores as $proveedor)
                                        <option value="{{$proveedor->id}}"> {{ $proveedor->nombreProveedor}}</option>
                                        @endforeach
                                    </select>
                                  
                                </div>
                              </div>
                        </div>
                        
                                      
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