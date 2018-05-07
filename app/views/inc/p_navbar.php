<nav class="navbar navbar-expand-lg bb-1 navbar-light br-full-dark bg-dark fixed-top" id="mainNav">

    <!-- Start Header -->
    <header class="header-logo bg-dark bb-1 br-1 br-light-dark">
        <a class="nav-link text-center mr-lg-3 hidden-xs" id="sidenavToggler"><i class="ti-align-left"></i></a>
        <a class="gredient-cl navbar-brand" href="../" target="_blank">Grupo Wayra</a>
    </header>
    <!-- End Header -->

    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="ti-align-left"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">

        <!-- =============== Start Side Menu ============== -->
        <div class="navbar-side">
            <ul class="navbar-nav navbar-sidenav bg-light-dark" id="exampleAccordion">


                <!-- Start Dashboard -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/pages/todos">
                        <i class="ti i-cl-3 ti-comment-alt"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <!-- End Dashboard -->

                <!-- Start Shopping -->
                <li class="nav-item active" data-toggle="tooltip" data-placement="right" title="Tours">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/pages/todos">
                        <i class="ti i-cl-3 ti-comment-alt"></i>
                        <span class="nav-link-text">Tours</span>
                    </a>
                </li>
                <!-- End Shopping -->



                <!-- Start Tasks Apps -->
                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Registros">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#advance-apps" data-parent="#exampleAccordion">
                        <i class="ti i-cl-9 ti ti-desktop"></i>
                        <span class="nav-link-text">Registros</span>
                    </a>
                    <ul class="sidenav-second-level collapse" id="advance-apps">

                        <li>
                            <a href="<?php echo URLROOT; ?>/users/actividades">Actividades</a>
                        </li>

                        <li>
                            <a href="<?php echo URLROOT; ?>/users/historial">Registros</a>
                        </li>

                    </ul>

                </li>
                <!-- End Tasks Apps -->

                <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tours">
                    <a class="nav-link" href="<?php echo URLROOT; ?>/users/logout">
                        <i class="ti i-cl-3 ti-power-off"></i>
                        <span class="nav-link-text">Salir</span>
                    </a>
                </li>




            </ul>
        </div>
        <!-- =============== End Side Menu ============== -->

        <!-- =============== Search Bar ============== -->
        <ul class="navbar-nav ml-left">
            <li class="nav-item">
                <form class="form-inline my-2 my-lg-0 mr-lg-2">
                    <div class="input-group">
						<span class="input-group-btn">
							<button class="btn btn-primary" type="button">
							  <i class="ti-search"></i>
							</button>
						</span>
                        <input class="form-control" type="text" placeholder="">
                    </div>
                </form>
            </li>
        </ul>
        <!-- =============== End Search Bar ============== -->




        <!-- =============== Header Rightside Menu ============== -->
        <ul class="navbar-nav ml-auto">


            <?php if ($_SESSION['user_email'] =='tanos@ya.com'): ?>
                <!-- nnnnnnnnn -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="gredient-cl ti-cloud"></i>
                        <span class="a-nav__link-badge a-badge a-badge--pink">
                         <?php //echo $data['c_deseos']->contador; ?>
                    </span>
                        <span class="hidden-lg hidden-md mrg-l-10">Nuevos Mensajes</span>
                    </a>
                    <div class="dropdown-menu animated flipInX" aria-labelledby="messagesDropdown">
                        <div class="dropdown-header text-center pink-bg">
                        <span class="a-dropdown__header-title">
                            <?php //echo $data['c_deseos']->contador; ?> Nuevos Mensajes</span>

                        </div>
                        <div class="ground-list ground-list-hove" id="message-box">

                            <!--   Contenido para foreach   -->
                            <?php// foreach($data['l_deseos'] as $lst) : ?>
                            <div class="ground ground-single-list">
                                <a href="#">
                                    <div class="btn-circle-40 btn-warning"><i class="ti-check"></i></div>
                                </a>

                                <?php
                                //$now = new DateTime();
                                //                                $past_time = new DateTime($lst->tiempo_born);
                                //                                $interval = $past_time->diff($now);
                                //
                                //                                if($data['c_deseos']->contador == 0) :
                                ?>

                                <div class="ground-content">
                                    <h6><a href="#">
                                            Ninguno por el momento
                                        </a></h6>
                                    <small class="text-fade">
                                        .....
                                    </small>
                                </div>
                                <?php //else: ?>

                                <div class="ground-content">
                                    <h6><a href="#">
                                            <?php //echo $lst->detalles; ?>
                                        </a></h6>
                                    <small class="text-fade">
                                        .... <b> <?php //echo
                                            //$interval->format(" %a Days Ago");?></b>
                                    </small>
                                </div>

                                <?php // endif; ?>


                            </div>
                            <?php // endforeach; ?>
                            <!--   Contenido para foreach Ends  -->


                        </div>
                        <a class="dropdown-item view-all" href="<?php echo URLROOT; ?>/pages/mensajes">Ninguno</a>
                    </div>
                </li>
                <!-- nnnnnnnnn -->



                <!-- xxxxxt -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle mr-lg-3 a-topbar__nav a-nav" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="gredient-cl ti-bell"></i>
                        <span class="a-nav__link-badge a-badge a-badge--accent a-animate-blink">
                        0
                    </span>
                        <span class="hidden-lg hidden-md mrg-l-10">Tareas</span>
                    </a>

                    <div class="dropdown-menu animated flipInX" aria-labelledby="alertsDropdown">
                        <div class="dropdown-header text-center accent-bg">
                        <span class="a-dropdown__header-title">
                            <?php // echo $data['c_uprojects']->contador; ?> Nuevas Tareas</span>
                        </div>

                        <div class="ground-list ground-list-hove" id="notification-box">

                            <!--   Contenido para foreach   -->
                            <?php // foreach($data['l_uprojects'] as $lst) : ?>
                            <div class="ground ground-single-list">
                                <a href="#">
                                    <div class="btn-circle-40 btn-warning"><i class="ti-anchor"></i></div>
                                </a>

                                <?php
                                //                                $now = new DateTime();
                                //                                $past_time = new DateTime($lst->inicio);
                                //                                $interval = $past_time->diff($now);
                                //
                                //                                if($data['c_uprojects']->contador == 0) :
                                ?>

                                <div class="ground-content">
                                    <h6><a href="#">
                                            Ninguno
                                        </a></h6>
                                    <small class="text-fade">
                                        .....
                                    </small>
                                </div>
                                <?php //else: ?>

                                <div class="ground-content">
                                    <h6><a href="#">
                                            <?php // echo $lst->titulo; ?>
                                        </a></h6>
                                    <small class="text-fade">
                                        Created <b> <?php //echo
                                            // $interval->format(" %a Days Ago");?>
                                        </b>
                                    </small>
                                </div>

                                <?php  //endif; ?>


                            </div>
                            <?php // endforeach; ?>
                            <!--   Contenido para foreach Ends  -->

                        </div>
                        <a class="dropdown-item view-all" href="<?php echo URLROOT; ?>/pages/mensajes">Ninguno</a>
                    </div>
                </li>
                <!-- Uxxxxxxds -->

            <?php else: ?>

            <?php endif; ?>













            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle mr-lg-0 user-img a-topbar__nav a-nav" id="userDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?php echo URLROOT; ?>/assets/dist/img/git_user.png" alt="user-img" width="36" class="img-circle">
                    <b class="f-size-17">
                        <?php echo $_SESSION['user_name']; ?>
                    </b>
                </a>

                <ul class="dropdown-menu dropdown-user animated flipInX" aria-labelledby="userDropdown">
                    <li class="dropdown-header green-bg">
                        <div class="header-user-pic">
                            <img src="<?php echo URLROOT; ?>/assets/dist/img/git_user.png" alt="user-img" width="36" class="img-circle">
                        </div>
                        <div class="header-user-det">
                            <?php if ($_SESSION['user_email'] =='tanos@ya.com'): ?>
                            <span class="a-dropdown__header-title">
                                <?php echo $_SESSION['user_name']; ?></span>
                            <span class="a-dropdown__header-subtitle">Admin</span>
                            <?php else: ?>
                                <span class="a-dropdown__header-title"><?php echo $_SESSION['user_name']; ?></span>
                                <span class="a-dropdown__header-subtitle">Usuario</span>
                            <?php endif; ?>

                        </div>
                    </li>
                    <?php if ($_SESSION['user_email'] =='tanos@ya.com'): ?>

                    <li><a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li><a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-power-off"></i> Salir</a></li>
                    <?php else: ?>
                        <li><a class="dropdown-item" href="<?php echo URLROOT; ?>/users/logout"><i class="fa fa-power-off"></i> Salir</a></li>
                    <?php endif; ?>

                </ul>
            </li>
        </ul>
        <!-- =============== End Header Rightside Menu ============== -->
    </div>
</nav>