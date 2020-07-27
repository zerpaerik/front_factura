@extends('layouts.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Inventario</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('/')}}">Inicio</a>
                </li>
                <li class="active">
                    <strong>Inventario</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">
        </div>
    </div>
    <div id="client" class="wrapper wrapper-content animated fadeInRight" ng-controller="InventoryController as vm" ng-init="vm.getWarehouses({{$_COOKIE['company_id']}})">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Inventario de productos</h5>
                        <div class="ibox-tools">  
                            <a href="{{url('/warehouse/inventory/import')}}" class="btn btn-xs btn-primary"><span class="fa fa-plus-circle"></span> Importar</a>
                        </div>
                        <div class="ibox-tools row">
                            
                            <div class="form-group">
                            <label class="col-md-1 control-label">Almacen</label>
                                <div class="col-md-4">                                                                    
                                    <select id="warehouse" ng-change="vm.getWarehouseBranches()" placeholder="Seleccionar almacen" class="form-control" ng-options="warehouse.name for warehouse in vm.Warehouses track by warehouse.id" ng-model="vm.warehouse" required>
                                    </select>
                                </div>
                                <label class="col-md-1 control-label">Bodega</label>
                                <div class="col-md-4">                                                                    
                                    <select id="warehousebranch" placeholder="Seleccionar bodega" class="form-control" ng-options="warehousebranch.name for warehousebranch in vm.WarehouseBranches track by warehousebranch.id" ng-model="vm.warehousebranch" required>
                                    </select>
                                </div>

                            </div>    
   
                        </div>
                    </div>                    

                    <div class="ibox-content" >
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap" style="width: 98%">

                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="myTable" aria-describedby="DataTables_Table_0_info" role="grid" >
                                
                                    <thead>
                                    
                                        <tr role="row">

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>Codigo</center></th>      

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 15%;"><center>Nombre</center></th>   

                                            <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 5%;"><center>Cantidad</center></th>

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
            $('#warehousebranch').on('change', function(e){
                
                let company = '{{$_COOKIE['company_id']}}';
                var whb = e.target.value;    
                var apiUrl =  '{{env('INV_WAREHOUSE_BRANCH', NULL)}}/'+whb+"/inventory";
                $('#myTable').DataTable({
                    "processing" : false,
                    "serverSide" : true,
                    "bDestroy": true,
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
                        {data: 'product_code',               className: "text-center"},
                        {data: 'product_name'},     
                        {data: 'stock',            className: "text-center"},                  
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

            });
        </script>
    </div>   
@endsection
