<?php
/**
 * Created by PhpStorm.
 * User: GoMiNam
 * Date: 3/19/2018
 * Time: 11:00 AM
 */

class Contador{

    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function contarAllTours(){
        $this->db->query("
        SELECT count(*) as contando FROM tours t LEFT JOIN tdetalles d ON t.tid=d.tid 
        WHERE t.estado = 'editando' OR t.estado = 'publicado'");

        $row = $this->db->single();
        return $row;
    }

    public function contarAllToursPublicados(){
        $this->db->query("
        SELECT count(*) as publicados FROM tours t LEFT JOIN tdetalles d ON t.tid=d.tid 
        WHERE t.estado = 'publicado'");

        $row = $this->db->single();
        return $row;
    }

    public function contarAllToursEditando(){
        $this->db->query("
        SELECT count(*) as editando FROM tours t LEFT JOIN tdetalles d ON t.tid=d.tid 
        WHERE t.estado = 'editando'");

        $row = $this->db->single();
        return $row;
    }

}