@extends('layouts.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Bodegas</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('home') }}">Inicio</a>
                </li>
                <li>
                    <a href="{{ url('/warehouse/branches') }}/{{$warehouse}}">Bodegas</a>
                </li>
                <li class="active">
                    @if(isset($id))
                    <strong>Editar bodega</strong>
                    @else
                    <strong>Nueva bodega</strong>
                    @endif
                </li>
            </ol>
        </div>        
    </div>
    @if(isset($id))
    <div class="wrapper wrapper-content animated fadeInRight" ng-controller='WarehouseBranchController as vm' ng-init="vm.edit({{$id}})">
    @else
    <div class="wrapper wrapper-content animated fadeInRight" ng-controller='WarehouseBranchController as vm'>
        @endif
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        @if(isset($id))
                           <h5>Editar bodega</h5> 
                        @else
                           <h5>Nueva bodega</h5>
                        @endif
                    </div>                    

                    <div class="ibox-content">
                        <br>
                        @if(isset($id))
                        <form class="form-horizontal" name="FrmWarehouse" novalidate="novalidate" ng-submit="vm.update({{$id}})">   
                           @else
                           <form class="form-horizontal" name="FrmWarehouse" novalidate="novalidate" ng-submit="vm.create({{$warehouse}}, {{$_COOKIE['company_id']}})">   
                           @endif                  
                            <div class="form-group"><label class="col-lg-2 col-lg-offset-1 control-label">Nombre</label>
                                <div class="col-lg-6"><input id="name" type="text" ng-model="vm.warehousebranch.name" placeholder="Nombre de la bodega" class="form-control" required>
                                </div>
                            </div>
                            
                            <div class="form-group"><label class="col-lg-2 col-lg-offset-1 control-label">Dirección</label>
                                <div class="col-lg-6"><input id="address" type="text" ng-model="vm.warehousebranch.address" required placeholder="Dirección de la bodega" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-10">
                                    <button class="btn btn-md btn-primary" type="submit">Guardar</button>
                                    <a class="btn btn-md btn-warning" href="{{url('/warehouse/branches')}}/{{$warehouse}}">Volver</a>
                                </div>
                            </div>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
