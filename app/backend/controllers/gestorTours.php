<?php

class GestorTours{

    #MOSTRAR TOUR DE LA CARPETA TEMPORAL TOURS
    # muestra el titulo del nuevo tour creado previamente para terminar de agregar los detalles del mismo
    #-----------------------------------------------------------
    public function list_new_temp_TourController(){

        $respuesta = GestorToursModel::list_new_temp_TourModel("temporal");

        foreach($respuesta as $row => $item) {

            echo ' <input type="hidden" value="'.$item["tid"].'" name="touridTour">
                  			
					<h2 class="text-primary text-center">'.$item["titulo"].'</h2>					
					<hr>';

        }

    }

    #GUARDAR DETALLES DEL TOUR
    #guarda los detalles del tour despues de crear un nuevo tour
    #-----------------------------------------------------------
    public function save_new_details_TourController(){

        if(isset($_POST["incluyeTour"])){

            $datosController = array("soles"=>$_POST["solesTour"],
                "incluye"=>$_POST["incluyeTour"],
                "noincluye"=>$_POST["noincluyeTour"],
                "descripcion"=>$_POST["descripcionTour"],
                "tid"=>$_POST["touridTour"],
                "dolares"=>$_POST["dolaresTour"]);

            $respuesta = GestorToursModel::save_new_details_TourController($datosController, "tdetalles");

            if($respuesta == "ok"){
                GestorToursModel::delete_new_temp_TourModel("temporal");

                echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡Los Detalles han sido agregados correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "tours";
							  } 
					});


