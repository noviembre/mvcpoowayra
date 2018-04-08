




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

            <div class="col-md-5 align-self-center">
                <h4 class="theme-cl">Por favor termina de completar los datos</h4>

            </div>

        </div>
        <!-- Encabezado ends -->



        <!-- Listar Projects Starts -->
        <div class="row">

            <!-- Single Contact List -->
            <div class="col-md-12 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">

                        <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">


                            <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true"><b>Info</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar"><b>Itinerario</b></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security"><b>Incluye</b></a>
                                </li>

                            </ul>

                        </div>
                        <form action="<?php echo URLROOT; ?>/pages/temporal/<?php echo $data['ramdon']; ?>" method="post">
                            <div class="wrapper">
                                <hr>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">

                                        <div class="form-group">
                                            <label for="name"><b>Descripcion: </b></label>
                                            <textarea name="tdescripcion" class="ckeditor" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                                    </textarea>
                                        </div>

                                    </div><!-- tab content ends -->


                                    <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">

                                        <div class="form-group">
                                            <label for="website"><b>Itinerario Completo: </b></label>
                                            <textarea name="tifull" class="ckeditor" style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                                    </textarea>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">

                                        <div class="form-group">
                                            <label for="change-password"><b>Incluye: </b></label>
                                            <textarea name="tincluye" class="ckeditor" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                                    </textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for=""><b>No Incluye: </b></label>
                                            <textarea name="tnoincluye" class="ckeditor" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">

                                                    </textarea>
                                        </div>
                                        <div class="form-group mt-5">
                                            <button type="submit" class="btn btn-primary mr-2">Guardar Tour</button>
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
        <!-- Listar Projects Ends -->



    </div>

    <!-- /. container-fluid ends -->






    <?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>

    <!-- Custom js for this page-->
    <script src="<?php echo URLROOT; ?>/ckeditor/ckeditor.js"></script>
</div>
<!-- content-wrapper -->

</body>
</html>