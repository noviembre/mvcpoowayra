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
                <div class="row user-profile">


                    <div class="col-lg-4 side-left d-flex align-items-stretch">
                        <div class="row">
                            <div class="col-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body avatar">
                                        <h4 class="card-title">Tour:</h4>
                                        <img src="<?php echo URLROOT; ?>/assets/images/faces/foto1.jpg" alt="">
                                        <p class="name">
                                            <?php echo $data['titulo']; ?>
                                        </p>
                                        <p class="designation">
                                            <b> <?php echo $data['duracion']; ?></b></p>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 stretch-card">
                                <div class="card">
                                    <div class="card-body overview">
                                        <ul class="achivements">
                                            <li><p>34</p><p>Projects</p></li>
                                            <li><p>23</p><p>Task</p></li>
                                            <li><p>29</p><p>Completed</p></li>
                                        </ul>
                                        <div class="wrapper about-user">
                                            <h4 class="card-title mt-4 mb-3">Info</h4>
                                            <p>editando....</p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-8 side-right stretch-card">
                        <div class="card">
                            <div class="card-body">

                                <div class="wrapper d-block d-sm-flex align-items-center justify-content-between">
                                    <h4 class="card-title mb-0">Details</h4>

                                    <ul class="nav nav-tabs tab-solid tab-solid-primary mb-0" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-expanded="true">Info</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="avatar-tab" data-toggle="tab" href="#avatar" role="tab" aria-controls="avatar">Siguiente</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="security-tab" data-toggle="tab" href="#security" role="tab" aria-controls="security">Siguiente</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="security-tab" data-toggle="tab" href="#finalizar" role="tab" aria-controls="security">Finalizar</a>
                                        </li>
                                    </ul>

                                </div>
                                <form action="<?php echo URLROOT; ?>/pages/edit/<?php echo $data['tid']; ?>" method="post">
                                <div class="wrapper">
                                    <hr>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info">

                                                <div class="form-group">
                                                    <label for="name">Nombre del Tour: </label>
                                                    <input name="etitulo" value="<?php echo $data['titulo']; ?>" type="text" class="form-control" id="name">
                                                </div>
                                                <div class="form-group">
                                                    <label for="designation">Duracion: </label>
                                                    <input name="eduracion" value="<?php echo $data['duracion']; ?>" type="text" class="form-control" id="designation" >
                                                </div>
<!--                                                <div class="form-group">-->
<!--                                                    <label for="mobile">Etiquetas: </label>-->
<!--                                                    <input name="eetiquetas" value="--><?php //echo $data['etiquetas']; ?><!--" type="text" class="form-control">-->
<!--                                                </div>-->
<!--                                                <div class="form-group">-->
<!--                                                    <label for="email">Dolares: </label>-->
<!--                                                    <input name="edolares" value="--><?php //echo $data['dolares']; ?><!--" min="1" type="number" class="form-control">-->
<!--                                                </div>-->
<!--                                                <div class="form-group">-->
<!--                                                    <label for="address">Soles: </label>-->
<!--                                                    <input  name="esoles" value="--><?php //echo $data['soles']; ?><!--" min="1" type="number" class="form-control">-->
<!--                                                </div>-->
                                                <div class="form-group">
                                                    <label for="website">Estado: </label>
                                                    <select name="eestado" id="" class="form-control" required>

                                                        <option value="<?php echo $data['estado']; ?>">
                                                            <?php echo $data['estado']; ?></option>
                                                        <option value="publicado">Publicar</option>
                                                        <option value="editando">Editando</option>

                                                    </select>
                                                </div>
                                                <div class="form-group mt-5">
                                                    <button type="submit" class="btn btn-success mr-2">Actualizar</button>
                                                    <button class="btn btn-outline-danger">Cancelar</button>
                                                </div>

                                        </div><!-- tab content ends -->


                                        <div class="tab-pane fade" id="avatar" role="tabpanel" aria-labelledby="avatar-tab">
                                            <div class="form-group">
                                                <label for="address">Descripcion: </label>
                                                <textarea name="edescripcion" class="ckeditor" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['descripcion']; ?>
                        </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="website">Itinerario Completo: </label>
                                                <textarea id="editor1" name="eifull" class="ckeditor"
                                                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['full_itinerario']; ?>
                        </textarea>
                                            </div>
                                            <div class="form-group mt-5">
                                                <button type="submit" class="btn btn-success mr-2">Actualizar</button>
                                                <button class="btn btn-outline-danger">Cancelar</button>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">

                                                <div class="form-group">
                                                    <label for="change-password">Incluye: </label>
                                                    <textarea name="eincluye" class="ckeditor" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                        <?php echo $data['incluye']; ?>
                                                    </textarea>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">No Incluye: </label>
                                                    <textarea name="enoincluye" class="ckeditor" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                        <?php echo $data['noincluye']; ?>
                                                    </textarea>
                                                </div>
                                                <div class="form-group mt-5">
                                                    <button type="submit" class="btn btn-success mr-2">Update</button>
                                                    <button class="btn btn-outline-danger">Cancel</button>
                                                </div>

                                        </div>
                                        <div class="tab-pane fade " id="finalizar" role="tabpanel" aria-labelledby="finalizar-tab">
                                            <div class="form-group">
                                                <label for="change-password">Que Llevar: </label>
                                                <textarea name="equellevar" class="ckeditor"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                    <?php echo $data['quellevar']; ?>
                                                </textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="">Notas: </label>
                                                <textarea name="enota" class="ckeditor"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3">
                        <?php echo $data['nota']; ?></textarea>
                                            </div>
                                            <div class="form-group mt-5">
                                                <button type="submit" class="btn btn-success mr-2">Update</button>
                                                <button class="btn btn-outline-danger">Cancel</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
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

</body>

</html>