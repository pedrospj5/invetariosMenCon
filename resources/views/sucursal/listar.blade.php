
@extends('layouts.sistema')

@section('content')
<section class="content">
    <div class="container-fluid">
    <a class="btn btn-primary" href="{{ route('reporteSucursal')}}" target="blank">DESCARGAR PDF</a>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Sucursales</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Direccion</th>
                  <th>Encargado</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lista_sucursales as $suc)
                <tr>
                  <td>{{$suc->nombreSucursal}}</td>
                  <td>{{$suc->direccionSucursal}}</td>
                  <td>{{$suc->personaEncargadaSucursal}}</td>
                  <td>
                    <a class="btn btn-primary  btn-xs" href="{{ route('sucursal.show', $suc->id) }}">
                        Ver
                     </a>
                     <a class="btn btn-warning btn-xs"  href="{{ route('sucursal.edit', $suc->id) }}">
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