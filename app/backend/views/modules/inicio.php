
<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:ingreso");

	exit();

}
include "views/modules/navbar.php";
include "views/modules/sidebar.php";
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-star"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text">Total Tours</span>
                            <div class="inner">
                                <h1 class="text-center text-bold">
                                    <?php
                                    $contar = new GestorTours();
                                    $contar ->count_All_toursControllers();
                                    ?>
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

                                    <?php
                                    $contar = new GestorTours();
                                    $contar ->count_Published_toursControllers();
                                    ?>
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
                                   <?php
                                   $contar = new GestorTours();
                                   $contar ->count_editing_toursControllers();
                                   ?>
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

        </div>

        <div class="hold-transition ">
            <div class="login-box">


                <div class="col-md-12 col-sm-12 col-xs-12 ">
                    <!-- Box Comment -->
                    <div class="box box-widget">
                        <div class="box-header with-border">
                            <div class="user-block">

                                <span class="username text-center">Buscar Tour</span>
                            </div>
                            <!-- /.user-block -->


                            <!-- /.box-tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="contact-right">
                                <form  method="post" class="form-horizontal ">

                                    <div class="form-group-lg">
                                        <select class="form-control select2 input-lg" >
                                            <?php
                                            $buscarTour = new GestorTours();
                                            $buscarTour -> listar_TourController();

                                            ?>

                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <br>

                                        <div class="col-md-offset-5">
                                            <a href="#">
                                                <input type="submit" value="Buscar" class="btn btn-bitbucket btn-lg">
                                            </a>
                                        </div>


                                    </div>

                                </form>
                            </div>



                        </div>



                        <!-- /.box-footer -->
                    </div>
                    <!-- /.box -->
                </div>


            </div>
        </div>




    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

