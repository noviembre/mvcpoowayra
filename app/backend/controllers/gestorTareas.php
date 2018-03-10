<?php
/* ---------->>>>
  todo -
    @runa - babo
    @fecha - 11/24/2017
    @hora - 9:54 AM
  */
class GestorTareas{
#GUARDAR TAREA NUEVA
    #-----------------------------------------------------------
    public function guardarTareaController()
    {

        if (isset($_POST["tareaTabla"])) {

            date_default_timezone_set('America/Lima');
            $fechaHoy = date("Y-m-d H:i:s");

            $datosController = array("tarea" => $_POST["tareaTabla"],
                "modo" => $_POST["tareaModo"],
                "accion" => $_POST["tareaAccion"],
                "detalles" => $_POST["tareaDetalles"],
                "titulo" => $_POST["tareaTitulo"],
                "fecha" => $fechaHoy,
                "cmtinicial" => $_POST["cmtInicial"]);
            #--- INSERTAR EN TABLA TAREAS
            GestorTareasModel::guardarTareaModel($datosController, "tareas");

            #--- Actualizar fecha de la ultima tarea insertada Y SUMARLE + 1
            $datosTarea = array("tareaid" => $_POST["tareaTabla"], "fecha" => $fechaHoy);
            $respuesta = GestorTareasModel::actualizarHoraTareaModel($datosTarea, "dbtablas");

            if ($respuesta == "ok") {

                echo '<script>

					swal({
						  title: "¡OK!",
						  text: "¡La Tarea ha sido creada correctamente!",
						  type: "success",
						  confirmButtonText: "Cerrar",
						  closeOnConfirm: false
					},

					function(isConfirm){
							 if (isConfirm) {
							    window.location = "tareas";
							  }
					});


				</script>';

            } else {

                echo $respuesta;

            }

        }
    }



    #MOSTRAR TAREAS
    #-----------------------------------------------------------
    public function mostrarTareasController(){

        $respuesta = GestorTareasModel::mostrarTareasModel("tareas");

        foreach($respuesta as $row => $item){
                    $now = new DateTime();
                    $future_time = new DateTime($item["tiempo_starts"]);
                    $interval = $future_time->diff($now);
            echo '<tr>
                                               
                        <td>'.$item["detalles"].'</td>                        
                        
                        <td title="'. date("D d, M Y", strtotime($item["tiempo_starts"])).'">'. $interval->format("%a Dias - %h hrs %i min %s sec").'</td>
                        <td><a href="#tareas'.$item["id"].'" data-toggle="modal" class="btn btn-primary"><span class="fa fa-refresh"></span></a></td>
                        
                  </tr>
                 
                  <div id="tareas'.$item["id"].'" class="modal fade">

					<div class="modal-dialog modal-content">

						<div class="modal-header" style="border:1px solid #eee">
				        
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						 <h3 class="modal-title text-center text-success"> Tipo: '.$item["accion"].'</h3>
			        
						</div>
						
                    <form  style="padding: 20px" method="post" enctype="multipart/form-data">
						<div class="modal-body" style="border:1px solid #eee">	   
						      <label for="">Titulo :</label>
							<p class="parrafoContenido">'.$item["titulo"].'</p> 
							 
							 <label for="">Descricion:</label>
							<p class="parrafoContenido">'.$item["detalles"].'</p>
							
							<label for="">Comentario Inicial:</label>							
							<p class="parrafoContenido">'.$item["cmtinicial"].'</p>
							
							<label for="">Comentario final:</label>
							<textarea name="editarCmtfinal" id="" cols="30" rows="5" class="form-control"></textarea>
							
</p>
							<p> <input name="editarId" type="hidden" value="'.$item["id"].'" ></p>
							<p><b>Inicio: </b>'. date("D d, M Y", strtotime($item["tiempo_starts"])).'</p> 
							<p><b>Transcurrido: </b>'. $interval->format("%a Dias - %h hrs %i min").'</p>
							
			            </div>

						<div class="modal-footer" style="border:1px solid #eee">	
							        
							<button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
							<input type="submit"  class="btn btn-primary" value="Finalizar">
			        
						</div>
                  </form>

					    </div>

				</div>
                  
                  ';

        }

    }

    #FINALIZAR TAREA NUEVA
    #-----------------------------------------------------------
    public function finalizarTareaController(){

        if(isset($_POST["editarCmtfinal"])){

            $datosController = array("cmtfinal"=>$_POST["editarCmtfinal"],
                "id"=>$_POST["editarId"]);

            $respuesta = GestorTareasModel::finalizarTareaModel($datosController, "tareas");

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
							    window.location = "tareas";
							  }
					});


				</script>';

            }

            else{

                echo $respuesta;

            }

        }

    }

    #LISTA TAREAS MES
    #-----------------------------------------------------------
    public function listarTareaSemanaController(){

        $respuesta = GestorTareasModel::listarTareaSemanaModel("tareas");

        foreach($respuesta as $row => $item){

            echo '<tr>
                        <td>'.$item["id"].'</td>
                        <td>'.$item["accion"].'</td>
                        <td>'.$item["detalles"] .'</td>                        
                        <td>'. date("D d, M Y", strtotime($item["tiempo_starts"])).'</td>
                        
                        <td></td>
                  </tr>
                 
                  
                  
                  ';

        }

    }

    #LISTA TAREAS MES
    #-----------------------------------------------------------
    public function listarTareasMesController(){

        $respuesta = GestorTareasModel::listarTareaMesModel("tareas");

        foreach($respuesta as $row => $item){

            echo '<tr>
                        <td>'.$item["id"].'</td>
                        <td>'.$item["accion"].'</td>
                        <td>'.$item["detalles"] .'</td>                        
                        <td>'. date("D d, M Y", strtotime($item["tiempo_starts"])).'</td>
                        
                        <td></td>
                  </tr>';

        }

    }

    #LISTA TAREAS MES
    #-----------------------------------------------------------
    public function listarTareasMesAnteriorController(){

        $respuesta = GestorTareasModel::listarTareaMesAnteriorModel("tareas");

        foreach($respuesta as $row => $item){

            echo '<tr>
                        <td>'.$item["id"].'</td>
                        <td>'.$item["accion"].'</td>
                        <td>'.$item["detalles"] .'</td>                        
                        <td>'. date("D d, M Y", strtotime($item["tiempo_starts"])).'</td>
                        
                        <td></td>
                  </tr>';

        }

    }

    # TAREAS | MOSTRAR LISTA DE DBTABLAS
    #-----------------------------------------------------------
    public function mostrarTablasController(){

        $respuesta = GestorTareasModel::mostrarTablaModel("dbtablas");

        foreach($respuesta as $row => $item) {
            echo '<option  value="'.$item["id"].'">'.$item["contador"].' - '.$item["titulo"].'</option>
                  ';

        }

    }
}
?>