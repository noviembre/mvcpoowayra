<?php

class GestorDetallesTours{

    #MOSTRAR TOUR DE LA CARPETA TEMPORAL TOURS
    #-----------------------------------------------------------
    //
    public function mostrarToursTemporalController(){

        $respuesta = GestorDetallesToursModel::mostrarTourTemporalModel("temporal");

        foreach($respuesta as $row => $item) {

            echo ' <input type="hidden" value="'.$item["id"].'" name="touridTour">
                  			
					<h2>'.$item["titulo"].'</h2>					
					<hr>';

        }

    }
    #GUARDAR DETALLES DEL TOUR
    #guarda los detalles del tour despues de crear un nuevo tour
    #-----------------------------------------------------------
    public function guardarDetallesTourController(){

        if(isset($_POST["solesTour"])){
            $datosController = array("soles"=>$_POST["solesTour"],
                "incluye"=>$_POST["incluyeTour"],
                "noincluye"=>$_POST["noincluyeTour"],
                "descripcion"=>$_POST["descripcionTour"],
                "tour_id"=>$_POST["touridTour"],
                "dolares"=>$_POST["dolaresTour"]);

            $respuesta = GestorDetallesToursModel::guardarDetallesTourController($datosController, "tdetalles");
            $borrarIdTemporal = GestorDetallesToursModel::borrarTourTemporalModel($datosController, "temporal");
            if($respuesta == "ok" && $borrarIdTemporal =="ok"){

                echo'<script>

					swal({
						  title: "¡OK!",
						  text: "¡Los Detalles han sido creados correctamente!",
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


}