<?php require APPROOT . '/views/inc/p_admin_header.php'; ?>
<link href="<?php echo URLROOT; ?>/assets/plugins/datatables/css/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                <h4 class="theme-cl">Todos los Tours en Ingles</h4>
            </div>

            <div class="col-md-7 text-right">

                <div class="btn-group">
                    <a href="<?php echo URLROOT; ?>/pages/progresoEn" class="btn btn-info">
                        Progreso
                    </a>
                </div>



                <div class="btn-group">
                    <a href="#" class="btn gredient-btn" data-toggle="modal" data-target="#addTour" title="Create project">
                        +
                    </a>
                </div>
            </div>

        </div>
        <!-- Encabezado ends -->



        <!-- Listar Projects Starts -->
        <div class="row">

            <!-- Single Contact List -->
            <div class="col-md-12 col-sm-12 mb-4">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">
                            <thead>
                            <tr>

                                <th>Tour</th>
                                <th>Duracion</th>
                                <th>Soles</th>
                                <th>Dolares</th>
                                <th>Editar</th>
                                <th>?</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach($data['tours'] as $tour) : ?>
                                <tr>
                                    <td><?php echo $tour->titulo; ?> </td>
                                    <td><?php echo $tour->duracion; ?></td>
                                    <td><?php echo $tour->dolares; ?></td>
                                    <td><?php echo $tour->soles; ?></td>


                                    <td>
                                        <div class="ground-right">
                                            <a class="btn btn-small font-midium font-12 btn-rounded btn-primary width-45 height-45 text-center" href="<?php echo URLROOT; ?>/pages/edit/<?php echo $tour->tid; ?>">
                                                <i class="ti-pencil "></i></a>

                                        </div>



                                    </td>
                                    <td></td>
                                </tr>
                            <?php endforeach; ?>



                            </tbody>
                        </table>




                    </div>
                </div>
            </div>
        </div>
        <!-- Listar Projects Ends -->



    </div>

    <!-- /. container-fluid ends -->

    <!-- ===== Modal New Project Starts  ===== -->
    <div class="add-popup modal fade" id="addTour" tabindex="-1" role="dialog" aria-labelledby="addTour">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header gredient-bg">
                    <ul class="card-actions icons right-top">
                        <li>
                            <a href="javascript:void(0)" class="text-white" data-dismiss="modal" aria-label="Close">
                                <i class="ti-close"></i>
                            </a>
                        </li>
                    </ul>
                    <h4 class="modal-title">Nuevo Tour</h4>

                </div>
                <form action="<?php echo URLROOT; ?>/pages/add" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">Nombre del tour: </label>
                            <div class="input-group">
                                <span class="input-group-addon br br-light no-br">
                                    <i class="ti-pencil-alt"></i>
                                </span>
                                <input name="titulo" type="text" class="form-control no-bl" id="add_name" placeholder="Ejemplo: City Tour" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Duracion:</label>
                            <div class="input-group">
                               <span class="input-group-addon br br-light no-br">
                                    <i class="ti-time"></i>
                                </span>
                                <input name="duracion" type="text" class="form-control no-bl" id="add_duracion" placeholder="Full Day" required>


                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Etiquetas:</label>
                            <div class="input-group">
                               <span class="input-group-addon br br-light no-br">
                                    <i class="ti-tag"></i>
                                </span>
                                <input name="etiquetas" type="text" class="form-control no-bl" id="add_name" placeholder="City Tour Full Day" required>


                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Idioma</label>
                            <div class="input-group">
                                <span class="input-group-addon br br-light no-br"><i class="ti-flag"></i></span>
                                <select name="idioma" class="form-control select2" style="width: 100%;" required>
                                    <option value="es" selected>Espanol</option>
                                    <option value="en">Ingles</option>
                                </select>
                            </div>
                        </div>



                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default btn-flat pull-left" type="reset">Limpiar</button>
                        <button class="btn btn-dark btn-flat" data-dismiss="modal" aria-label="Close">Cerrar</button>
                        <button type="submit" class="btn gredient-btn">Guardar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- ===== Modal New Project Ends ===== -->





    <?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>

    <script type="text/javascript" src="<?php echo URLROOT; ?>/assets/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo URLROOT; ?>/assets/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "url": "<?php echo URLROOT; ?>/assets/plugins/datatables/js/Spanish.json"
                }
            });


        } );

    </script>
</div>
<!-- content-wrapper -->

</body>
</html>
