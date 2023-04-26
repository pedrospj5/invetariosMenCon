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
                        <h3 class="card-title"> MODIFICAR SUCURSAL</h3>
                    </div>               
                    <form method="POST"  action="{{ route('sucursal.update',$sucursal->id) }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                        <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre Sucursal</label>                            
                        <input id="nombreSucursal" type="text" class="form-control @error('name') is-invalid @enderror" name="nombreSucursal" value="{{ $sucursal->nombreSucursal}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>                
                        <div class="form-group">
                            <label for="exampleInputEmail1">Direccion Sucursal</label>                            
                        <input id="direccionSucursal" type="text" class="form-control @error('name') is-invalid @enderror" name="direccionSucursal" value="{{ $sucursal->direccionSucursal}}" required autocomplete="name" autofocus>
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
                                    <option>{{ $sucursal->ciudadSucursal}}</option>
                                    <option>LA PAZ</option>
                                    <option>EL ALTO</option>
                                    
                                  </select>
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono Sucursal</label>                            
                        <input id="telefonoSucursal" type="text" class="form-control" name="telefonoSucursal" value="{{ $sucursal->telefonoSucursal}}"  autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Encargado Sucursal</label>                            
                        <input id="personaEncargadaSucursal" type="text" class="form-control @error('name') is-invalid @enderror" name="personaEncargadaSucursal" value="{{ $sucursal->personaEncargadaSucursal}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
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