
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
            <div class="col-md-12">

                <div class="box">
                    <div class="box-header with-border">
                        <h1 class="box-title">Wayra Cusco World</h1>
                        <div class="box-tools pull-right">
                        </div>
                    </div> <!-- /.box-header -->

                    <!-- centro -->

                    <div class="row">
                        <div class="container">


                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-aqua">
                                    <div class="inner">
                                        <h3>
                                            <?php
                                            $contar = new GestorTours();
                                            $contar ->count_All_toursControllers();
                                            ?>
                                        </h3>

                                        <p>Total Tours</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-line-chart"></i>
                                    </div>
                                    <a href="tours" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->

                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-green-gradient">
                                    <div class="inner">
                                        <h3>
                                            <?php
                                            $contar = new GestorTours();
                                            $contar ->count_Published_toursControllers();
                                            ?>
                                        </h3>

                                        <p>Tours Publicados</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <a href="tourspublished" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <!-- ./col -->

                            <div class="col-lg-3 col-xs-6">
                                <!-- small box -->
                                <div class="small-box bg-orange-active">
                                    <div class="inner">
                                        <h3>
                                            <?php
                                            $contar = new GestorTours();
                                            $contar ->count_editing_toursControllers();
                                            ?>
                                        </h3>

                                        <p>Tours Editando</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fa fa-pencil-square"></i>
                                    </div>
                                    <a href="toursEditing" class="small-box-footer">Ver mas <i class="fa fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                        <!-- ./col -->
                        </div>

                    </div>
                    <!-- /.row -->
                         <div class="login-box">
                            <div class="login-logo">
                                <h1>Buscar <span class="fa fa-search"></span></h1>
                                <h2>Falta terminar</h2>
                            </div>
                            <!-- /.login-logo -->
                            <div class="login-box-body">

                                <form  method="post">

                                    <div class="form-group has-feedback">
                                        <select class="form-control select2" style="width: 100%;">
                                            <option selected="selected">Alabama</option>
                                            <option>Alaska</option>
                                            <option>California</option>
                                            <option>Delaware</option>
                                            <option>Tennessee</option>
                                            <option>Texas</option>
                                            <option>Washington</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <a href=""><input type="submit" value="Buscar" class="btn btn-primary"></a>

                                    </div>

                                </form>

                            </div>

                       </div> <!-- /.login-box-body -->



                    <!--Fin centro -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

