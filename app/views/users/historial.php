<?php require APPROOT . '/views/inc/p_admin_header.php'; ?>

<!-- Page level plugin CSS -->
</head>


<body class="fixed-nav sticky-footer" id="page-top">
<!-- ===============         NAVBAR          ====================  -->
<?php require APPROOT . '/views/inc/p_navbar.php'; ?>
<!-- ===============         NAVBAR          ====================  -->


<div class="content-wrapper">


    <div class="container-fluid">

        <!-- =======  primera fila starts   ====== -->


        <!-- Encabezado starts -->
        <div class="row page-titles">

            <div class="col-md-12 align-self-center">
                <h4 class="theme-cl">Lista de Registros del Sistema</h4>

            </div>

        </div>
        <!-- Encabezado ends -->



        <!-- Listar Projects Starts -->
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-img-overlap">
                        <a href="#" class="user-icon user-card-mail"><i class="ti-email"></i></a>
                        <a href="#" class="user-icon user-card-phone"><i class="ti-mobile"></i></a>
                        <img class="card-img-top" src="<?php echo URLROOT; ?>/img/wayra.png" alt="Card image cap" />
                    </div>
                    <div class="card-block padd-0 translateY-50 text-center">
                        <div class="card-avatar style-2">
                            <img src="<?php echo URLROOT; ?>/img/wayra.png" class="img-circle img-responsive" alt="" />
                        </div>
                        <h5 class="font-normal mrg-bot-0 font-18 card-title">
                            <?php echo SITENAME; ?>
                        </h5>
                        <p class="card-small-text">Travel Agency</p>
                    </div>

                </div>


            </div>
            <!-- /.col-md-4 -->
            <div class="col-md-8">
                <div class="nav-tabs-custom bg-white">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab">Historial</a></li>


                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <ul class="timeline timeline-inverse" >

                                <!-- timeline item -->

                                <?php foreach ($data['historial'] as $lts):?>
                                    <li >

                                        <?php if ($lts->actividad == 'Ingreso'): ?>
                                            <i class="fa fa-sign-out bg-success-light"></i>
                                        <?php else: ?>
                                            <i class="fa fa-sign-in bg-danger-light"></i>
                                        <?php endif; ?>

                                        <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i>
                                    <b>
                                        <?php echo date('H:i:s', strtotime($lts->fecha));?>

                                    </b>
                                    </span>

                                            <h3 class="timeline-header">


                                                <?php if ($lts->actividad == 'Ingreso'): ?>
                                                    <b class="text-success">Ingreso </b> al Sistema
                                                <?php else: ?>
                                                    <b class="text-danger">Salio</b> del Sistema
                                                <?php endif; ?>
                                            </h3>

                                            <div class="timeline-body" >
                                                <i><?php echo $lts->nombre ;?></i>


                                                <div class="pull-right">

                                                    <small>
                                                        <?php echo date("D d, M Y", strtotime($lts->fecha)) ;?>
                                                    </small>


                                                </div>

                                            </div>

                                        </div>
                                    </li>
                                <?php endforeach; ?>
                                <!-- END timeline item -->
                                <!-- timeline item -->

                            </ul>

                        </div>

                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col-md-8 -->




        </div>
        <!-- Listar Projects Ends -->



    </div>

    <!-- /. container-fluid ends -->


    <?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>


</div>
<!-- content-wrapper -->

</body>
</html>

