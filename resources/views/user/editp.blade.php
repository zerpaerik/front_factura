@extends('layouts.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Datos de Usuario</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="">Inicio</a>
                </li>
                <li>
                    <a href="">Usuarios</a>
                </li>
                <li class="active">
                    <strong>Modificar Contraseña</strong>
                </li>
            </ol>
        </div>        
    </div>

    <div class="wrapper wrapper-content animated fadeInRight" ng-controller='UserController as vm' ng-init="{{$_COOKIE['userRole']}}, {{env('ROLE_SUPERADMIN', NULL)}});vm.User.user_id={{$_COOKIE['user_id']}}">
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Modificar Contraseña</h5>                        
                    </div>                    

                    <div class="ibox-content">
                        <br>
                        <form class="form-horizontal" name="FrmUser" novalidate="novalidate" ng-submit="vm.updatep({{$_COOKIE['user_id']}})">                            
                            
                        
                            <div class="form-group"><label class="col-lg-2 col-lg-offset-1 control-label">Contraseña</label>
                                <div class="col-lg-6"><input id="password" ng-model="vm.user.password" type="password" placeholder="Contraseña" class="form-control"></div>
                            </div>                                                
                            
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-10">
                                    <button class="btn btn-md btn-primary" type="submit">Guardar</button>
                                    <a class="btn btn-md btn-warning" href="{{url('home')}}">Volver</a>
                                </div>
                            </div>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
