
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
                <div class="row grid-margin">
                    <div class="col-10">

                        <form action="<?php echo URLROOT; ?>/pages/add" method="post">
                        <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Agregar un Nuevo tour: </h4>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Nombre del tour: </label>
                            </div>
                            <div class="col-lg-8">
                                <input name="titulo" class="form-control" maxlength="100" id="defaultconfig" type="text" placeholder="Ejemplo: City Tour">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Duracion:</label>
                            </div>
                            <div class="col-lg-8">
                                <input name="duracion" class="form-control" maxlength="100" id="defaultconfig-2" type="text" placeholder="Full Day">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Etiquetas: </label>
                            </div>
                            <div class="col-lg-8">
                                <input name="etiquetas" class="form-control" maxlength="200" id="defaultconfig-3" type="text" placeholder="City Tour Full Day">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-3">
                                <label class="col-form-label">Idioma</label>
                            </div>
                            <div class="col-lg-8">
                                <select name="idioma" id="" class="form-control" required>
                                    <option value="es" selected>Espanol</option>
                                    <option value="en">Ingles</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-lg-12">
                        <input class="btn btn-primary pull-right" type="submit" value="Siguiente">
                            </div>
                        </div>
                    </div>
                        </div>
                        </form>

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

<script src="<?php echo URLROOT; ?>/assets/js/bt-maxLength.js"></script>
<!-- End custom js for this page-->
</body>

</html>