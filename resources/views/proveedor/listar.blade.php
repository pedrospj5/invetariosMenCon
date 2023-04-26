@extends('layouts.sistema')

@section('content')
<section class="content">
    <div class="container-fluid">
    
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Proveedores</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>                  
                  <th>Direccion</th>
                  <th>Telefono</th>
                  <th>Contacto</th>
                  <th>Telefono Contacto</th>
                  <th>Correo Contacto</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lista_proveedores as $pro)
                <tr>
                  <td>{{$pro->codigoProveedor}}</td>
                  <td>{{$pro->nombreProveedor}}</td>
                  <td>{{$pro->direccionProveedor}}</td>
                  <td>{{$pro->telefonoProveedor}}</td>
                  <td>{{$pro->personaContactoProveedor}}</td>
                  <td>{{$pro->telefonoPersonaContactoProveedor}}</td>
                  <td>{{$pro->correoPersonaContactoProveedor}}</td>
                  
                  <td>
                     <a class="btn btn-warning btn-xs"  href="{{ route('proveedor.edit', $pro->id) }}">
                        Editar
                     </a>
                   
                  </td>
                
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>Codigo</th>
                    <th>Nombre</th>                  
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Contacto</th>
                    <th>Telefono Contacto</th>
                    <th>Correo Contacto</th>
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