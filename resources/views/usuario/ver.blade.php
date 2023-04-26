@extends('layouts.sistema')

@section('content')
<!-- info row -->
  <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch">
  <div class="card bg-light">
    <div class="card-header text-muted border-bottom-0">
      Detalle de Usuario
    </div>
    <div class="card-body pt-0">
      <div class="row">
        <div class="col-7">
          <h2 class="lead"><b>{{ $users[0]->name}}</b></h2>         
          <ul class="ml-4 mb-0 fa-ul text-muted">      
               
            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-address-card"></i></span> CI: {{ $users[0]->CI}}</li>
            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-mail-bulk"></i></span> Email: {{ $users[0]->email}}</li>
            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Nacido: {{ $users[0]->lugarNacimiento}}</li>
            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Telefono:  {{ $users[0]->telefono}}</li>
            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-user-friends"></i></span> Sexo:  {{ $users[0]->sexo}}</li>
            <li class="small"><span class="fa-li"><i class="fas fa-lg fa-heart"></i></span> Estado Civil:  {{ $users[0]->estadoCivil}}</li>
          </ul>
        </div>
        <div class="col-5 text-center">
          <img src="{{ asset('../imagenesSistema/user.png')}}" alt="" class="img-circle img-fluid">
        </div>
      </div>
    </div>
    <div class="card-footer">
     
    </div>
  </div>
</div>
@endsection