<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <div class="user-panel">

            <div class="text-center ">
                <p><a href="<?php echo URLROOT; ?>" target="_blank">Wayra Cusco World</a></p>

                
            </div>
        </div>



        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header"></li>
            <li>
                <a href="<?php echo URLROOT; ?>/home">
                    <i class="fa fa-home"></i> <span>Inicio</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Tours</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo URLROOT; ?>/tures"><i class="fa fa-line-chart"></i> Ver todo</a></li>
                    <li><a href="<?php echo URLROOT; ?>/tures/add"><i class="fa fa-plus"></i> Agregar</a></li>
                    <li><a href="<?php echo URLROOT; ?>/tures/editing"><i class="fa fa-pencil"></i> Editando</a></li>
                    <li><a href="<?php echo URLROOT; ?>/tures/published"><i class="fa fa-check"></i> Publicados</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-picture-o"></i>
                    <span>Galeria</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo URLROOT; ?>/galeries"><i class="fa fa-list-ul"></i> Ver todo</a></li>
                    <li><a href="<?php echo URLROOT; ?>/galeries/english"><i class="fa fa-file-text-o"></i> Agregar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-list"></i> <span> Tareas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo URLROOT; ?>/tures"><i class="fa fa-list-ul"></i> Ver Todo</a></li>
                    <li><a href="<?php echo URLROOT; ?>/tures"><i class="fa fa-file-text-o"></i> Agregar</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-shopping-cart"></i>
                    <span>Ventas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo URLROOT; ?>/tures"><i class="fa fa-circle-o"></i> Ventas</a></li>
                    <li><a href="<?php echo URLROOT; ?>/tures"><i class="fa fa-circle-o"></i> Clientes</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-folder"></i> <span>Acceso</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo URLROOT; ?>/tures"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                    <li><a href="<?php echo URLROOT; ?>/tures"><i class="fa fa-circle-o"></i> Permisos</a></li>

                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-bar-chart"></i> <span>Consulta Ventas</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Consulta Ventas</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                    <small class="label pull-right bg-red">PDF</small>
                </a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->



        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
                <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo URLROOT; ?>/img/admin.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $_SESSION['user_email']; ?></p>

                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

    </section>
    <!-- /.sidebar -->
</aside>