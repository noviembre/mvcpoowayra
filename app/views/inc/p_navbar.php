<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row navbar-dark">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="<?php echo URLROOT; ?>/home">
            <img src="<?php echo URLROOT; ?>/assets/images/logo.svg" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo URLROOT; ?>/home"><img src="<?php echo URLROOT; ?>/assets/images/logo-mini.svg" alt="logo"/></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item d-none d-lg-block">
                <a class="nav-link">
                    <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
                </a>
            </li>
            <li class="nav-item">
                <form class="nav-link form-inline mt-2 mt-md-0 d-none d-lg-flex search">
                    <input type="text" class="form-control" placeholder="">
                </form>
            </li>
        </ul>



        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item dropdown d-none d-lg-flex">
                <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown">
                    Nuevo
                </a>
                <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
                    <a class="dropdown-item" href="<?php echo URLROOT; ?>/pages/add">
                        Tour
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        Mensaje
                    </a>
                </div>
            </li>





            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <i class="mdi mdi-email-outline"></i>
                    <span class="count bg-warning">0</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                    <h6 class="p-3 mb-0">Messages</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <img src="<?php echo URLROOT; ?>/<?php echo $_SESSION['user_photo']; ?>" alt="image" class="profile-pic">
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject ellipsis">Mark sent you a message</h6>
                            <p class="text-muted">
                                1 Minutes ago
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>




            <li class="nav-item dropdown">
                <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                    <i class="mdi mdi-bell-outline"></i>
                    <span class="count bg-danger">0</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                    <h6 class="p-3 mb-0">Notifications</h6>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-calendar"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject">Event today</h6>
                            <p class="text-muted ellipsis">
                                Just a reminder that you have an event today
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="mdi mdi-settings"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject">Ajustes</h6>
                            <p class="text-muted ellipsis">
                                Actualizar
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="mdi mdi-link-variant"></i>
                            </div>
                        </div>
                        <div class="preview-item-content">
                            <h6 class="preview-subject">Launch Admin</h6>
                            <p class="text-muted ellipsis">
                                New admin wow!
                            </p>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <h6 class="p-3 mb-0 text-center">Todas las Notificationes</h6>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-profile" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo URLROOT; ?>/<?php echo $_SESSION['user_photo']; ?>" alt="image">
                    <span class="d-none d-lg-inline">
                        <?php echo $_SESSION['user_name']; ?>
                    </span>
                </a>
                <div class="dropdown-menu navbar-dropdown w-100" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/actividades">
                        <i class="mdi mdi-cached mr-2 text-success"></i>
                        Reg. Actividad
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout">
                        <i class="mdi mdi-logout mr-2 text-primary"></i>
                        Salir
                    </a>
                </div>
            </li>
            <li class="nav-item nav-settings d-none d-lg-block">
                <a class="nav-link" href="#">
                    <i class="mdi mdi-backburger"></i>
                </a>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
        </button>
    </div>
</nav>