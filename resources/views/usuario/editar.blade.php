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
                        <h3 class="card-title"> MODIFICAR USUARIO</h3>
                    </div>               
                    <form method="POST"  action="{{ route('usuario.update',$users[0]->id) }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                        <div class="card-body">
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nombre</label>                            
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $users[0]->name}}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror                           
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users[0]->email}}" required autocomplete="email" readonly="readonly" >
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Fecha Nacimiento:</label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                  <input  id="fechaNacimiento" type="text" class="form-control @error('name') is-invalid @enderror" name="fechaNacimiento" value="{{ $users[0]->fechaNacimiento}}"  autofocus>
                                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                      
                                  </div>
                              </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Lugar de Nacimiento</label>
                            <input id="lugarNacimiento" type="text" class="form-control @error('name') is-invalid @enderror" name="lugarNacimiento" value="{{ $users[0]->lugarNacimiento}}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">CI</label>
                            <input id="CI" type="text" class="form-control @error('name') is-invalid @enderror" name="CI" value="{{ $users[0]->CI}}" required autocomplete="name" autofocus>
                        </div>                       
                        <div class="form-group">
                            <label for="exampleInputEmail1">Sexo</label>
                            <div class="col-sm-12">
                                <!-- select -->
                                <div class="form-group">
                               
                                  <select class="custom-select" name="sexo">
                                    <option>{{ $users[0]->sexo}}</option>
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
                                    <option>{{ $users[0]->estadoCivil}}</option>
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
                            <input id="telefono" type="text" class="form-control @error('name') is-invalid @enderror" name="telefono" value="{{ $users[0]->telefono}}" required autocomplete="name" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Estado Usuario</label>
                            <input id="estado" type="text" class="form-control @error('name') is-invalid @enderror" name="estado" value="ACTIVO" required autocomplete="name" autofocus value="{{ $users[0]->estado}}" readonly="readonly" >
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