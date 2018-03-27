<?php
/**
 * Created by PhpStorm.
 * User: GoMiNam
 * Date: 3/21/2018
 * Time: 5:57 AM
 */

class Galery{

    private $db;

    public function __construct(){

        $this->db = new Database;
    }

    public function listarGalerySpanishAll(){
        $this->db->query("SELECT a.gid, a.gtitulo, a.gruta, b.titulo, b.duracion, b.lang
    from galeria a INNER JOIN tours b ON a.tid=b.tid WHERE b.lang = 'es' ORDER BY b.titulo ASC");

        $results = $this->db->selectAll();
        return $results;
    }

    public function listarGaleryTourSpanishAll(){
        $this->db->query("SELECT * from galeria a INNER JOIN tours b ON a.tid=b.tid 
          WHERE b.lang = 'es' GROUP BY b.titulo ORDER BY b.titulo ASC");

        $results = $this->db->selectAll();
        return $results;
    }

    // Find galery by id
    public function encontrarGalerybyId($id){

        $this->db->query('SELECT * FROM galeria WHERE gid = :id');
        // Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        // Contar
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function actualizarGalery($data){

        $this->db->query("UPDATE galeria SET gtitulo = :gtitulo, gruta=:gruta, gfecha=:fecha
                           WHERE gid = :id");

        // Bind values
        $this->db->bind(':id', $data['gid']);

        $this->db->bind(':gtitulo', $data['gtitulo']);
        $this->db->bind(':gruta', $data['gruta']);
        $this->db->bind(':fecha', $data['fecha']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function listarGaleryById($id){
        $this->db->query(" SELECT * FROM galeria a INNER JOIN tours b
                            ON a.tid=b.tid WHERE a.gid=:id");

        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function listarGalery(){
        //$this->db->query("SELECT a.gid, a.gruta, b.lang, b.titulo
        // from galeria a INNER JOIN tours b ON a.tid=b.tid WHERE b.lang = 'es' ORDER BY b.titulo ASC");

        $this->db->query("SELECT * from galeria");

        $results = $this->db->selectAll();
        return $results;
    }

    public function listarTourNombre(){
        $this->db->query(" SELECT * FROM galeria a INNER JOIN tours b
                            ON a.tid=b.tid GROUP BY b.titulo ORDER BY b.titulo ASC");

        $results = $this->db->selectAll();
        return $results;
    }

    public function listarTour($id){
        $this->db->query(" SELECT * FROM galeria a INNER JOIN tours b
                            ON a.tid=b.tid WHERE a.tid=:id");
        //$this->db->query(" SELECT * FROM galeria WHERE tid=:id");
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function listarTourSlide($id){
        $this->db->query("SELECT * from galeria a INNER JOIN tours b ON a.tid=b.tid
          WHERE a.tid=:id ORDER BY b.titulo ASC");
        // $this->db->query("SELECT * from galeria WHERE tid=:id ORDER BY titulo ASC");
        $this->db->bind(':id', $id);
        $results = $this->db->selectAll();
        return $results;
    }

    public function actualizarSlide($data){

        $this->db->query("UPDATE galeria SET gtitulo = :gtitulo, gruta=:gruta, gfecha=:fecha
                           WHERE gid = :gid");

        // Bind values
        $this->db->bind(':gid', $data['gid']);

        $this->db->bind(':gtitulo', $data['gtitulo']);
        $this->db->bind(':gruta', $data['gruta']);
        $this->db->bind(':fecha', $data['fecha']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


}