@extends('layouts.admin')
@section('content')
<div class="row">
  <h1>Listado de secretarias</h1>
</div>


<hr>

<div class="row">

  <div class="col-md-10">
    <div class="card card-outline card-primary">
      <div class="card-header">
        <h3 class="card-title">Secretarias registrados</h3>
        <div class="card-tools">
          <a href="{{url('admin/secretarias/create')}}" class="btn btn-primary">
            Registrar nueva secretaria
          </a>
        </div>
      </div>

      <div class="card-body" style="display: block;">
        <table id="example1" class="table table-hover table-sm table-bordered table-striped">
          <thead class="thead-dark">
            <tr>
              <th scope="col" style="text-align: center;">#</th>
              <th scope="col" style="text-align: center;">Nombres</th>
              <th scope="col" style="text-align: center;">Apellidos</th>
              <th scope="col" style="text-align: center;">Curp</th>
              <th scope="col" style="text-align: center;">Teléfono</th>
              <th scope="col" style="text-align: center;">Fecha de nacimiento</th>
              <th scope="col" style="text-align: center;">Dirección</th>
              <th scope="col" style="text-align: center;">Email</th>
              <th scope="col" style="text-align: center;">Acciones</th>
            </tr>
          </thead>
          <tbody>
            <?php $contador = 1; ?>
            @foreach ($secretarias as $secreatria)
            <tr>
              <td style="text-align: center;">{{$contador++}}</td>
              <td style="text-align: center;">{{$secreatria -> nombres}}</td>
              <td style="text-align: center;">{{$secreatria -> apellidos}}</td>
              <td style="text-align: center;">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="{{url('/admin/secretarias/'.$secretaria->id)}}" type="button" class="btn btn-info btn-sm"><i class="bi bi-eye"></i></a>
                  <a href="{{url('/admin/secretarias/'.$secretaria->id.'/edit')}}" type="button" class="btn btn-success btn-sm"><i class="bi bi-pencil"></i></a>
                  <a href="{{url('/admin/secretarias/'.$secretaria->id.'/confirm-delete')}}" type="button" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></a>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <script>
          $(function() {

            $("#example1").DataTable({

              "pageLength": 10,

              "language": {

                "emptyTable": "No hay información",

                "info": "Mostrando _START_ a _END_ de _TOTAL_ Secretarias",

                "infoEmpty": "Mostrando 0 a 0 de 0 Secretarias",

                "infoFiltered": "(Filtrado de _MAX_ total Secretarias)",

                "infoPostFix": "",

                "thousands": ",",

                "lengthMenu": "Mostrar _MENU_ Secretarias",

                "loadingRecords": "Cargando...",

                "processing": "Procesando...",

                "search": "Buscador:",

                "zeroRecords": "Sin resultados encontrados",

                "paginate": {

                  "first": "Primero",

                  "last": "Ultimo",

                  "next": "Siguiente",

                  "previous": "Anterior"

                }

              },

              "responsive": true,
              "lengthChange": true,
              "autoWidth": false,

              buttons: [{

                  extend: 'collection',

                  text: 'Reportes',

                  orientation: 'landscape',

                  buttons: [{

                      text: 'Copiar',

                      extend: 'copy',

                    }, {

                      extend: 'pdf'

                    }, {

                      extend: 'csv'

                    }, {

                      extend: 'excel'

                    }, {

                      text: 'Imprimir',

                      extend: 'print'

                    }

                  ]

                },

                {

                  extend: 'colvis',

                  text: 'Visor de columnas',

                  collectionLayout: 'fixed three-column'

                }

              ],

            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

          });
        </script>
      </div>
    </div>
  </div>




</div>

@endsection