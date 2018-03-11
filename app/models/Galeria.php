<?php


class Galeria {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function llamarTresSlides($id){
        $this->db->query(
            'SELECT * FROM galeria a INNER JOIN tours b ON a.tid=b.tid WHERE a.tid = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->selectAll();
        return $row;

    }

}