				</script>';

            }

            else{

                echo $respuesta;

            }

        }

    }

   #GUARDAR NUEVO TOUR
    #-----------------------------------------------------------
    public function save_new_TourController(){

        if(isset($_POST["tituloTour"])){

            date_default_timezone_set('America/Lima');
            $fechaPeru = date("Y-m-d H:i:s");

            $aleatorio= mt_rand(100, 999).time();

            $enlace = $_POST["enlaceTour"];
            $idioma = $_POST["idiomaTour"];
            $nuevoEnlace = $enlace."-".$idioma;

            $datosController = array("titulo"=>$_POST["tituloTour"],

                "fecha"=>$fechaPeru,
                "ramdon"=>$aleatorio,
                "etiquetas"=>$_POST["etiquetasTour"],
                "lang"=>$_POST["idiomaTour"],
                "enlace"=>$nuevoEnlace,
                "duracion"=>$_POST["duracionTour"]);

            $respuesta = GestorToursModel::save_new_TourModel($datosController, "tours");
            //Guardar una copia en portada
            GestorToursModel::save_new_TourModel($datosController, "portada");
            GestorToursModel::save_new_TourModel($datosController, "temporal");

            if($respuesta == "ok" || $temporal ="ok"){

                echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡El Tour ha sido creado correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "detallestours";
							  } 
					});


				</script>';

            }

            else{

                echo $respuesta;

            }

        }

    }


    #LISTAR TODOS LOS TOUR
    #-----------------------------------------------------------
    public function list_All_toursController(){

        $respuesta = GestorToursModel::list_All_toursModel("tdetalles");

        foreach ($respuesta as $row => $item){

            echo '<tr>
                    <td>'.$item["tid"].'</td>  
                    <td>'.$item["lang"].'</td>  
                    <td title="'.$item["actualizacion"].'"> '.$item["titulo"].'</td>
                     <td>'.$item["duracion"].'</td>                      
                     <td> '.$item["dolares"].'</td>
                     <td> '.$item["soles"].'</td>
                     
                    <td><a href="index.php?action=tourEditar&idEditar='.$item["tid"].'" class="btn btn-primary btn-sm">
                    <span class="fa fa-refresh"></span></a></td>
                        
                  </tr> ';

        }

    }

    #LISTAR TOUR PUBLICADOS
    #-----------------------------------------------------------
    public function list_Published_toursController(){

        $respuesta = GestorToursModel::list_published_toursModel("tdetalles");


        foreach($respuesta as $row => $item){


            echo '<tr>
                    <td title="'.$item["actualizacion"].'"> '.$item["titulo"].'</td>
                     <td>'.$item["duracion"].'</td>                      
                     <td> '.$item["dolares"].'</td>
                     <td> '.$item["soles"].'</td>
                     
                    <td><a href="index.php?action=tourEditar&idEditar='.$item["tid"].'" class="btn btn-primary btn-sm">
                    <span class="fa fa-refresh"></span></a></td>
                        
                  </tr>';

        }


    }


    #EDITAR TOUR
    #-----------------------------------------------------------
    public function TareaEditarTourController(){



        if(isset($_POST["MtourTitulo"])){
            date_default_timezone_set('America/Lima');
            $fechaPeru = date("Y-m-d H:i:s");

            $datosController = array("titulo"=>$_POST["MtourTitulo"],

                "id"=>$_POST["MtourId"],
                "fecha"=>$fechaPeru);

            $respuesta = GestorToursModel::finalizarTourTareaModel($datosController, "tdetalles");

            if($respuesta == "ok"){

                echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡La Tarea ha sido actualizada correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {
							    window.location = "tourspublished";
							  }
					});


				</script>';

            }

            else{

                echo $respuesta;

            }

        }

    }


    #LISTAR TOUR QUE SE ESTAN EDITANDO
    #-----------------------------------------------------------
    public function list_Editing_toursController(){

        $respuesta = GestorToursModel::list_editing_toursModel("tdetalles");

        foreach ($respuesta as $row => $item){

            echo '<tr>
                    <td title="'.$item["actualizacion"].'"> '.$item["titulo"].'</td>
                     <td>'.$item["duracion"].'</td>                      
                     <td> '.$item["dolares"].'</td>
                     <td> '.$item["soles"].'</td>
                     
                    <td><a href="index.php?action=tourEditar&idEditar='.$item["tid"].'" class="btn btn-primary btn-sm">
                    <span class="fa fa-refresh"></span></a></td>
                        
                  </tr>';

        }

    }


    #ACTUALIZAR USUARIO
    #------------------------------------
    public function update_edit_tourController(){



        if(isset($_POST["eTitulo"])) {
            #seleccionar el numero mayor
            $respOrden = GestorToursModel::count_numbers_OrderModel("tours");
            $contar = $respOrden["orden"];
            #sumarlo + 1
            if($contar == 0){
                $contar = 1;
            }else {
                $contar = $contar +1;
            }

            date_default_timezone_set('America/Lima');
            $fechaPeru = date("Y-m-d H:i:s");

            $datosController = array("titulo" => $_POST["eTitulo"],
                "tid" => $_POST["idEditar"],
                "duracion" => $_POST["eDuracion"],
                "itsimple" => $_POST["eIsimple"],
                "itfull" => $_POST["eIfull"],
                "descripcion" => $_POST["eDesc"],
                "dolares" => $_POST["xdolares"],
                "soles" => $_POST["eSoles"],
                "tags" => $_POST["eTags"],
                "nota" => $_POST["eNota"],
                "incluye" => $_POST["eIncluye"],
                "noincluye" => $_POST["eNoIncluye"],
                "kllevar" => $_POST["eKllevar"],
                "orden" => $contar,
                "fecha" => $fechaPeru,
                "estado" => $_POST["eEstado"]);

            $respuesta = GestorToursModel::update_edit_tourModel($datosController, "tdetalles");

            if ($respuesta == "ok") {

                echo '<script>

					swal({
						  title: "¡OK!",
						  text: "¡La Tarea ha sido actualizada correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {
							    window.location = "tourspublished";
							  }
					});


				</script>';

            } else {

                echo $respuesta;

            }
        }


    }

    #MOSTRAR PROYECTOS A EDITAR
    #-----------------------------------------------------------
    public function mostrarProyectosEditarController(){

        $respuesta = GestorToursModel::mostrarProyectosModel("tdetalles");

        foreach($respuesta as $row => $item) {

            echo ' <li id="'.$item["id"].'" >
					<span >
					
					<a href="index.php?action=articulos&idBorrar='.$item["id"].'&rutaImagen='.$item["ruta"].'">
						<i class="fa fa-times btn btn-danger"></i>
					</a>
					
					<i class="fa fa-pencil btn btn-primary editarTourx"></i>
					
					</span>
					<img src="'.$item["ruta"].'" class="img-thumbnail">
					<h1>'.$item["titulo"].'</h1>					
					<h4>'.$item["estado"].'</h4>									
					<input name="ngtSoles" type="hidden" value="'.$item["soles"].'">
					<input name="ngtDolares" type="hidden" value="'.$item["dolares"].'">
					<input name="ngtDescripcion" type="hidden" value="'.$item["descripcion"].'">
					<input name="ngtIncluye" type="hidden" value="'.$item["incluye"].'">
					<input name="ngtNoIncluye" type="hidden" value="'.$item["noincluye"].'">
					<input name="ngtItinerario" type="hidden" value="'.$item["itinerario"].'">
					<input name="ngtQueLlevar" type="hidden" value="'.$item["quellevar"].'">
					
					<hr>

				</li>

				';

        }

    }
    #ACTUALIZAR PROYECTOS A EDITAR
    #-----------------------------------------------------------
    public function editarProyectosEditarController(){

        $ruta = "";

        if(isset($_POST["editarTitulo"])){

            if(isset($_FILES["editarImagen"]["tmp_name"])){

                $imagen = $_FILES["editarImagen"]["tmp_name"];

                $aleatorio = mt_rand(1000, 9999);

                $ruta = "views/images/tours/tour".$aleatorio.".jpg";

                $origen = imagecreatefromjpeg($imagen);

                $destino = imagecrop($origen, ["x"=>0, "y"=>0, "width"=>570, "height"=>320]);

                imagejpeg($destino, $ruta);

                $borrar = glob("views/images/tours/temp/*");

                foreach($borrar as $file){

                    unlink($file);

                }

            }

            if($ruta == ""){

                $ruta = $_POST["fotoAntigua"];

            }

            else{

                unlink($_POST["fotoAntigua"]);

            }

            $datosController = array("id"=>$_POST["id"],
                "estado"=>$_POST["editarEstado"],
                "titulo"=>$_POST["editarTitulo"],
                "soles"=>$_POST["editarSoles"],
                "dolares"=>$_POST["editarDolares"],
                "descripcion"=>$_POST["editarDescripcion"],
                "incluye"=>$_POST["editarIncluye"],
                "noincluye"=>$_POST["editarNoIncluye"],
                "quellevar"=>$_POST["editarQueLlevar"],
                "ruta"=>$ruta,
                "itinerario"=>$_POST["editarItinerario"]);

            $respuesta = GestorToursModel::pruebaModel($datosController, "tours");

            if($respuesta == "ok"){

                echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡El proyecto ha sido actualizado correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",						  
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {	   
							    window.location = "tourEditar";
							  } 
					});


				</script>';

            }

            else{

                echo $respuesta;

            }

        }

    }

    #CONTAR LA CANTIDAD DE TOURS QUE TENEMOS
    #-------------------------------------------------
    public function count_All_toursControllers(){

        $respuesta = GestorToursModel::count_All_toursModel("tours");

        echo $respuesta;


    }

    #CONTAR LA CANTIDAD DE TOURS PUBLICADAS
    #-------------------------------------------------
    public function count_Published_toursControllers(){

        $respuesta = GestorToursModel::count_Published_toursModel("tours");

        echo $respuesta;


    }

    #CONTAR LA CANTIDAD DE TOURS QUE SE ESTAN EDITANDO
    #-------------------------------------------------
    public function count_editing_toursControllers(){

        $respuesta = GestorToursModel::count_Editing_toursModel("tours");

        echo $respuesta;


    }

    #EDITAR TOUR MY WAY
    public function list_edit_tourController(){

        if(isset($_GET["idEditar"])){
            $datosController = $_GET["idEditar"];
            $respuesta = GestorToursModel::list_edit_tourModel($datosController, "tdetalles");

            echo'<!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Details Tour -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="views/images/photo.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">'.$respuesta["titulo"].'</h3>

              <p class="text-muted text-center">'.$respuesta["duracion"].'</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Publicado</b> <a class="pull-right"><i class="fa fa-check"></i></a>
                </li>
                <li class="list-group-item">
                  <b>Itinerario</b> <a class="pull-right"><i class="fa fa-check"></i></a>
                </li>
                <li class="list-group-item">
                  <b>Que Llevar</b> <a class="pull-right"><i class="fa fa-check"></i></a>
                </li>
                <li class="list-group-item">
                  <b>Incluye</b> <a class="pull-right"><i class="fa fa-times"></i></a>
                </li>
                <li class="list-group-item">
                  <b>No Incluye</b> <a class="pull-right"><i class="fa fa-times"></i></a>
                </li>
                <li class="list-group-item">
                  <b>Itinerario Completo</b> <a class="pull-right"><i class="fa fa-check"></i></a>
                </li>
                <li class="list-group-item">
                  <b>Precios</b> <a class="pull-right"><i class="fa fa-times"></i></a>
                </li>
              </ul>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Observaciones</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            
              <strong><i class="fa fa-file-text-o margin-r-5"></i> Nota acerca del tour</strong>

              <p>Modificar, corregir algun error o algun dato extra</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Itinerario</a></li>
              <li><a href="#timeline" data-toggle="tab">Datos</a></li>
              <li><a href="#settings" data-toggle="tab">Extra</a></li>
            </ul>
            
            <div class="tab-content">
              <div class="active tab-pane" id="activity"> 
              
                <!-- Tour -->
                <div class="post">                
                  <div class="user-block">
                  
                    <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Tour:</label>

                    <div class="col-sm-10">
                      <input name="idEditar" value="'.$respuesta["tid"].'" type="hidden">
                      <input name="eTitulo" value="'.$respuesta["titulo"].'" type="inputName" class="form-control" id="inputName" required>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Duracion:</label>

                    <div class="col-sm-10">
                      <input name="eDuracion" value="'.$respuesta["duracion"].'" type="text" class="form-control" id="inputName" required>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Itinerario Simple</label>
                    <div class="col-sm-10">                     
                      <textarea name="eIsimple" class="form-control"  rows="9" >
                      '.$respuesta["itinerario"].'</textarea></div>
                    
                  </div>
                  
                  
                  
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Itinerario Detallado</label>

                    <div class="col-sm-10">
                      <textarea name="eIfull" class="form-control" id="inputExperience" rows="8" >'.$respuesta["full_itinerario"].'</textarea>
                    </div>
                  </div>                                 
                  </div><!-- /.user-block -->                  
                  
                </div><!-- /.post -->
                
              </div><!-- /.tab-pane -->
              
               <form method="post" class="form-horizontal">
              <div class="tab-pane" id="timeline">
               
                <div class="post">               
                <div class="user-block">
                
                 <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Descripcion</label>

                    <div class="col-sm-10">
                   
                    <textarea name="eDesc" class="form-control" id="inputExperience"rows="6">
                    '.$respuesta["descripcion"].'</textarea>
                    </div>
                  </div>
                                    
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Dolares/Soles</label>

                    <div class="col-sm-5">
                      <input name="xdolares" value="'.$respuesta["dolares"].'" min="1" type="number" class="form-control" id="inputName">
                    </div>
                    <div class="col-sm-5">
                      <input name="eSoles" value="'.$respuesta["soles"].'" min="1" type="number" class="form-control" id="inputName">
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Etiquetas</label>
                    <div class="col-sm-10">
                      <textarea name="eTags" class="form-control"  placeholder="Etiquetas" rows="4">
                      '.$respuesta["etiquetas"].'</textarea>
                    </div>
                  </div> 
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Notas:</label>
                    <div class="col-sm-10">
                      <textarea name="eNota" class="form-control"  placeholder="Notas Acerca del tour" rows="4">
                      '.$respuesta["nota"].'</textarea>
                    </div>
                  </div> 
                  
               
                </div>
                               
               </div>
                               
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="settings">              
                
                <div class="post">
                    <div class="user-block">
                    
                    <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Incluye</label>    
                        <div class="col-sm-10">
                          <textarea name="eIncluye" class="form-control" id="inputExperience" rows="7" >
                          '.$respuesta["incluye"].'</textarea>
                        </div>
                    </div>
                       
                     <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">No Incluye</label>
    
                        <div class="col-sm-10">
                          <textarea name="eNoIncluye" class="form-control" id="inputExperience" rows="7" >
                          '.$respuesta["noincluye"].'</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Que Llevar</label>
    
                        <div class="col-sm-10">
                          <textarea name="eKllevar" class="form-control" id="inputExperience" rows="7" >
                          '.$respuesta["quellevar"].'</textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputExperience" class="col-sm-2 control-label">Estado</label>
    
                        <div class="col-sm-10">
                         <select name="eEstado" id="" class="form-control" required>
                            <option value="">Seleccionar</option>
                            <option value="publicado">Publicar</option>
                            <option value="editando">Editando</option>
                        </select>
                        </div>
                    </div>
                    
                    <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <input type="submit" value="Actualizar" class="btn btn-primary">
                      </div>
                  </div>
                
                </div><!-- /.user-block -->
                                
                </div><!-- /.post --> 
                </div><!-- /.tab-pane -->
                </form>
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section><!-- /.content -->
			 ';
        }


    }



    #LISTAR TOURS
    #-----------------------------------------------------------
    public function listar_TourController(){

        $respuesta = gestorToursModel::listar_TourModel("tours");

        foreach($respuesta as $row => $item){

            echo '<option value="'.$item["tid"].'">
        '.$item["titulo"].' - '.$item["duracion"].'';

        }

    }








}