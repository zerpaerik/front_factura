@extends('layouts.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Bodegas</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/')}}">Inicio</a>
                </li>
                <li>
                    <a href="{{ url('/warehouse')}}">Almacenes</a>
                </li>
                <li class="active">
                    <strong>Listar Bodegas</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div id="client" class="wrapper wrapper-content animated fadeInRight" ng-controller="RemissionController as vm">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lista Bodegas</h5>
                        <div class="ibox-tools">  
                            <a href="{{url('/warehouse/branch/create')}}/{{$warehouse}}" class="btn btn-xs btn-primary"><span class="fa fa-plus-circle"></span> Nueva Bodega</a>
                        </div>
                    </div>                    

                    <div class="ibox-content" >
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap" style="width: 98%">

                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="myTable" aria-describedby="DataTables_Table_0_info" role="grid" >
                                
                                    <thead>
                                    
                                        <tr role="row">

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>Codigo</center></th>      

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>Nombre</center></th>   

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><center>Dirección</center></th>

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
                var apiUrl =  '{{env('INV_WAREHOUSE', NULL)}}/{{$warehouse}}/branches';
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
                        {data: 'code',               className: "text-center"},
                        {data: 'name'},     
                        {data: 'address',            className: "text-center"},                  
                        {
                            name:       'actions',
                            data:       null,
                            sortable:   false,
                            searchable: false,
                            render: function (data){
                                let actions = '';
                                actions += '<center>'                      
                                + '<a href="{{url('warehouse/edit')}}/' + data.id +'"  class="btn btn-xs btn-primary" title="Editar" style="margin-right:3px"><i class="fa fa-edit"></i></a>'
                                + '<a href="{{url('remission/downloadXML')}}/' + data.id +'"  class="btn btn-xs btn-danger" target="_blank" title="Eliminar" style="margin-right:3px"><i class="fa fa-trash"></i></a>';
                                return actions;
                            }
                        }
                    ]                     
                });
            } );
        </script>
    </div>   
@endsection
