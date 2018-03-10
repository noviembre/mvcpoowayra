<?php

require_once "../../controllers/gestorTours.php";
require_once "../../models/gestorTours.php";


#CLASE Y MÉTODOS
#-------------------------------------------------------------
class Ajax{

    #SUBIR LA IMAGEN DEL TOUR
    #----------------------------------------------------------

    public $imagenTemporal;

    public function gestorToursAjax(){

        $datos = $this->imagenTemporal;

        $respuesta = GestorTours::mostrarImagenController($datos);

        echo $respuesta;

    }



}

#OBJETOS
#-----------------------------------------------------------

if(isset($_FILES["imagen"]["tmp_name"])){

    $a = new Ajax();
    $a -> imagenTemporal = $_FILES["imagen"]["tmp_name"];
    $a -> gestorToursAjax();

}
