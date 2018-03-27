<?php require APPROOT . '/views/inc/admin_cabecera.php'; ?>

<body class="hold-transition skin-blue sidebar-mini">

<!-- ./wrapper starts -->
<div class="wrapper">

    <?php require APPROOT . '/views/inc/admin_header.php'; ?>

    <!-- Left side column. contains the logo and sidebar -->
    <?php require APPROOT . '/views/inc/admin_panel_izquierda.php'; ?>


    <!-- Content Wrapper starts -->
    <div class="content-wrapper">

        <!-- Content Header starts -->
        <section class="content-header">
            <h1>
                Wayra Cusco World
                <small>Revelation</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                <li class="active">Here</li>
            </ol>
        </section>
        <!-- Content Header ends -->




        <!-- Main content starts-->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="fa fa-star"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Total Tours</span>
                            <div class="inner">
                                <h1 class="text-center text-bold">
                                    <?php echo $data['total']->contando; ?>
                                </h1>
                            </div>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="fa fa-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Tours Publicados</span>
                            <div class="inner">
                                <h1 class="text-center text-bold">
                                    <?php echo $data['publicados']->publicados; ?>
                                </h1>
                            </div>

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                    <span class="info-box-icon bg-blue">
                        <i class="fa fa-edit"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tours Editando</span>

                            <div class="inner">
                                <h1 class="text-center text-bold">
                                    <?php echo $data['editando']->editando; ?>
                                </h1>
                            </div>


                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                    <span class="info-box-icon bg-purple">
                        <i class="fa fa-battery-3"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tours Terminados</span>

                            <div class="inner">
                                <h1 class="text-center text-bold">
                                    ?</h1>
                            </div>

                        </div>
                        <!-- /.info-box-content -->
                    </div>
                </div>

            </div>//

        </section>
        <!-- Main content ends-->






    </div>
    <!-- Content Wrapper starts -->


    <?php require APPROOT . '/views/inc/admin_pie.php'; ?>
