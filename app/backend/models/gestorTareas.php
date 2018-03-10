<?php
/*
  todo ----------->>>>
    @runa - babo
    @fecha - 11/24/2017
    @hora - 11:10 AM
  */

require_once "conexion.php";

class GestorTareasModel
{

    #GUARDAR TAREA
    #------------------------------------------------------------

    public function guardarTareaModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (tarea,titulo, accion, detalles, modo, tiempo_starts,cmtinicial) VALUES (:tarea, :titulo, :accion, :detalles, :modo, :fecha, :cmtinicial)");

        $stmt->bindParam(":tarea", $datosModel["tarea"], PDO::PARAM_INT);
        $stmt->bindParam(":accion", $datosModel["accion"], PDO::PARAM_STR);
        $stmt->bindParam(":detalles", $datosModel["detalles"], PDO::PARAM_STR);
        $stmt->bindParam(":modo", $datosModel["modo"], PDO::PARAM_STR);
        $stmt->bindParam(":fecha", $datosModel["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":titulo", $datosModel["titulo"], PDO::PARAM_STR);
        $stmt->bindParam(":cmtinicial", $datosModel["cmtinicial"], PDO::PARAM_STR);


        if ($stmt->execute()) {

            return $stmt -> fetch();
        } else {

            return "error";
        }

        $stmt->close();

    }

    #MOSTRAR TAREAS SIN CONCLUIR
    #---------------------------------------------------------
    public function mostrarTareasModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE done = 'e' AND tiempo_ends = '0000-00-00 00:00:00' ORDER BY tiempo_starts DESC");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }

    #FINALIZAR TAREA
    #---------------------------------------------------
    public function finalizarTareaModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET done = '1', cmtfinal = :cmtfinal, tiempo_ends = NOW() WHERE id = :id");

        $stmt -> bindParam(":cmtfinal", $datosModel["cmtfinal"], PDO::PARAM_STR);
        $stmt -> bindParam(":id", $datosModel["id"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";
        }

        else{

            return "error";
        }

        $stmt->close();

    }

    #EN REALIDAD MUESTRA LAS TAREAS HECHAS DE LA SEMANA PASADA
    #---------------------------------------------------------
    public function listarTareaSemanaModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE tiempo_starts between date_sub(now(),INTERVAL 1 WEEK) and now() AND done ='1'");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }
    #LISTA LAS TAREAS HECHAS EL MES ACTUAL
    #---------------------------------------------------------
    public function listarTareaMesModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla
WHERE YEAR(tiempo_starts) = YEAR(CURRENT_DATE - INTERVAL 0 MONTH)
AND MONTH(tiempo_starts) = MONTH(CURRENT_DATE - INTERVAL 0 MONTH)");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }

    #LISTA LAS TAREAS HECHAS EL MES ANTERIOR
    #---------------------------------------------------------
    public function listarTareaMesAnteriorModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla
WHERE YEAR(tiempo_starts) = YEAR(CURRENT_DATE - INTERVAL 1 MONTH)
AND MONTH(tiempo_starts) = MONTH(CURRENT_DATE - INTERVAL 1 MONTH)");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }

    # TAREAS | MOSTRAR LISTA DE TABLAS
    #------------------------------------------------------
    public function mostrarTablaModel($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY fecha DESC");

        $stmt -> execute();
        return $stmt -> fetchAll();
        $stmt -> close();

    }

    #ACTUALIZAR LA HORA DE LA TABLA TAREA
    #---------------------------------------------------
    public function actualizarHoraTareaModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET fecha = :ufecha, contador = contador + 1 WHERE id = :utareaid");

        $stmt -> bindParam(":ufecha", $datosModel["fecha"], PDO::PARAM_STR);
        $stmt -> bindParam(":utareaid", $datosModel["tareaid"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";
        }

        else{

            return "error";
        }

        $stmt->close();

    }

    #SUMAR EL CONTADOR DE UNA TAREA
    #---------------------------------------------------
    public function contadorTareasModel($datosModel, $tabla){

        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET contador = :ucontador WHERE id = :utareaid");

        $stmt -> bindParam(":ucontador", $datosModel["contador"], PDO::PARAM_INT);
        $stmt -> bindParam(":utareaid", $datosModel["tareaid"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";
        }

        else{

            return "error";
        }

        $stmt->close();

    }


}
?>