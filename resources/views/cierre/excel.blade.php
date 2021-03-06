@extends('layouts.app')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Cierre de Caja</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url('home') }}">Inicio</a>
                </li>
                <li>
                    <a href="">Cierre de Caja</a>
                </li>
                <li class="active">
                    <strong>Reporte General</strong>
                </li>
            </ol>
        </div>        
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Generación de Reportes Excel</h5>                        
                    </div>                    

                    <div class="ibox-content">
                        <br>
                        <form class="form-horizontal" name="FrmGenerateReportsCierre" method="post" action="/cierreg/createEX">   
                            <div class="form-group">  
                            {{ csrf_field() }}     
                                <label class="col-lg-2 control-label">Fecha Inicio</label>     
                                <div class="col-lg-4">
                                    <input class="form-control centrarInput" id="startDate" name="startDate" type="date">
                                </div>
                                <label class=" col-lg-2 control-label">Fecha Fin</label>
                                <div class="col-lg-4">
                                  <input class="form-control centrarInput" id="endDate" name="endDate" type="date">
                                </div>
                            </div>

                                                  

                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-9">
                                    <button class="btn btn-md btn-primary" type="submit">Generar Reporte</button>
                                    <a class="btn btn-md btn-warning" href="">Volver</a>
                                </div>
                            </div>

                        </form>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
  <script type="text/javascript">
    $(document).ready(function(){
        

        $('#type').change(function(){
            switch ($(this).val()) {
                case '1':
                    $('#startDate, #endDate').attr('disabled', false);
                break;
                case '2':
                    $('#startDate, #endDate').attr('disabled', true);
                break;
            }
            // if ($(this).val() == '6') {
            //     $('.supplier_chosen').show('fast');
            // } else {
            //     $('.supplier_chosen').hide('fast');
            // }
        });
    });
  </script>
@endsection