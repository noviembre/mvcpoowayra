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

    public function listarToursPaquetes(){
        $this->db->query("SELECT * FROM portada WHERE facha = 1 ");

        $results = $this->db->selectAll();
        return $results;
    }

    public function listarToursPopular(){
        $this->db->query("SELECT * FROM portada where facha = 2");

        $rows = $this->db->selectAll();
        return $rows;
    }

    # Listar Tours en la portada
    public function getTourById($id){

        $this->db->query('SELECT * FROM portada WHERE pid = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->selectOne();
        return $row;
    }



}