<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">                
                <img src="{!! asset('/dist/img/avatar2.png') !!}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                {!!Auth::user()->name!!}
                <p> </p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/log') }}"><i class='glyphicon glyphicon-home'></i> <span>Home</span></a></li>
            <!--<li><a href="#"><i class='fa fa-link'></i> <span>Another Link</span></a></li>-->
            <!--            <li class="treeview">
                            <a href="#"><i class='fa fa-link'></i> <span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li><a href="#">Link in level 2</a></li>
                                <li><a href="#">Link in level 2</a></li>
                            </ul>
                        </li>-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Usuarios</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/gmaps') !!}"><i class="fa fa-circle-o"></i> Mapa</a></li>
                    <li><a href="{!! url('/usuario') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="glyphicon glyphicon glyphicon-cog"></i>
                    <span>Roles</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/roles/create') !!}"><i class="fa fa-circle-o"></i> Agregar</a></li>
                    <li><a href="{!! url('/roles') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                    <li><a href="{!! url('/asignar/create') !!}"><i class="fa fa-circle-o"></i>Asignar Rol</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench"></i>
                    <span>Permisos</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!! url('/permisos/create') !!}"><i class="fa fa-circle-o"></i> Agregar</a></li>
                    <li><a href="{!! url('/permisos') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                    <li><a href="{!! url('/asignar-permisos/create') !!}"><i class="fa fa-circle-o"></i>Asignar Permisos</a></li>
                    <li><a href="{!! url('/asignar-permisos/') !!}"><i class="fa fa-circle-o"></i>Listar Permisos</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i>
                    <span>Sucursales</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!!url('/sucursal/create') !!}"><i class="fa fa-circle-o"></i>Agregar</a></li>
                    <li><a href="{!!url('/sucursal') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-barcode"></i>
                    <span>Materiales</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!!url('/material/create') !!}"><i class="fa fa-circle-o"></i>Agregar</a></li>
                    <li><a href="{!!url('/material') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-puzzle-piece"></i>
                            <span>Tipo Material</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>                        
                        <ul class="treeview-menu">
                            <li><a href="{!!url('/material/tipo/create') !!}"><i class="fa fa-circle-o"></i>Agregar</a></li>
                            <li><a href="{!!url('/material/tipo/') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                        </ul>
                </ul>
            </li>           
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i>
                    <span>Clientes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!!url('/clientes/create') !!}"><i class="fa fa-circle-o"></i>Agregar</a></li>
                    <li><a href="{!!url('/clientes') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-puzzle-piece"></i>
                            <span>Tipo Clientes</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>                        
                        <ul class="treeview-menu">
                            <li><a href="{!!url('/clientes/tipos/create') !!}"><i class="fa fa-circle-o"></i>Agregar</a></li>
                            <li><a href="{!!url('/clientes-tipos') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                        </ul>     
                </ul>
            </li>   
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-shopping-cart"></i>
                    <span>Ventas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{!!url('/ventas') !!}"><i class="fa fa-circle-o"></i>Agregar Venta</a></li>
                    <li><a href="{!!url('/listado') !!}"><i class="fa fa-circle-o"></i>Listar</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
