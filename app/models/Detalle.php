<?php
/**
 * Created by PhpStorm.
 * User: GoMiNam
 * Date: 3/7/2018
 * Time: 12:04 PM
 * 3/3
 */

class Detalle {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function listarDetalleTourById($id){
        $this->db->query('SELECT * FROM tdetalles a INNER JOIN tours b ON a.tid=b.tid INNER JOIN galeria c ON b.tid=c.tid WHERE a.tid = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

}