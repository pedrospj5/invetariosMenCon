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
                        <h3 class="card-title"> CREAR UBICACION</h3>
                    </div>               
                    <form method="POST"  action="{{ route('ubicacion.store') }}" role="form" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre Ubicacion</label>                            
                        <input id="nombreUbicacion" type="text" class="form-control @error('name') is-invalid @enderror" name="nombreUbicacion" value="" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>                
                        <div class="form-group">
                            <label for="exampleInputEmail1">Detalle Sucursal</label>                            
                        <input id="detalleUbicacion" type="text" class="form-control @error('name') is-invalid @enderror" name="detalleUbicacion" value="" required autocomplete="name" autofocus>
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