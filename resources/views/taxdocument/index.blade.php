@extends('layouts.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Retenciones</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/')}}">Inicio</a>
                </li>
                <li>
                    <a href="{{ url('/taxdocument')}}">Procesos</a>
                </li>
                <li class="active">
                    <strong>Retenciones</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div id="client" class="wrapper wrapper-content animated fadeInRight" ng-controller="TaxDocumentController as vm">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lista de Retenciones</h5>
                        <div class="ibox-tools">  
                            <a href="{{url('/taxdocument/create')}}" class="btn btn-xs btn-danger"><span class="fa fa-plus-circle"></span> Nueva Retención</a>
                        </div>
                    </div>                    

                    <div class="ibox-content" >
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap" style="width: 98%">

                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="myTable" aria-describedby="DataTables_Table_0_info" role="grid" >
                                
                                    <thead>
                                    
                                        <tr role="row">
                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>Cód. Principal</center></th>   

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><center>Número de Autorización</center></th>
                                            
                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>RUC/Cédula</center></th>      

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>F. Emisión</center></th>   

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>F. Autorización</center></th>

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 10%;"><center>Razón Social</center></th>

                                            <th class="sorting" rowspan="1" colspan="1" style="width: 10%;"><center>Acciones</center></th>
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
        </div>

        <script>                                             
            
            $(document).ready( function () {
                let check = '{{$_COOKIE['branch_office_id']}}';                
                var apiUrl =  '{{env('API_HOST', NULL)}}/taxdocument/retentionDt/' + check; 
                $('#myTable').DataTable({
                    "processing" : false,
                    "serverSide" : true,
                    "language": {
                                  "url": "/js/spanish.json"
                                },
                    'ajax' : {
                        url: apiUrl,
                        dataType: 'json',
                        type: 'get',                    
                        contentType: 'application/json',                                                    
                    },
                    'columns' : [                    
                        {data: 'principal_code'},     
                        {data: 'auth_code',                       className: "text-center"},
                        {data: 'supplier.identification_number',  className: "text-center"},                  
                        {data: 'emission_date',                   className: "text-center"},
                        {data: 'auth_date',                       className: "text-center"},               
                        {data: 'supplier.social_reason'},                                        
                        {
                            name:       'actions',
                            data:       null,
                            sortable:   false,
                            searchable: false,
                            render: function (data){
                                let actions = '';
                                actions += '<center>'                      
                                        + '<a href="{{url('taxdocument/createPDF/')}}/'+ data.id +'" target="_blank" class="btn btn-xs btn-warning" title="Generar PDF" style="margin-right:3px"><i class="fa fa-file-pdf-o"></i></a>'
                                        + '<a href="" onclick="sendMail(' + data.id + ')" class="btn btn-xs btn-info" title="Enviar mail PDF y XML" style="margin-right:3px"><i class="fa fa-envelope"></i></a>'
                                        + '<a href="{{url('taxdocument/downloadXML')}}/' + data.id +'"  class="btn btn-xs btn-primary" target="_blank" title="Descargar XML" style="margin-right:3px"><i class="fa fa-download"></i></a>';
                                return actions;
                            }
                        }
                    ]                     
                });
            } );

            function sendMail(id){
            swal({
                title: "Enviar correo electrónico al proveedor",
                text: "El PDF y XML de la retención serán enviados al proveedor",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#5fb4f6",
                confirmButtonText: "Enviar",
                closeOnConfirm: false
            }, function (isConfirm) {
                if (!isConfirm) return;
                $.ajax({
                    url: "{{env('APP_URL', NULL)}}/taxdocument/mail/" + id,
                    type: "GET",                                        
                    success: function (data) {
                        swal("Se ha completado la acción", "El correo electrónico ha sido enviado éxitosamente", "success");
                    },
                    error: function (xhr, ajaxOptions, thrownError) {
                        swal("No se ha completado la acción", "Por favor intente nuevamente o contacte al administrador", "error");
                    }
                });
            });
        }
        
        </script>
    </div>   
@endsection
