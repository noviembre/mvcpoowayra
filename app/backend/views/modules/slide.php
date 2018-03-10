
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

                        <div class="pull-left">
                            <h2> Arrastra Las Imagenes </h2>
                        </div>

                    </div>

                    <div class="panel-body" id="imgSlide">

                        <ul id="columnasSlide" class="panel panel-default">

                            <?php

                            $slide = new GestorSlide();
                            $slide -> mostrarImagenVistaController();

                            ?>

                        </ul>

                    </div> <!--panel-body -->

                    <div class="panel-body" id="textoSlide">

                        <ul <ul id="ordenarTextSlide" class="panel panel-default">

                            <?php

                            $slide = new GestorSlide();
                            $slide -> editorSlideController();

                            ?>

                        </ul>

                    </div> <!--panel-body -->




                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->