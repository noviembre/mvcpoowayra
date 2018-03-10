<?php

require_once "conexion.php";

class GestorToursModel{
    #GUARDAR
    #------------------------------------------------------------
    public function save_new_details_TourController($datos, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla ( tid,descripcion, soles, dolares,incluye,noincluye) VALUES (:tid,:descripcion,:soles,:dolares,:incluye,:noincluye)");

        $stmt -> bindParam(":tid", $datos["tid"], PDO::PARAM_INT);

        $stmt -> bindParam(":soles", $datos["soles"], PDO::PARAM_STR);
        $stmt -> bindParam(":dolares", $datos["dolares"], PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $datos["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":incluye", $datos["incluye"], PDO::PARAM_STR);
        $stmt -> bindParam(":noincluye", $datos["noincluye"], PDO::PARAM_STR);


        if($stmt->execute()){

            return "ok";
        }

        else{

            return "error";
        }

        $stmt->close();

    }
    #MOSTRAR TOUR TEMPORAL INER JOIN TOURS
    #------------------------------------------------------
    public function list_new_temp_TourModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla a LEFT JOIN tours b ON a.ramdon = b.ramdon WHERE b.ramdon IS NOT NULL AND a.fecha=b.fecha");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }

    #BORRAR NUEVO TOUR DE LA TABLA TEMPORAL
    #-----------------------------------------------------
    public function delete_new_temp_TourModel($tabla){

        $stmt = Conexion::conectar()->prepare("DELETE tm.* FROM $tabla tm INNER JOIN tours t ON tm.ruta =t.ruta WHERE (tm.ruta = t.ruta)");

        if($stmt->execute()){

            return "ok";

        }

        else{

            return "error";

        }

        $stmt->close();

    }

    #BORRAR ARTICULOS
    #-----------------------------------------------------
    public function xxxxxxxxxx($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE id = :id");

        $stmt->bindParam(":id", $datosModel, PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }

        else{

            return "error";

        }

        $stmt->close();

    }




    #GUARDAR NUEVO TOUR
    #------------------------------------------------------------
    public function save_new_TourModel($datos, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (titulo,duracion, estado, etiquetas,fecha, actualizacion, enlace,ramdon,lang) VALUES (:titulo, :duracion, 'editando',:etiquetas, :fecha, :fecha, :enlace,:ramdon,:lang)");

        $stmt -> bindParam(":titulo", $datos["titulo"], PDO::PARAM_STR);
        $stmt -> bindParam(":ramdon", $datos["ramdon"], PDO::PARAM_STR);
        $stmt -> bindParam(":etiquetas", $datos["etiquetas"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt -> bindParam(":duracion", $datos["duracion"], PDO::PARAM_STR);
        $stmt -> bindParam(":enlace", $datos["enlace"], PDO::PARAM_STR);
        $stmt -> bindParam(":lang", $datos["lang"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";
        }

        else{

            return "error";
        }

        $stmt->close();

    }

    #LISTAR TODOS LOS TOURS  PUBLICADOS/EDITANDO
    #------------------------------------------------------------
    public function list_All_toursModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN tours b ON a.tid=b.tid WHERE b.estado = 'publicado' OR b.estado= 'editando' AND a.tid IS NOT NULL ORDER by orden DESC ");
        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }

    #LISTAR TOURS Publicados
    #------------------------------------------------------------
    public function list_published_toursModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN tours b ON a.tid=b.tid WHERE b.estado = 'publicado' AND a.tid IS NOT NULL ORDER by orden DESC");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }

    #LISTAR TOURS QUE SE ESTAN EDITANDO
    #------------------------------------------------------------
    public function list_editing_toursModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN tours b ON a.tid=b.tid WHERE b.estado = 'editando' AND a.tid IS NOT NULL ORDER by orden DESC");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }


    #EDITARTOURS
    #selecciona los tours que se van a editar
    #------------------------------------------------------
    public function mostrarProyectosModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN tours b ON b.id=a.tour_id");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }

    #ACTUALIZAR PROYECTOS
    #---------------------------------------------------
    public function editarProyectosModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla a INNER JOIN tdetalles b ON a.id=b.tour_id SET titulo = :titulo, estado =:estado, soles = :soles, dolares=:dolares, descripcion = :descripcion, incluye=:incluye, noincluye=:noincluye, itinerario=:itinerario, quellevar=:quellevar, ruta = :ruta  WHERE a.id = :id");

        $stmt -> bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
        $stmt -> bindParam(":estado", $datosModel["estado"], PDO::PARAM_STR);
        $stmt -> bindParam(":soles", $datosModel["soles"], PDO::PARAM_STR);
        $stmt -> bindParam(":dolares", $datosModel["dolares"], PDO::PARAM_STR);
        $stmt -> bindParam(":incluye", $datosModel["incluye"], PDO::PARAM_STR);
        $stmt -> bindParam(":noincluye", $datosModel["noincluye"], PDO::PARAM_STR);
        $stmt -> bindParam(":itinerario", $datosModel["itinerario"], PDO::PARAM_STR);
        $stmt -> bindParam(":quellevar", $datosModel["quellevar"], PDO::PARAM_STR);
        $stmt -> bindParam(":ruta", $datosModel["ruta"], PDO::PARAM_STR);
        $stmt -> bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
        $stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";
        }

        else{

            return "error";
        }

        $stmt->close();

    }



    #CONTAR LA CANTIDAD DE TOURS QUE TENEMOS
    #---------------------------------------------------------
    public function count_All_toursModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT count(*) FROM $tabla t LEFT JOIN tdetalles d ON t.id=d.tour_id WHERE t.estado = 'editando' OR t.estado = 'publicado'");

        $stmt -> execute();
        return $stmt -> fetchColumn();
        $stmt -> close();

    }

    #CONTAR LA CANTIDAD DE TOURS PUBLICADAS
    #---------------------------------------------------------
    public function count_Published_toursModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT count(*) FROM $tabla t LEFT JOIN tdetalles d ON t.id=d.tour_id WHERE t.estado = 'publicado'");

        $stmt -> execute();
        return $stmt -> fetchColumn();
        $stmt -> close();

    }

