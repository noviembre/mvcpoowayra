<?php
/**
 * Created by PhpStorm.
 * User: GoMiNam
 * Date: 3/7/2018
 * Time: 12:04 PM
 * 3/3
 */

class Tour {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // Find tour by id
    public function encontrarTourbyUrl($url){

        $this->db->query('SELECT * FROM tours WHERE enlace = :url');
        // Bind value
        $this->db->bind(':url', $url);

        $row = $this->db->single();

        // Contar
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    # Listar Tours en la portada
    public function listarTourByUrl($url){

        $this->db->query('SELECT * FROM tours a INNER JOIN tdetalles b ON a.tid=b.tid WHERE enlace = :url');
        $this->db->bind(':url', $url);

        $row = $this->db->single();
        return $row;
    }







}