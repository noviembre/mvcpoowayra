<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link d-flex">
                <div class="profile-image">
                    <img src="<?php echo URLROOT; ?>/<?php echo $_SESSION['user_photo']; ?>" alt="image"/>
                    <span class="online-status online"></span>
                </div>
                <div class="profile-name">
                    <p class="name">
                        <?php echo $_SESSION['user_name']; ?>
                    </p>
                    <p class="designation">
                        Admin
                    </p>
                </div>
            </div>
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Principal</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/todos">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Tours</span>
                <span class="badge badge-primary badge-pill">1</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/mensajes">
                <i class="icon-layout menu-icon"></i>
                <span class="menu-title">Mensajes</span>

            </a>
        </li>


        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-advanced" aria-expanded="false" aria-controls="ui-advanced">
                <i class="icon-air-play menu-icon"></i>
                <span class="menu-title">Registros</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-advanced">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/users/actividades">
                            Actividades</a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/users/historial">
                            Registros
                        </a></li>

                </ul>
            </div>
        </li>



        <li class="nav-item nav-category">
            <span class="nav-link">Ventas</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>/pages/ventas">
                <i class="icon-file menu-icon"></i>
                <span class="menu-title">Ventas</span>
            </a>
        </li>



        <li class="nav-item nav-category">
            <span class="nav-link">Utilidades </span>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="icon-lock menu-icon"></i>
                <span class="menu-title">Servicios</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/pages/hoteles">
                            Hoteles </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/pages/agencias">
                            Agencias </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/pages/contactos">
                            Contactos </a></li>
                    <li class="nav-item"> <a class="nav-link" href="<?php echo URLROOT; ?>/pages/transporte">
                            Transporte </a></li>
                </ul>
            </div>
        </li>


    </ul>
</nav>