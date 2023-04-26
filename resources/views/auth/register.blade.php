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
                        <h3 class="card-title">REGISTRO DE USUARIO</h3>
                    </div>               
                    <form method="POST" action="/usuario">
                        <div class="card-body">
                        @csrf

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>                            
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña</label>                            
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                            
                        </div>
                        <div class="form-group">
                            <label for="password-confirm">Repita Contraseña</label>                            
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label>Fecha Nacimiento:</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input  id="fechaNacimiento" type="text" class="form-control @error('name') is-invalid @enderror" name="fechaNacimiento" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      
                                  </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lugar de Nacimiento</label>
                            <input id="lugarNacimiento" type="text" class="form-control @error('name') is-invalid @enderror" name="lugarNacimiento" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CI</label>
                            <input id="CI" type="text" class="form-control @error('name') is-invalid @enderror" name="CI" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sexo</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                               
                                  <select class="custom-select" name="sexo">
                                    <option>HOMBRE</option>
                                    <option>MUJER</option>
                                  
                                  </select>
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Estado Civil</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                               
                                  <select class="custom-select" name="estadoCivil">
                                    <option>SOLTERO/A</option>
                                    <option>CASADO/A</option>
                                    <option>VIUDO/A</option>
                                    <option>DIVORSIADO/A</option>
                                  </select>
                                </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Telefono/Celular</label>
                            <input id="telefono" type="text" class="form-control @error('name') is-invalid @enderror" name="telefono" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Estado Usuario</label>
                            <input id="estado" type="text" class="form-control @error('name') is-invalid @enderror" name="estado" value="ACTIVO" required autocomplete="name" autofocus value="ACTIVO" readonly="readonly" >
                        </div>
                        
                    </div>
                        <div class="card-footer">                           
                            <button type="submit" class="btn btn-primary">REGISTRO</button>                         
                        </div>
                    
                    </form>
              
            </div>
        </div>
    </div>
</div>
</section>
@endsection
