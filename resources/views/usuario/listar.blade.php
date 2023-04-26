@extends('layouts.sistema')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Usuario</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $u)
                <tr>
                <td>{{$u->name}}</td>
                  <td>{{$u->email}}
                  </td>
                  <td>
                    <a class="btn btn-primary  btn-xs" href="{{ route('usuario.show', $u->id) }}">
                        Ver
                     </a>
                     <a class="btn btn-warning btn-xs"  href="{{ route('usuario.edit', $u->id) }}">
                        Editar
                     </a>
                     <a class="btn btn-danger  btn-xs"  href="{{ route('changePass', $u->id) }}">
                        Cambiar Contraseña
                     </a>
                  </td>
                
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
      });
    });
  </script>
@endsection