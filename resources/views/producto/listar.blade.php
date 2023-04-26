@extends('layouts.sistema')

@section('content')
<section class="content">
    <div class="container-fluid">
    
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Lista de Productos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>                  
                  <th>Presentacion</th>
                  <th>Color</th>
                  <th>Precio Mayor</th>
                  <th>Precio Feria</th>
                  <th>precio Tienda</th>
                  <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lista_porductos as $pro)
                <tr>
                  <td>{{$pro->codigoProducto}}</td>
                  <td>{{$pro->nombreProducto}}</td>
                  <td>{{$pro->presentacionProducto}}</td>
                  <td>{{$pro->colorProducto}}</td>
                  <td>{{$pro->precioMayorProducto}}</td>
                  <td>{{$pro->precioFeriaProducto}}</td>
                  <td>{{$pro->precioTiendaProducto}}</td>
                  
                  <td>
                    <a class="btn btn-primary  btn-xs" href="{{ route('producto.show', $pro->id) }}">
                        Ver
                     </a>
                     <a class="btn btn-warning btn-xs"  href="{{ route('producto.edit', $pro->id) }}">
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
                    <th>Presentacion</th>
                    <th>Color</th>
                    <th>Precio Mayor</th>
                    <th>Precio Feria</th>
                    <th>precio Tienda</th>
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