{{--
Datatables, botoes excel e csv, sem paginação, topo em 1 linha, alinhado esquerda

Uso:
- Incluir no layouts.app ou em outro lugar: @include('laravel-usp-theme::blocos.datatables-simples')
- Adiconar a classe 'datatables-simples'

@author Masakik, em 23/3/2023
--}}

@section('styles')
  @parent
  <style>
    .datatable-simples-paginado,
    .dataTables_info {
      padding-top: 3px !important;
      padding-bottom: 3px !important;
      padding-left: 8px !important;
      padding-right: 8px !important;
    }
  </style>
@endsection

@section('javascripts_bottom')
  @once
    @parent
    <script>
      jQuery(function() {
        var datatableSimplesPaginado = $('.datatable-simples-paginado').DataTable({
          dom: '<"row"<"col-md-12 form-inline"<"mr-2"f>B<"ml-2 btn-sm"p><"ml-3 border rounded border-info"i>>>t',
          order: [],
          searching: true,
          ordering: true,
          info: true,
          autoWidth: false,
          lengthChange: false,
          lengthMenu: [
            [10, 25, 50, 100, -1],
            ['10 linhas', '25 linhas', '50 linhas', '100 linhas', 'Mostar todos']
          ],
          paging: true,
          pageLength: 10,
          language: {
            search: '',
            searchPlaceholder: 'Pesquisar ..'
          },
          buttons: {
            buttons: [{
                extend: 'excelHtml5',
                className: 'btn btn-sm btn-outline-primary'
              },
              {
                extend: 'csvHtml5',
                className: 'btn btn-sm btn-outline-primary'
              }
            ],
            dom: {
              button: {
                className: 'btn'
              }
            }
          }
        })
      })
    </script>
  @endonce
@endsection
