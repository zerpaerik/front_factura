@extends('layouts.app')

@section('content')	
<div class="wrapper wrapper-content" ng-controller="HomeController as vm" ng-init="vm.readDocumentPlan({{$_COOKIE['company_id']}})">
<div class="row" ng-show="vm.PlanCompany.length != 0"> 
	   		<div class="col-lg-12">
                <div class="ibox float-e-margins">
                	<div class="ibox-title" style="background-color: #33A1FF">  
                        <h5 style="color:white;">PLAN ACTUAL ACTIVO</h5>
                    </div>               
	                <div class="ibox-content">
	                 	<div class="row">
	                 		
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">  
		                                <h5>PLAN </h5>
		                            </div>
		                            <div class="ibox-content">
										<div class="widget style1">
											<div class="row">
												<div class="col-xs-4">
													<i class="fa fa-file-text-o fa-3x"></i>
												</div><br>
												<div class="col-xs-8 text-right">
													<span class="fa fa-plus-circle"></span> @{{vm.PlanCompany.plan.name}} 
												</div>
												<div class="col-xs-8 text-right" ng-show="vm.PlanCompany.documentQuantity == vm.PlanCompany.plan.document_count">
													<span class="fa fa-plus-circle"></span> AGOTADO 
												</div>
											</div>
										</div>
		                            </div>
		                        </div>
	                    	</div>
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">
		                                <h5>CANTIDAD DOCUMENTO</h5>
		                            </div>
		                            <div class="ibox-content">
										<div class="widget style1">
											<div class="row">
												<div class="col-xs-4">
													<i class="fa fa-file-text-o fa-3x"></i>
												</div><br>
												<div class="col-xs-8 text-right">
													<span class="fa fa-plus-circle"></span> @{{vm.PlanCompany.plan.document_count}}
												</div>
											</div>
										</div>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">
		                                <h5>DOCUMENTOS GENERADOS</h5>
		                            </div>
		                            <div class="ibox-content">
										<div class="widget style1">
											<div class="row">
												<div class="col-xs-4">
													<i class="fa fa-file-text-o fa-3x"></i>
												</div><br>
												<div class="col-xs-8 text-right">
													<span class="fa fa-plus-circle"></span> @{{vm.PlanCompany.documentQuantity}}
												</div>
											</div>
										</div>
		                            </div>
		                        </div>
		                    </div>
        				</div>
               		 </div>
            	</div>
	   		</div>
	   	</div>
	   <div class="row" ng-show="vm.PlanCompany.documentQuantity != vm.PlanCompany.plan.document_count">
	   		<div class="col-lg-12">
                <div class="ibox float-e-margins">
                	<div class="ibox-title" style="background-color: #33A1FF">  
                        <h5 style="color:white;">SISTEMA DE DOCUMENTOS ELECTRÓNICOS</h5>
                    </div>               
	                <div class="ibox-content">
	                 	<div class="row">
	                 		
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">  
		                                <h5>FACTURACION </h5>
		                            </div>
		                            <div class="ibox-content">
		                              	<a href="{{url('/invoice/create')}}"> 
										    <div class="widget style1">
										        <div class="row">
									        	 	<div class="col-xs-4">
										                <i class="fa fa-file-text-o fa-3x"></i>
										            </div><br>
										            <div class="col-xs-8 text-right">
										                <span class="fa fa-plus-circle"></span> Crear Factura 
										            </div>
										        </div>
										    </div>
										</a>
		                            </div>
		                        </div>
	                    	</div>
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">
		                                <h5>RETENCIONES</h5>
		                            </div>
		                            <div class="ibox-content">
		                               	<a id="hola" href="{{url('/taxdocument/create')}}"> 
										    <div class="widget style1">
										        <div class="row">
										            <div class="col-xs-4">
										                <i class="fa fa-legal fa-3x"></i>
										            </div><br>
										            <div class="col-xs-8 text-right">
										                <span class="fa fa-plus-circle"></span> Crear Retención
										            </div>
										        </div>
										    </div>
										</a>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">
		                                <h5>NOTAS CRÉDITO</h5>
		                            </div>
		                            <div class="ibox-content">
		                                <a href="{{url('/creditnote/create')}}"> 
										    <div class="widget style1">
										        <div class="row">
										            <div class="col-xs-4">
										                <i class="fa fa-money fa-3x"></i>
										            </div><br>
										            <div class="col-xs-8 text-right">
										                <span class="fa fa-plus-circle"></span> Crear Nota Crédito
										            </div>
										        </div>
										    </div>
										</a>
		                            </div>
		                        </div>
		                    </div>
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">		                              
		                                <h5>NOTAS DÉBITO</h5>
		                            </div>
		                            <div class="ibox-content">
		                                <a href="{{url('/debitnote/create')}}"> 
										    <div class="widget style1">
										        <div class="row">
										            <div class="col-xs-4">
										                <i class="fa fa-money fa-3x"></i>
										            </div><br>
										            <div class="col-xs-8 text-right">
										                <span class="fa fa-plus-circle"></span> Crear Nota Debito
										            </div>
										        </div>
										    </div>
										</a>
		                            </div>
		                        </div>
		            		</div>
		            		<div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title" style="text-align: center;">
		                                <h5 style="text-align: center; margin-left: 25px;">GUIAS</h5>
		                            </div>
		                            <div class="ibox-content">
		                               <a href="{{url('/remission/create')}}"> 
										    <div class="widget style1">
										        <div class="row">
										            <div class="col-xs-4">
										                <i class="fa fa-truck fa-3x"></i>
										            </div><br>
										            <div class="col-xs-8 text-right">
										                <span class="fa fa-plus-circle"></span> Crear Guía de Remisión
										            </div>
										        </div>
										    </div>
										</a>
		                            </div>
		                        </div>
		            		</div>
        				</div>
               		 </div>
            	</div>
	   		</div>
	   	</div>
       <div class="row">
	   		<div class="col-lg-12">
                <div class="ibox float-e-margins">
				<div class="ibox-title" style="background-color: #33A1FF">  
                        <h5 style="color:white;">ACCESOS RAPIDOS</h5>
                    </div> 
                	           
	                <div class="ibox-content">
	                 	<div class="row">
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">  
		                                <h5>PRODUCTOS </h5>
		                            </div>
		                            <div class="ibox-content">
		                              	<a href="{{url('/product/create')}}"> 
										    <div class="widget style1">
										        <div class="row">
										            <div class="col-xs-4">
										                <i class="fa fa-newspaper-o fa-3x"></i>
										            </div><br>
										            <div class="col-xs-8 text-right">
										                <span class="fa fa-plus-circle"></span> Crear Producto
										            </div>
										        </div>
										    </div>
										</a>
		                            </div>
		                        </div>
	                    	</div>
		                    <div class="col-lg-2">
		                        <div class="ibox float-e-margins">
		                            <div class="ibox-title">
		                                <h5>CLIENTES</h5>
		                            </div>
		                            <div class="ibox-content">
		                               	<a href="{{url('/client/create')}}"> 
										    <div class="widget style1">
										        <div class="row">
										            <div class="col-xs-4">
										                <i class="fa fa-user-o fa-3x"></i>
										            </div><br>
										            <div class="col-xs-8 text-right">
										                <span class="fa fa-plus-circle"></span> Crear Cliente
										            </div>
										        </div>
										    </div>
										</a>
		                            </div>
		                        </div>
		                    </div>
                   
        				</div>
               		 </div>
            	</div>
	   		</div>
	   	</div>
       
	
	</div>	
@endsection