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
                        <h3 class="card-title"> MODIFICAR UBICACION</h3>
                    </div>               
                    <form method="POST"  action="{{ route('ubicacion.update',$ubicacion->id) }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                        <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre Ubicacion</label>                            
                        <input id="nombreUbicacion" type="text" class="form-control @error('name') is-invalid @enderror" name="nombreUbicacion" value="{{ $ubicacion->nombreUbicacion}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>                
                        <div class="form-group">
                            <label for="exampleInputEmail1">Direccion Ubicacion</label>                            
                        <input id="detalleUbicacion" type="text" class="form-control @error('name') is-invalid @enderror" name="detalleUbicacion" value="{{ $ubicacion->detalleUbicacion}}" required autocomplete="name" autofocus>
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