
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
                        <div class="box-header with-border">


                        </div>
                    </div>

                    <!-- panel-body -->
                    <div class="box-body" >

                        <!--     EDITAR SECTOR IZQUIERDO   -->
                        <div id="editProfile" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <h1>Hola <?php echo $_SESSION['nombre']; ?>
                                <span class="btn btn-info fa fa-pencil pull-left" id="btnEditProfile" style="font-size:10px; margin-right:10px"></span></h1>

                            <div style="position:relative">
                                <img src="<?php echo $_SESSION['photo']; ?>" class="img-circle pull-right">

                            </div>

                            <hr>

                            <h4>Perfil: <?php
                                if($_SESSION["rol"] == 0){
                                    echo "Administrador";
                                } else {
                                    echo "Editor";
                                }

                                ?></h4>

                            <h4>Email: <?php echo $_SESSION['email']; ?> </h4>

                            <h4>Contraseña: ******* </h4>

                        </div>

                        <!----------- EDIT PROFILE STARTS ------------>

                        <div id="formEditProfile" style="display: none" class="col-lg-4 col-md-4 col-sm-6 col-xs-12">

                            <form  style="padding: 20px" method="post" enctype="multipart/form-data">

                                <input name="idProfile" value="<?php echo $_SESSION['id']; ?>" type="hidden">
                                <input name="updateSession" type="hidden" value="ok">

                                <div class="form-group">
                                    <input name="editUsuario" type="text" value="<?php echo $_SESSION['usuario']; ?>" maxlength="10" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <input name="editPassword" type="password" value="" maxlength="10" placeholder="****" class="form-control"  required>
                                </div>

                                <div class="form-group">
                                    <input name="editEmail" value="<?php echo $_SESSION['email']; ?>" type="email" class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <select name="editRole" class="form-control" required>
                                        <option value="">Seleccione un Rol</option>
                                        <option value="0">Administrador</option>
                                        <option value="1">Editor</option>
                                    </select>
                                </div>

                                <div class="form-group text-center">
                                    <img src="<?php echo $_SESSION['photo']; ?>" width="20%" class="img-circle" alt="">
                                    <!--   editarPhoto = en caso de que el user no cambie de foto, permanesca con su foto anterior   -->
                                    <input name="editPhoto" type="hidden" value="<?php echo $_SESSION['photo']; ?>">
                                    <input type="file" id="changePhotoProfile" style="display: inline-block; margin: 10px 0" class="btn btn-default ">
                                    <p style="font-size: 12px" class="text-center">Tamano recomendado de la imagen 100px * 100px, peso maximo 2MB</p>
                                </div>
                                <input type="submit" value="Actualizar Perfil" class="btn btn-primary">

                            </form>


                        </div>

                        <!----------  EDIT PROFILE ENDS  --------------->



                        <!----------  CREAR PERFIL INICIO --------------->
                        <?php
                        if($_SESSION["rol"]== 0) {

                            echo '
                    <div id="crearPerfil" class="col-md-8">
                    
                    
                    
                        <button id="registrarPerfil" style="margin-bottom: 20px" class="btn btn-success">Registrar un nuevo miembro</button>
                        <form id="formularioPerfil" style="display: none" method="post" enctype="multipart/form-data">
                    
                            <div class="form-group">
                                <input name="nuevoUsuario" type="text"  maxlength="10" class="form-control" placeholder=" Nombre de usuario max 10 caracteres" required>
                            </div>
                            <div class="form-group">
                                <input name="nuevoNombre" type="text"  maxlength="10" class="form-control" placeholder=" Nombre de la Persona 10 caracteres" required>
                            </div>
                            <div class="form-group">
                                <input name="nuevoPassword" type="password"  maxlength="10" class="form-control" placeholder=" password max 10 caracteres" required>
                            </div>
                            <div class="form-group">
                                <input name="nuevoEmail" type="email"  class="form-control" placeholder=" Correo Electronico" required>
                            </div>
                            <div class="form-group">
                                <select name="nuevoRole" class="form-control" required>
                                    <option value="">Seleccione un Rol</option>
                                    <option value="0">Administrador</option>
                                    <option value="1">Editor</option>
                                </select>
                            </div>
                    
                            <div class="form-group text-center">
                                <input type="file" id="fotoDePerfil" style="display: inline-block; margin: 10px 0" class="form-control">
                                <p style="font-size: 12px" class="text-center">Tamano recomendado de la imagen 100px * 100px, peso maximo 2MB</p>
                            </div>
                            <input id="guardarPerfil" type="submit" value="Guardar Perfil" class="btn btn-primary">
                    
                        </form>';

                            $crearPerfil = new GestorPerfiles();
                            $crearPerfil->guardarPerfilController();
                            $crearPerfil->editarPerfilController();
                            $crearPerfil->borrarPerfilController();

                        }
                        ?>
                        <hr>


                        <div class="box-body" >
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Usuario</th>
                                    <th>Perfil</th>
                                    <th>Email</th>
                                    <th>Acciones</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $verPerfiles = new GestorPerfiles();
                                $verPerfiles -> verPerfilController();


                                ?>


                                </tbody>
                            </table>

                        </div>
                    </div>

                    <!--====  CREAR PERFIL FIN ====-->



                    </div> <!--panel-body -->

                </div> <!-- /.box -->
            </div> <!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

</div><!-- /.content-wrapper -->

