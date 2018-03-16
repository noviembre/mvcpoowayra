
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

        <div class="pad margin no-print">
            <div class="callout callout-success" style="margin-bottom: 0!important;">
                <h4><i class="fa fa-file-photo-o"></i> Galeria:</h4>
                This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>

                                <th>GID</th>
                                <th>Lang</th>
                                <th>tour</th>
                                <th>Titulo</th>
                                <th>Duracion</th>
                                <th>Img Titulo</th>
                                <th>Ruta</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php

                            $ListaTours = new GestorTours();
                            $ListaTours -> list_Galeria_tres_SlidesController();

                            ;

                            ?>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>


            </div>
        </div>





    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

