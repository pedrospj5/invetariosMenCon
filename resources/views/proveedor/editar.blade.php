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
                        <h3 class="card-title"> MODIFICAR PROVEEDOR</h3>
                    </div>               
                    <form method="POST"  action="{{ route('proveedor.update',$proveedor->id) }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Codigo Provedoor</label>                            
                            <input id="codigoProveedor" type="text" class="form-control @error('name') is-invalid @enderror" name="codigoProveedor" value="{{$proveedor->codigoProveedor}}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                           
                            </div>  
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nombre Provedoor</label>                            
                            <input id="nombreProveedor" type="text" class="form-control @error('name') is-invalid @enderror" name="nombreProveedor" value="{{$proveedor->nombreProveedor}}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                           
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Direccion Provedoor</label>                            
                            <input id="direccionProveedor" type="text" class="form-control @error('name') is-invalid @enderror" name="direccionProveedor" value="{{$proveedor->direccionProveedor}}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                           
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">telefono Provedoor</label>                            
                            <input id="telefonoProveedor" type="text" class="form-control @error('name') is-invalid @enderror" name="telefonoProveedor" value="{{$proveedor->telefonoProveedor}}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                           
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Contacto Provedoor</label>                            
                            <input id="personaContactoProveedor" type="text" class="form-control @error('name') is-invalid @enderror" name="personaContactoProveedor" value="{{$proveedor->personaContactoProveedor}}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                           
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Telefono Contacto Provedoor</label>                            
                            <input id="telefonoPersonaContactoProveedor" type="text" class="form-control @error('name') is-invalid @enderror" name="telefonoPersonaContactoProveedor" value="{{$proveedor->telefonoPersonaContactoProveedor}}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror                           
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Correo Contacto Provedoor</label>                            
                            <input id="correoPersonaContactoProveedor" type="text" class="form-control @error('name') is-invalid @enderror" name="correoPersonaContactoProveedor" value="{{$proveedor->correoPersonaContactoProveedor}}" required autocomplete="name" autofocus>
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