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
                <div class="row user-profile">


                    <div class="col-lg-4 side-left d-flex align-items-stretch">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body avatar">
                                        <h4 class="card-title">Tour:</h4>
                                        <img src="<?php echo URLROOT; ?>/assets/images/faces/foto1.jpg" alt="">
                                        <p class="name">
                                            <?php echo $data['titulo']; ?>
                                        </p>
                                        <p class="designation">
                                            <b> <?php echo $data['duracion']; ?></b></p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 stretch-card">
                                <div class="card">
                                    <div class="card-body overview">

                                        <div class="wrapper about-user">
                                            <h4 class="card-title mt-4 mb-3">Detalles</h4>
                                            <p>Construyendo tour...</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8 side-right stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                                    <h4 class="card-title mb-0">Details</h4>

                                    <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar">Siguiente</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Finalizar</a>
                                        </li>

                                    </ul>

                                </div>
                                <form action="<?php echo URLROOT; ?>/pages/temporal/<?php echo $data['ramdon']; ?>" method="post">
                                    <div class="wrapper">
                                        <hr>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">

                                                <div class="form-group">
                                                    <label for="name">Descripcion: </label>
                                                    <textarea name="tdescripcion" class="ckeditor" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                                    </textarea>
                                                </div>

                                            </div><!-- tab content ends -->


                                            <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">

                                                <div class="form-group">
                                                    <label for="website">Itinerario Completo: </label>
                                                    <textarea name="tifull" class="ckeditor" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                                    </textarea>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">

                                                <div class="form-group">
                                                    <label for="change-password">Incluye: </label>
                                                    <textarea name="tincluye" class="ckeditor" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                                    </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">No Incluye: </label>
                                                    <textarea name="tnoincluye" class="ckeditor" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                                    </textarea>
                                                </div>
                                                <div class="form-group mt-5">
                                                    <button type="submit" class="btn btn-success mr-2">Crear</button>
                                                    <button class="btn btn-outline-danger">Cancelar</button>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </form>
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
<script src="<?php echo URLROOT; ?>/ckeditor/ckeditor.js"></script>

</body>

</html>