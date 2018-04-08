<?php require APPROOT . '/views/inc/p_admin_header.php'; ?>
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css" rel="stylesheet">


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
                <h4 class="theme-cl">Todos los Tours</h4>
                <h3><?php flash('post_message'); ?></h3>
            </div>

            <div class="col-md-7 text-right">
                <div class="btn-group mr-lg-2">
                    <a href="#" class="btn btn-default tooltips">
                        <i class="ti-flix ti-layout-grid2"></i>
                    </a>
                </div>

                <div class="btn-group mr-lg-2">
                    <a href="<?php echo URLROOT; ?>/pages/todos" class="btn btn-default tooltips">
                        <i class="ti-flix ti-view-list-alt"></i>
                    </a>
                </div>

                <div class="btn-group mr-lg-2">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mas
                    </button>

                </div>
                <div class="btn-group">
                    <a href="<?php echo URLROOT; ?>/pages/spanish" class="btn btn-warning">
                       Espanol
                    </a>
                </div>

                <div class="btn-group">
                    <a href="#" class="btn gredient-btn" data-toggle="modal" data-target="#addTour" title="Crear un Nuevo Tour">
                        Agregar Tour
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
                    <div class="card-body ">
                        <table id="example" class="table table-striped table-bordered table-hover" style="width:100%">

                        <thead>
                            <tr>
                                <th>Idioma</th>
                                <th>Nombre</th>
                                <th>Duracion</th>
                                <th>Soles</th>
                                <th>Dolares</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach($data['tours'] as $tour) : ?>
                                <tr>

                                    <td><?php
                                        if($tour->lang =='es'){
                                            echo '<small class="label label-warning">
                                                <i class="fa fa-flag"></i> Espanol
                                                </small>';
                                        }else {
                                            echo '<small class="label label-primary">
                                                <i class="fa fa-flag"></i> Ingles
                                                </small>';
                                        }

                                        ?></td>


                                    <td><?php echo $tour->titulo; ?></td>
                                    <td><?php echo $tour->duracion; ?></td>
                                    <td><?php echo $tour->dolares; ?></td>
                                    <td><?php echo $tour->soles; ?></td>
                                    <td>
                                        <a href="<?php echo URLROOT; ?>/pages/edit/<?php echo $tour->tid; ?>" class="show-more" data-toggle="tooltip" title="Editar">
                                            <i class="ti-arrow-right"></i>
                                        </a>
                                    </td>
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
                    <h4 class="modal-title">Add Project</h4>
                    <div class="user-avatar-wrapper">
                        <figure>
                            <div class="icon-upload">
                                <label for="file-input">
                                        <span class="edit-avatar">
                                            <span class="no-avatar app_primary_lighten_bg animated zoomIn">

                                            </span>
                                        </span>
                                </label>
                                <input id="file-input" type="file">
                            </div>
                        </figure>
                    </div>
                </div>
                <form action="<?php echo URLROOT; ?>/projects/add" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label">Project Name</label>
                            <div class="input-group">
                                <span class="input-group-addon br br-light no-br"><i class="ti-pencil-alt"></i></span>
                                <input name="titulo" type="text" class="form-control no-bl" id="add_name" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Project Priority</label>
                            <div class="input-group">
                                <span class="input-group-addon br br-light no-br"><i class="ti-stamp"></i></span>

                                <select name="prioridad" class="form-control select2" style="width: 100%;" required>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="C">C</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Project Season</label>
                            <div class="input-group">
                                <span class="input-group-addon br br-light no-br"><i class="ti-agenda"></i></span>
                                <select name="season" class="form-control select2" style="width: 100%;" required>
                                    <option value="1" selected>I</option>
                                    <option value="2">II</option>
                                    <option value="3">III</option>
                                    <option value="4">IV</option>
                                    <option value="5">V</option>
                                </select>
                            </div>
                        </div>



                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default btn-flat pull-left">Delete</button>
                        <button class="btn btn-dark btn-flat" data-dismiss="modal" aria-label="Close">Cancel</button>
                        <button type="submit" class="btn gredient-btn">Save</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- ===== Modal New Project Ends ===== -->


    <?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>

    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                }
            });


        } );

    </script>
</div>
<!-- content-wrapper -->

</body>
</html>
