<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    @if(Cookie::get('company_id') == 12)
                    <img alt="image" style="width: 100%;" src="{{ asset('logo.png')}} " />
                    @elseif(Cookie::get('company_id') == 14)
                    <img alt="image" style="width: 100%;" src="{{ asset('img/almasanjose.PNG')}} " />
                     @elseif(Cookie::get('company_id') == 6)
                    <img alt="image" style="width: 100%;" src="{{ asset('img/angeles.PNG')}} " />
                    @elseif(Cookie::get('company_id') == 5)
                    <img alt="image" style="width: 100%;" src="{{ asset('img/santogiuseppe.PNG')}} " />
                    @elseif(Cookie::get('company_id') == 7)
                    <img alt="image" style="width: 100%;" src="{{ asset('img/santamaria.PNG')}} " />
                    @elseif(Cookie::get('company_id') == 10)
                    <img alt="image" style="width: 100%;" src="{{ asset('img/sagrado.PNG')}} " />
                     @elseif(Cookie::get('company_id') == 11)
                    <img alt="image" style="width: 100%;" src="{{ asset('img/sanmartin.PNG')}} " />
                    @else

                    @endif
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold"></strong>
                     </span> <span class="text-muted text-xs block" style="color: white; font-weight: bold">{{ucwords(Cookie::get('user'))}} <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        
                        <li class="divider"></li>
                        <li><a  href="{{ url('/user/editp') }}">Modificar Contraseña</a></li>
                        <li><a id="logOut" href="{{ url('/logout') }}">Cerrar Sesión</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                </div>
            </li>
            <li>
                <a href="{{ url('/home')}}"><i class="fa fa-home"></i> <span class="nav-label">Inicio</span> </a>
            </li>
            <li class="">
                <a href="#"><i class="fa fa-file-o"></i> <span class="nav-label">Procesos</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="{{ url('/invoice/proforma')}}">Listar Proformas</a></li>
                    <li><a href="{{ url('/invoice/prefactura')}}">Listar Prefacturas</a></li>
                    <li><a href="{{ url('/invoice')}}">Listar Facturas</a></li>
                    <li><a href="{{ url('/taxdocument')}}">Listar Retenciones</a></li>
                    <li><a href="{{ url('/creditnote')}}">Listar Notas de Crédito</a></li>
                    <!--li><a href="{{ url('/debitnote')}}">Listar Notas de Débito</a></li-->
                    <li><a href="{{ url('/remission')}}">Listar Guías de Remisión</a></li>
                </ul>
            </li>
            <li class="">
                    <a href="#"><i class="fa fa-file-o"></i> <span class="nav-label">Cierre de Caja</span> <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{ url('/cierre')}}">Generar Reporte</a></li>
                        <li><a href="{{ url('/cierre/general')}}">Descargar PDF</a></li>
                    </ul>
                </li>
                @if($_COOKIE['company_id'] == 12)
                <!--
                <li>
                    <a href="#"><i class="fa fa-columns"></i> <span class="nav-label">Inventario</span>  <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{ url('/warehouse')}}">Almacenes</a></li>
                        <li><a href="{{ url('/warehouse/inventory')}}">Stock</a></li>
                    </ul>
                </li>-->
                @endif
                

            <li class="">
                <a href="#"><i class="fa fa-file-o"></i> <span class="nav-label">Ingreso de Datos</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                <li><a href="{{ url('/client')  }}">Clientes</a></li>
                    <li><a href="{{ url('/supplier')  }}">Proveedores</a></li>
                    <li><a href="{{ url('/dispatcher')  }}">Transportistas</a></li>
                    <li><a href="{{ url('/product') }}">Productos</a></li>
                   
                </ul>
            </li>
            @if(env('ROLE_SUPERADMIN', NULL) == $_COOKIE['userRole'])
            <li>
                <a href="#"><i class="fa fa-cog"></i> <span class="nav-label">Configuración</span>  <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/entitymasterdata')}}">Datos Maestros</a></li>
                    <li><a href="{{ url('/mailconfiguration')}}">Servidor de Correo</a></li>
                    <li><a href="{{ url('/company') }}">Compañias</a></li>
                    <li><a href="{{ url('/branch')  }}">Sucursales</a></li>
                    <li><a href="{{ url('/countrytax')   }}">Impuestos</a></li>
                    {{-- <li><a href="{{ url('/retention')   }}">Retenciones</a></li> --}}
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-bank"></i> <span class="nav-label">Administración</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/plan') }}">Planes</a></li>
                    <li><a href="{{ url('/companyplan')}}">Planes por Compañia</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lock"></i> <span class="nav-label">Seguridad</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{ url('/user') }}">Gestion de Usuarios</a></li>
                    <li><a href="{{ url('/permission') }}">Permisología de Roles</a></li>
                    @if(env('ROLE_DEVADMIN', NULL) == $_COOKIE['userRole'])
                        <li><a href="{{ url('/audit') }}">Información de Compañias</a></li>
                    @endif
                </ul>
            </li>
            @endif
            {{-- <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Reportes</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="#">Reporte 1</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-desktop"></i> <span class="nav-label">Auditoria</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="table_basic.html">Listar Auditoria</a></li>
                </ul>
            </li> --}}
        </ul>

    </div>
</nav>

<script>
    $("#logOut").click(function(event){
        var href = this.href;
        event.preventDefault();
        sessionStorage.clear();
        window.location = href;
    });
</script>
