<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Prueba de Superacion">
  <meta name="author" content="Arturo Ruiz">
  <title>Usuarios | Prueba de Superacion | Arturo Ruiz</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('admin/fonts/1.css') }}">
  <!-- Icons -->
  <link rel="stylesheet" href="{{ asset('admin/vendor/nucleo/nucleo.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/all.min.css') }}" type="text/css">
  <!-- Page plugins -->
  <!-- CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="{{ asset('admin/css/1.css') }}" type="text/css">
</head>

<body>

    @include('admin.users.navbar')
    @include('admin.users.content')












    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap_js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/js-cookie/js.cookie.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery.scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-scroll-lock/jquery-scrollLock.min.js') }}"></script>
    <!-- Optional JS -->
    <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/chart.js/Chart.extension.js') }}"></script>
    <!-- Arturo JS -->
    <script src="{{ asset('admin/js/1.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/maskedinput/maskedinput.js') }}"></script>


    <script>
        $(document).ready(function() {
          $table =  $('#users').DataTable({
            "language": {

                "sProcessing":     "Procesando...",
                "sLengthMenu":     "Mostrar _MENU_ registros",
                "sZeroRecords":    "No se encontraron resultados",
                "sEmptyTable":     "Ningún dato disponible en esta tabla",
                "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_",
                "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0",
                "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                "sInfoPostFix":    "",
                "sSearch":         "Buscar:",
                "sUrl":            "",
                "sInfoThousands":  ",",
                "sLoadingRecords": "Cargando...",
                "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     ">",
                "sPrevious": "<"
                },
                "oAria": {
                    "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                    "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                }

                },

                "serverSide": true,
                "ajax" : "{{url('api/users')}}",
                "columns":[
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'status'},
                    {data: 'email'},
                    {data: 'btn'},
                ]

            });
        } );




    </script>


</body>
</html>
