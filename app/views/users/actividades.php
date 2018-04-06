<!-- ===== PROHIBIDO Importar en la parte superior ======-->
<?php require APPROOT . '/views/inc/p_admin_header.php'; ?>


<!-- ===== Espacio para importar alguna libreria INFERIOR ======-->
</head>
<!-- Deja el la etiqueta de cerrado head ahi esta ok -->

<body>
<div class="container-scroller">


    <!-- =========== Navbar Starts =========== -->
    <?php require APPROOT . '/views/inc/p_navbar.php'; ?>
    <!-- =========== Navbar Ends  =========== -->

    <div class="container-fluid page-body-wrapper">


        <!-- =========== Derecho Starts =========== -->
        <?php require APPROOT . '/views/inc/p_ladoderecho.php'; ?>
        <!-- =========== Derecho Ends  =========== -->


        <!-- =========== Izquierdo Starts =========== -->
        <?php require APPROOT . '/views/inc/p_ladoizquierdo.php'; ?>
        <!-- =========== Izquierdo Ends  =========== -->



        <!-- partial -->
        <div class="main-panel">


            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                            <div class="card-body">
                                <h4 class="card-title">Registro</h4>
                                <p class="card-description">Registro de Actividades</p>
                                <div class="mt-5">
                                    <div class="timeline">

                                        <?php foreach ($data['actividad'] as $lts):?>


                                        <?php if ($lts->actividad == 'Creo'): ?>
                                        <div class="timeline-wrapper timeline-wrapper-primary">
                                            <?php elseif ($lts->actividad == 'Modifico'): ?>
                                         <div class="timeline-wrapper timeline-wrapper-warning">
                                             <?php else: ?>
                                          <div class="timeline-wrapper timeline-wrapper-danger">
                                            <?php endif; ?>

                                            <div class="timeline-badge"></div>
                                            <div class="timeline-panel">
                                                <div class="timeline-heading">
                                                    <h6 class="timeline-title">
                                                        <b><?php echo $lts->actividad ;?></b>
                                                    </h6>
                                                </div>
                                                <div class="timeline-body">
                                                    <p>
                                                        <?php echo $lts->titulo ;?> - <?php echo $lts->duracion ;?>
                                                        - <small>
                                                            <b>
                                                                <?php echo date("H :i :s", strtotime($lts->fecha)) ;?>
                                                            </b></small>
                                                    </p>
                                                </div>
                                                <div class="timeline-footer d-flex align-items-center">

                                                    <i class="mdi mdi-heart-outline text-muted mr-1"></i>

                                                    <span><?php echo $lts->nombre ;?></span>
                                                    <span class="ml-auto font-weight-bold">
                                                      <?php echo date("D d, M Y", strtotime($lts->afecha)) ;?>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endforeach; ?>


                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


            <!-- =========== Wrapers Ends  =========== -->
            <!-- ==== No esta permitido la edicion hacia abajo a partir de aqui  ====== -->

            <!-- =========== Mini footer Starts =========== -->
            <?php require APPROOT . '/views/inc/p_admin_mini_pie.php'; ?>
            <!-- =========== Mini footer Ends  =========== -->


            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>




<?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>
<!-- Custom js for this page-->

<!-- End custom js for this page-->


</body>

</html>