@extends('layouts.sistema')

@section('content')

<section class="content">
    <div class="container-fluid">
    
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Inventario</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>#</th>
                  <th>Producto</th>
                  <th>Sucursal</th>                  
                  <th>Ubicacion</th>
                  <th>Cantidad</th>                  
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lista_inventario as $inv)
                <tr>
                  <td>{{$inv->id}}</td> 
                  <td>{{$inv->nombreProducto}}</td>
                  <td>{{$inv->nombreSucursal}}</td>
                  <td>{{$inv->nombreUbicacion}}</td>
                  <td>{{$inv->cantidad}}</td>
                  
                  
                  <td>
                    <a class="btn btn-warning btn-xs"  href="{{ route('inventario.edit', $inv->id) }}">
                        Editar
                     </a>
                    <a class="btn btn-primary  btn-xs" href="{{ route('ingreso.create', $inv->id) }}">
                       Ingreso Producto
                     </a>
                     <a class="btn btn-primary btn-xs"  href="{{ route('salida.create', $inv->id) }}">
                        Salida Producto
                     </a>
                   
                  </td>
                
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>#</th>
                    <th>Producto</th>
                    <th>Sucursal</th>                  
                    <th>Ubicacion</th>
                    <th>Cantidad</th>                  
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