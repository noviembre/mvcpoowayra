
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

        <!-- Encabezado starts -->
        <div class="row page-titles">

            <div class="col-md-5 align-self-center">
                <h4 class="theme-cl">Editando...</h4>
            </div>

            <div class="col-md-7 text-right">

                <div class="btn-group">
                    <a href="<?php echo URLROOT; ?>/pages/spanish" class="btn btn-warning">
                        Espanol
                    </a>
                </div>


            </div>

        </div>
        <!-- Encabezado ends -->
        <!-- Encabezado ends -->



        <div class="row">
            <div class="col-md-12">

                <form action="<?php echo URLROOT; ?>/pages/edit/<?php echo $data['tid']; ?>" method="post">
                <div class="nav-tabs-custom bg-white">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#activity" data-toggle="tab"><b>Info</b></a></li>
                        <li><a href="#timeline" data-toggle="tab"><b>Incluye</b></a></li>
                        <li><a href="#settings" data-toggle="tab"><b>Notas</b></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="active tab-pane" id="activity">
                            <!-- Post -->
                            <div class="post">
                                <div class="form-group">
                                    <label for="name" class="text-primary">Nombre del Tour: </label>
                                    <input name="etitulo" value="<?php echo $data['titulo']; ?>" type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group">

                                    <label class="text-primary">Duracion: </label>
                                    <input name="eduracion" value="<?php echo $data['duracion']; ?>" type="text" class="form-control" id="designation" >
                                </div>

                                <div class="form-group">
                                    <label class="text-primary">Estado: </label>
                                    <select name="eestado" id="" class="form-control" required>

                                        <option value="<?php echo $data['estado']; ?>">
                                            <?php echo $data['estado']; ?></option>
                                        <option value="publicado">Publicar</option>
                                        <option value="editando">Editando</option>

                                    </select>
                                </div>

                            </div>
                            <!-- /.post -->



                            <div class="post clearfix">
                                <div class="form-group">
                                    <label class="text-primary">Descripcion: </label>
                                    <textarea name="edescripcion" class="ckeditor" style="width: 100%; height: 100px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['descripcion']; ?>
                        </textarea>
                                </div>

                                <div class="form-group">
                                    <label for="" class="text-primary"> Itinerario Completo: </label>
                                    <textarea id="editor1" name="eifull" class="ckeditor"
                                              style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                            <?php echo $data['full_itinerario']; ?>
                        </textarea>
                                </div>

                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                                    <button class="btn btn-outline-danger">Cancelar</button>
                                </div>


                            </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="timeline">
                            <!-- The timeline -->
                            <div class="post">
                                <div class="form-group">
                                    <label class="text-primary">Incluye: </label>
                                    <textarea name="eincluye" class="ckeditor" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                        <?php echo $data['incluye']; ?>
                                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label class="text-primary">No Incluye: </label>
                                    <textarea name="enoincluye" class="ckeditor" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                        <?php echo $data['noincluye']; ?>
                                                    </textarea>
                                </div>
                                <div class="form-group mt-5">
                                    <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                                    <button class="btn btn-outline-danger">Cancelar</button>
                                </div>

                            </div>

                        </div>
                        <!-- /.tab-pane -->

                        <div class="tab-pane" id="settings">
                           <div class="post">
                               <div class="form-group">
                                   <label class="text-primary">Que Llevar: </label>
                                   <textarea name="equellevar" class="ckeditor"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                                    <?php echo $data['quellevar']; ?>
                                                </textarea>
                               </div>
                               <div class="form-group">
                                   <label class="text-primary">Notas: </label>
                                   <textarea name="enota" class="ckeditor"style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" rows="3">
                        <?php echo $data['nota']; ?></textarea>
                               </div>
                               <div class="form-group mt-5">
                                   <button type="submit" class="btn btn-primary mr-2">Actualizar</button>
                                   <button class="btn btn-outline-danger">Cancelar</button>
                               </div>

                           </div>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                </form>

            </div>
            <!-- /.col-md-8 -->
        </div>








            <!-- =========== Wrapers Ends  =========== -->
            <!-- ==== No esta permitido la edicion hacia abajo a partir de aqui  ====== -->

            <!-- =========== Mini footer Starts =========== -->
            <?php require APPROOT . '/views/inc/p_admin_mini_pie.php'; ?>
            <!-- =========== Mini footer Ends  =========== -->


            <!-- partial -->

        <!-- Listar Projects Ends -->


        <!-- =======  primera fila starts   ====== -->

    </div>

    <!-- /. container-fluid ends -->







    <?php require APPROOT . '/views/inc/p_admin_pie.php'; ?>

    <!-- Custom js for this page-->
    <script src="<?php echo URLROOT; ?>/ckeditor/ckeditor.js"></script>
</div>
<!-- content-wrapper -->

</body>
</html>