    #CONTAR LA CANTIDAD DE TOURS QUE SE ESTAN EDITANDO
    #---------------------------------------------------------
    public function count_Editing_toursModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT count(*) FROM $tabla t LEFT JOIN tdetalles d ON t.id=d.tour_id WHERE t.estado = 'editando'");

        $stmt -> execute();
        return $stmt -> fetchColumn();
        $stmt -> close();

    }

    public function edit_TourModel($datosModel,$tabla){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET titulo =:titulo, duracion = :duracion  WHERE id = :id");

        $stmt ->bindParam("titulo", $datosModel["titulo"],PDO::PARAM_STR);
        $stmt ->bindParam("duracion", $datosModel["duracion"],PDO::PARAM_STR);
//        $stmt ->bindParam("descripcion", $datosModel["descripcion"],PDO::PARAM_STR);
//        $stmt ->bindParam("quellevar", $datosModel["quellevar"],PDO::PARAM_INT);
//        $stmt ->bindParam("dolares", $datosModel["dolares"],PDO::PARAM_STR);
//        $stmt ->bindParam("soles", $datosModel["soles"],PDO::PARAM_STR);
//        $stmt ->bindParam("incluye", $datosModel["incluye"],PDO::PARAM_STR);
//        $stmt ->bindParam("noincluye", $datosModel["noincluye"],PDO::PARAM_STR);
        $stmt ->bindParam("id", $datosModel["id"],PDO::PARAM_INT);

        if($stmt->execute()){
            return "ok";
        }
        else {
            return "error";
        }
        $stmt->close();
    }


    #LISTAR PROYECTOS COMPLETADOS A DESTIEMPO
    #---------------------------------------------------------
    public function proyectosCompletadosDestiempoModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla a LEFT JOIN proyectosdet b ON a.pid=b.pid WHERE eid = '2' AND contador = meta AND contador !=0 AND meta !=0 AND terminado = 0 AND MONTH(fin) != MONTH(CURRENT_DATE()) AND YEAR(fin) != YEAR(CURRENT_DATE()) ORDER BY fin DESC");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }




    #ACTUALIZAR TOUR
    #---------------------------------------------------
    public function finalizarTourTareaModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla a LEFT JOIN tours b ON a.tid=b.id SET titulo = :titulo, actualizacion=:fecha WHERE b.id=:id");

        $stmt -> bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
        //$stmt -> bindParam(":duracion", $datosModel["duracion"], PDO::PARAM_STR);
        $stmt -> bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
        $stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";
        }

        else{

            return "error";
        }

        $stmt->close();

    }

    #EDITAR UN TOUR
    public function list_edit_tourModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla a INNER JOIN tours b ON a.tid=b.tid WHERE a.tid=:tid");
        $stmt->bindParam(":tid", $datosModel, PDO::PARAM_INT);
        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();


    }

    #ACTUALIZAR TOUR ULTIMO
    #-------------------------------------

    public function update_edit_tourModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla a INNER JOIN tours b ON a.tid=b.tid SET titulo = :titulo,duracion = :duracion, estado = :estado,etiquetas = :tags, actualizacion = :fecha, orden =:orden, descripcion =:descripcion, soles = :soles, dolares =:dolares,incluye = :incluye, noincluye =:noincluye, itinerario = :itsimple, quellevar = :kllevar, nota = :nota, full_itinerario = :itfull WHERE b.tid = :tid");

        $stmt->bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":duracion", $datosModel["duracion"], PDO::PARAM_STR);
        $stmt->bindParam(":itsimple", $datosModel["itsimple"], PDO::PARAM_STR);
        $stmt->bindParam(":itfull", $datosModel["itfull"], PDO::PARAM_STR);
        $stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
        $stmt->bindParam(":dolares", $datosModel["dolares"], PDO::PARAM_INT);
        $stmt->bindParam(":soles", $datosModel["soles"], PDO::PARAM_INT);
        $stmt->bindParam(":orden", $datosModel["orden"], PDO::PARAM_INT);
        $stmt->bindParam(":tags", $datosModel["tags"], PDO::PARAM_STR);
        $stmt->bindParam(":nota", $datosModel["nota"], PDO::PARAM_STR);
        $stmt->bindParam(":incluye", $datosModel["incluye"], PDO::PARAM_STR);
        $stmt->bindParam(":noincluye", $datosModel["noincluye"], PDO::PARAM_STR);
        $stmt->bindParam(":kllevar", $datosModel["kllevar"], PDO::PARAM_STR);
        $stmt->bindParam(":estado", $datosModel["estado"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);

        $stmt->bindParam(":tid", $datosModel["tid"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        }

        else{

            return "error";

        }

        $stmt->close();

    }

    #ASIGNAR O CONTAR O ASIGNAR UN NUMERO CADA VEZ QUE SE ACTUALIZE
    #-------------------------------------

    public function count_numbers_OrderModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY orden DESC LIMIT 0,1");
        //$stmt->bindParam(":tid", $datosM, PDO::PARAM_INT);
       // $stmt->bindParam(":tid", $datosM, PDO::PARAM_INT);

        $stmt->execute();

        return $stmt->fetch();

        $stmt->close();

    }

}