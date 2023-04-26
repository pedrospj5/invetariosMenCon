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
                        <h3 class="card-title"> CREAR SUCURSAL</h3>
                    </div>               
                    <form method="POST"  action="{{ route('sucursal.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre Sucursal</label>                            
                        <input id="nombreSucursal" type="text" class="form-control @error('name') is-invalid @enderror" name="nombreSucursal" value="" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>                
                        <div class="form-group">
                            <label for="exampleInputEmail1">Direccion Sucursal</label>                            
                        <input id="direccionSucursal" type="text" class="form-control @error('name') is-invalid @enderror" name="direccionSucursal" value="" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ciudad Sucursal</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                               
                                  <select class="custom-select" name="ciudadSucursal">
                                    
                                    <option>LA PAZ</option>
                                    <option>EL ALTO</option>
                                    
                                  </select>
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono Sucursal</label>                            
                        <input id="telefonoSucursal" type="text" class="form-control" name="telefonoSucursal" value=""  autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Encargado Sucursal</label>                            
                        <input id="personaEncargadaSucursal" type="text" class="form-control @error('name') is-invalid @enderror" name="personaEncargadaSucursal" value="" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
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