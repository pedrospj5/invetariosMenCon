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
                    <form method="POST" action="{{ route('setNewPass',$users[0]->id) }}" role="form" enctype="multipart/form-data">
                        @csrf
                        @Method('PUT')
                        <div class="card-body">                        
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
                        
                        
                    </div>
                        <div class="card-footer">                           
                            <button type="submit" class="btn btn-primary">CAMBIAR CONTRASEÑA</button>                         
                        </div>
                    
                    </form>
              
            </div>
        </div>
    </div>
</div>
</section>
@endsection