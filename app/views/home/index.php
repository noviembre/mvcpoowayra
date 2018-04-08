<?php require APPROOT . '/views/inc/p_admin_header.php'; ?>


<!-- Page level plugin CSS -->
</head>


<body class="fixed-nav sticky-footer" id="page-top">
<!-- ===============         NAVBAR          ====================  -->
<?php require APPROOT . '/views/inc/p_navbar.php'; ?>
<!-- ===============         NAVBAR          ====================  -->


<div class="content-wrapper">


    <div class="container-fluid">

        <!-- Title & Breadcrumbs-->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h4 class="theme-cl">Progreso</h4>
            </div>
        </div>
        <!-- Title & Breadcrumbs-->

        <!-- =======  primera fila starts   ====== -->
        <div class="card-group mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="float-right">
                                <i class="ti-list cl-purple font-25"></i>
                            </div>
                            <h4 class="mb-0">
                                <?php echo $data['total']->contando; ?>
                            </h4>
                            <span>Nro. de Tours </span>
                        </div>
                        <div class="col-12">
                            <div class="progress mt-3 mb-1" style="height: 6px;">
                                <div class="progress-bar bg-purple" role="progressbar" style="width:60%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                            </div>
                            <div class="text-muted f12">
                                <span>Progreso</span>
                                <span class="float-right">80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="float-right">
                                <i class="ti-pencil cl-danger font-25"></i>
                            </div>
                            <h4 class="mb-0">
                                <?php echo $data['editando']->editando; ?>
                            </h4>
                            <span>Editados - </span>
                        </div>
                        <div class="col-12">
                            <div class="progress mt-3 mb-1" style="height: 6px;">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                            </div>
                            <div class="text-muted f12">
                                <span>Progreso</span>
                                <span class="float-right">65%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="float-right">
                                <i class="ti-check cl-warning font-25"></i>
                            </div>
                            <h4 class="mb-0">
                                <?php echo $data['publicados']->publicados; ?>
                            </h4>
                            <span>Publicados </span>
                        </div>
                        <div class="col-12">
                            <div class="progress mt-3 mb-1" style="height: 6px;">
                                <div class="progress-bar bg-warning" role="progressbar" style="width:72%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                            </div>
                            <div class="text-muted f12">
                                <span>Progreso</span>
                                <span class="float-right">72%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-12">
                            <div class="float-right">
                                <i class="ti-flag cl-success font-25"></i>
                            </div>
                            <h4 class="mb-0">
                               oo
                            </h4>
                            <span>Tours Ingles -  12</span>
                        </div>
                        <div class="col-12">
                            <div class="progress mt-3 mb-1" style="height: 6px;">
                                <div class="progress-bar bg-success" role="progressbar" style="width:85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
                            </div>
                            <div class="text-muted f12">
                                <span>Progreso</span>
                                <span class="float-right">85%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =======  primera fila starts   ====== -->

    </div>

    <!-- /. container-fluid ends -->







    <?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>
</div>
<!-- content-wrapper -->

</body>
</html>

