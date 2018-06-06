<?php


class Message {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }


    public function add($data){

        $this->db->query("INSERT INTO mensajes
                      (nombres,apellidos,correo,mensaje,created_at)
                       VALUES (:nombres,:apellidos,:correo,:mensaje,:created_at)");

        // Bind values
        $this->db->bind(':nombres', $data['nombres']);
        $this->db->bind(':apellidos', $data['apellidos']);
        $this->db->bind(':correo', $data['correo']);
        $this->db->bind(':mensaje', $data['mensaje']);
        $this->db->bind(':created_at', $data['created_at']);
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }




}