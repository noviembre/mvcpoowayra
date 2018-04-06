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
                <div class="card">
                    <div class="card-body">



                        <div class="row">
                            <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                <div class="wrapper d-flex align-items-center justify-content-center">

                                    <div class="wrapper d-flex flex-column ml-4">
                                        <p class="font-weight-bold mb-2"> </p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                <div class="wrapper d-flex align-items-center justify-content-center">

                                    <div class="wrapper d-flex flex-column ml-4">
                                        <div class="template-demo">

                                            <a href="<?php echo URLROOT; ?>/pages/spanish">
                                                <input type="button" value="Espanol" class="btn btn-inverse-warning btn-rounded btn-fw">
                                            </a>


                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6 mb-4 mb-md-0 border-right-md d-flex justify-content-between justify-content-md-center">
                                <div class="wrapper d-flex align-items-center justify-content-center">

                                    <div class="wrapper d-flex flex-column ml-4">
                                        <div class="template-demo">

                                            <a href="<?php echo URLROOT; ?>/pages/english">
                                                <input type="button" value="Ingles" class="btn btn-inverse-primary btn-rounded btn-fw">
                                            </a>


                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-3 col-sm-6 d-flex justify-content-between justify-content-md-center">
                                <div class="wrapper d-flex align-items-center justify-content-center">

                                    <div class="wrapper d-flex flex-column ml-4">
                                        <div class="template-demo">


                                            <a href="<?php echo URLROOT; ?>/pages/add">
                                                <input type="button" value="Agregar" class="btn btn-inverse-dark btn-rounded btn-fw">
                                            </a>


                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>




                        <h4 class="card-title">Listado de todos los Tours en Espanol</h4>
                        <div class="row">
                            <div class="col-12">
                                <table id="order-listing" class="table">
                                    <thead>
                                    <tr>

                                        <th>Tour</th>
                                        <th>Duracion</th>
                                        <th>Soles</th>
                                        <th>Dolares</th>
                                        <th>Acciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php foreach($data['tours'] as $tour) : ?>
                                        <tr>
                                            <td><?php echo $tour->titulo; ?></td>
                                            <td><?php echo $tour->duracion; ?></td>
                                            <td><?php echo $tour->dolares; ?></td>
                                            <td><?php echo $tour->soles; ?></td>
                                            <td><a href="<?php echo URLROOT; ?>/pages/edit/<?php echo $tour->tid; ?>" class="btn btn-warning">
                                                    <i class="mdi mdi-border-color"></i></a>

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                    </tbody>
                                </table>
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
<script src="<?php echo URLROOT; ?>/assets/js/data-table.js"></script>
<!-- End custom js for this page-->
</body>

</html>