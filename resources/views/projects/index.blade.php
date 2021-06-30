@extends('layouts.app')

@section('content')
@section('styles')
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<style>

        table tr th{
        background:#ECEFF1;
        color:rgb(26, 26, 26);
        text-align:left;
        vertical-align:center;
        }

</style>
@endsection

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Projects') }}</div>

                <div class="card-body">
                    <a class="btn btn-lg btn-primary" href="{{ route('projects.create') }}">Yeni Proje Ekle</a>
                    <a class="btn btn-lg btn-primary"  href="{{ route('evaluations.create') }}">Yeni Değerlendirme Ekle</a>

                    <br /><br />
                    <table  class="table table-striped" id="datatable" >
                        <thead>
                        <tr>
                            <th>Sıra</th>
                            <th>Proje Adı</th>
                            <th>Proje Özeti</th>
                            <th>Başlangıç Tarihi</th>
                            <th>Bitiş Tarihi</th>
                            <th>Oluşturulma Tarihi</th>
                            <th>Araçlar</th>
                        </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                    
                </div>
               
            </div>
        </div>
    </div>
  
</div>
@endsection

@section('javascripts')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js" ></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/plug-ins/1.10.25/dataRender/ellipsis.js" ></script>
    <script>

      $(document).ready(function() {
        $('#datatable').DataTable({
                "processing": true,
                "serverSide": true,
                 dom: 'Blfrtip',
                 select: true,
                 buttons: [
                        { 
                        extend: 'print',
                        messageTop: 'Trabzon Teknokent - Mehmet Emin Kobya',
                        exportOptions: { orthogonal: 'export', columns: ':visible', }
                        },
                        {
                            extend:'pdf',
                            exportOptions: { orthogonal: 'export', columns: ':visible', }
                        },
                        {
                            extend:'excel',
                            exportOptions: { orthogonal: 'export', columns: ':visible', }
                        },
                         'copy',
                         'colvis'
                            ],

                "lengthMenu": [[ 25 ,50, -1], [25 ,50, "All"]],

                columnDefs: [ 
                    {
                        visible: false
                    },
                    {
                        targets: 3,
                        render: $.fn.dataTable.render.ellipsis( 15 )
                     },
                    {
                        targets: 2,
                        render: $.fn.dataTable.render.ellipsis( 15 )
                     },
                    {
                        targets: 1,
                        render: $.fn.dataTable.render.ellipsis( 15 )
                     }
                ],

                "order": [[ 0, "desc" ]],
                
                "ajax": "{{ route('projects.list') }}",
                "columns": [
                    { "data": "id"},
                    { "data": "project_name"},
                    { "data": "project_summary" },
                    { "data": "project_starting_date" },
                    { "data": "project_finishing_date"},
                    { "data": "created_at" },
                    { "data": 'action', name: 'action', orderable: false, searchable: false}   
                ]
            });
    } );
    </script>
@endsection 
