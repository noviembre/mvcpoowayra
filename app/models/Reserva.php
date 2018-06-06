<?php


class Reserva {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }


    public function add($data){

        $this->db->query("INSERT INTO misreservas
                      (tid,r_c,nombres,cantidad,correo,mensaje,cuando,created_at)
                       VALUES (:tid,:r_c,:nombres,:cantidad,:correo,:mensaje,:cuando,:created_at)");

        // Bind values
        $this->db->bind(':tid', $data['tour_id']);
        $this->db->bind(':r_c', $data['reservar_consultar']);
        $this->db->bind(':nombres', $data['nombres']);
        $this->db->bind(':cantidad', $data['cantidad']);
        $this->db->bind(':correo', $data['correo']);
        $this->db->bind(':mensaje', $data['mensaje']);
        $this->db->bind(':cuando', $data['cuando']);
        $this->db->bind(':created_at', $data['created_at']);
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }




}