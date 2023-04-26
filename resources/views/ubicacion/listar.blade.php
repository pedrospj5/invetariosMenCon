@extends('layouts.sistema')

@section('content')
<section class="content">
    <div class="container-fluid">
    
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Ubicaciones</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Detalle</th>                  
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lista_ubicaciones as $sub)
                <tr>
                  <td>{{$sub->nombreUbicacion}}</td>
                  <td>{{$sub->detalleUbicacion}}</td>
                 
                  <td>
                     <a class="btn btn-warning btn-xs"  href="{{ route('ubicacion.edit', $sub->id) }}">
                        Editar
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