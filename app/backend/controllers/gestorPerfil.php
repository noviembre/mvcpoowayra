<?php

class GestorPerfiles{

    #--------------------------------------------
    # GUARDAR PERFIL
    public function guardarPerfilController(){

        $ruta = "";

        if (isset($_POST["nuevoUsuario"])) {

            if (isset($_FILES["newImagen"]["tmp_name"])) {

                $imagen = $_FILES["newImagen"]["tmp_name"];

                $aleatorio = mt_rand(100, 999);

                $ruta = "views/images/perfiles/perfil".$aleatorio.".jpg";

                $origen = imagecreatefromjpeg($imagen);

                $destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>100, "height"=>100]);

                imagejpeg($destino, $ruta);
            }
            if ($ruta == "") {
                $ruta = "views/images/photo.jpg";
            }

            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"]) &&
                preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $_POST["nuevoEmail"])) {

                $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $datosController = array("usuario" => $_POST["nuevoUsuario"],
                    "nombre" => $_POST["nuevoNombre"],
                    "password" => $encriptar,
                    "email" => $_POST["nuevoEmail"],
                    "rol" => $_POST["nuevoRole"],
                    "photo" => $ruta);

                $respuesta = GestorPerfilesModel::guardarPerfilModel($datosController, "usuarios");

                if ($respuesta == "ok") {

                    echo '<script>

					swal({
						  title: "¡OK!",
						  text: "¡El usuario ha sido creado correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "perfil";
							  } 
					});


				</script>';

                }

            } else {

                echo "<div class='alert alert-warning'><b>Error!!</b> No ingrese caracteres especiales</div>";

            }
        }

    }

    #VER PERFIL
    #---------------------------------------
    public function verPerfilController(){

        $respuesta = GestorPerfilesModel::verPerfilesModel("usuarios");

        foreach ($respuesta as $row => $item){
            $rol = "";
            if($item["rol"] == 0){
                $rol = "Administrador";
            } else {
                $rol = "Editor";
            }
            echo '<tr>
                  <td>'.$item["nombre"].'</td>
                  <td>'.$item["usuario"].'</td>
                  <td>'.$rol.'</td>
                  <td>'.$item["email"].'</td>
              
                   <td><a href="#profile'.$item["id"].'" data-toggle="modal">
                   <span class="btn btn-info fa fa-pencil btn-sm"></span></a>
                   
                    <a href="index.php?action=perfil&idBorrar='.$item["id"].'&borrarImg='.$item["photo"].'"><span class="btn btn-danger fa fa-times btn-sm "></span></a>
                    </td>
            </tr>
            
            
            <div id="profile'.$item["id"].'" class="modal fade">

					<div class="modal-dialog modal-content">

						<div class="modal-header" style="border:1px solid #eee">				        
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						 <h3 class="modal-title">'.$item["nombre"].'</h3>			        
						</div>

						<div class="modal-body" style="border:1px solid #eee">
						
						
						<form  style="padding: 20px" method="post" enctype="multipart/form-data">

        <input name="idProfile" value="'.$item["id"].'" type="hidden">

        <div class="form-group">
            <input name="editUsuario" type="text" value="'.$item["usuario"].'" maxlength="10" class="form-control" required>
        </div>

        <div class="form-group">
            <input name="editPassword" type="password" value="" maxlength="10" class="form-control" placeholder="****"  required>
        </div>

        <div class="form-group">
            <input name="editEmail" value="'.$item["email"].'" type="email" class="form-control" required>
        </div>

        <div class="form-group">
            <select name="editRole" class="form-control" required>
                <option value="">Seleccione un Rol</option>
                <option value="0">Administrador</option>
                <option value="1">Editor</option>
            </select>
        </div>

        <div class="form-group text-center">
            <img src="'.$item["photo"].'" width="20%" class="img-circle" alt="">
            <input name="editPhoto" type="hidden" value="'.$item["photo"].'">
            <input type="file" name="editImage" style="display: inline-block; margin: 10px 0" class="btn btn-default" required>
            <p style="font-size: 12px" class="text-center">Tamano recomendado de la imagen 100px * 100px, peso maximo 2MB</p>
        </div>
        <input type="submit" value="Actualizar" class="btn btn-primary">

    </form>
			        
							
			        
						</div>

						

					</div>

				</div>
            
            ';
        }


    }

    #EDITAR PERFIL
    #---------------------------------------
    public function editarPerfilController(){
        $ruta = "";

        if(isset($_POST["editUsuario"])){

            if (isset($_FILES["editImage"]["tmp_name"])) {

                $imagen = $_FILES["editImage"]["tmp_name"];
                $aleatorio = mt_rand(1, 9999);
                $ruta = "views/images/perfiles/perfil".$aleatorio.".jpg";

                $origen = imagecreatefromjpeg($imagen);
                $destino = imagecrop($origen, ["x" => 0, "y" => 0, "width" => 100, "height" => 100]);
                imagejpeg($destino, $ruta);
            }
            if($ruta == ""){
                $ruta = $_POST["editPhoto"];

            }
            if($ruta != "" && $_POST["editPhoto"] != "views/images/photo.jpg"){
                unlink($_POST["editPhoto"]);

            }

            // EL PREG_MATCH NOS FALTA VERIFICAR
            if (preg_match('/^[a-zA-Z0-9]+$/', $_POST["editUsuario"]) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST["editPassword"]) &&
                preg_match('/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/', $_POST["editEmail"])) {

                $encriptar = crypt($_POST["editPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
                $datosController = array("id" => $_POST["idProfile"],

                    "usuario" => $_POST["editUsuario"],
                    "password" => $encriptar,
                    "email" => $_POST["editEmail"],
                    "rol" => $_POST["editRole"],
                    "photo" => $ruta);

                $respuesta = GestorPerfilesModel::editarPerfilesModel($datosController, "usuarios");
                if($respuesta == "ok"){

                    if(isset($_POST["updateSession"])){

                        $_SESSION["id"] = $_POST["idProfile"];
                        $_SESSION["usuario"] = $_POST["editUsuario"];
                        $_SESSION["password"] = $encriptar;
                        $_SESSION["email"] = $_POST["editEmail"];
                        $_SESSION["photo"] = $ruta;
                        $_SESSION["rol"] = $_POST["editRole"];
                    }




                    echo '<script>

					swal({
						  title: "¡OK!",
						  text: "¡El usuario ha sido actualizado correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "perfil";
							  } 
					});


				</script>';
                }

            }
            else{
                echo "<div class='alert alert-warning'><b>Error!!</b> No ingrese caracteres especiales</div>";

            }

        }
    }

    #Eliminar un perfil
    public function  borrarPerfilController(){
        if(isset($_GET["idBorrar"])){

            $datosController = $_GET["idBorrar"];
            unlink($_GET["borrarImg"]);

            $respuesta = GestorPerfilesModel::borrarPerfilModel($datosController, "usuarios");

            if($respuesta == "ok"){

                echo '<script>

					swal({
						  title: "¡OK!",
						  text: "¡El usuario ha sido eliminado correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "perfil";
							  } 
					});
					
					</script>';

            }

        }

    }



}
?>