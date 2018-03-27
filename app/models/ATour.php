<?php


class ATour {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    // Find tour by id
    public function encontrarTourbyId($tid){

        $this->db->query('SELECT * FROM tours WHERE tid = :tid');
        // Bind value
        $this->db->bind(':tid', $tid);

        $row = $this->db->single();

        // Contar
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function listarTourAll(){
        $this->db->query("SELECT * FROM tdetalles a INNER JOIN tours b 
                            ON a.tid=b.tid WHERE b.estado = 'publicado' 
                            OR b.estado= 'editando' AND b.lang = 'es' OR b.lang = 'en'
                            AND a.tid IS NOT NULL ORDER by b.actualizacion DESC ");

        $results = $this->db->selectAll();
        return $results;
    }

    public function listarTourSpanishAll(){
        $this->db->query("SELECT * FROM tdetalles a INNER JOIN tours b 
                            ON a.tid=b.tid WHERE a.tid IS NOT NULL  AND lang = 'es' 
                            ORDER by b.actualizacion DESC LIMIT 30");

        $results = $this->db->selectAll();
        return $results;
    }


    public function listarTourEnglishAll(){
        $this->db->query("SELECT * FROM tdetalles a INNER JOIN tours b 
                            ON a.tid=b.tid WHERE a.tid IS NOT NULL  AND lang = 'en' 
                            ORDER by b.actualizacion DESC LIMIT 30");

        $results = $this->db->selectAll();
        return $results;
    }

    public function listarTourPublishedAll(){
        $this->db->query("SELECT * FROM tdetalles a INNER JOIN tours b 
                            ON a.tid=b.tid WHERE a.tid IS NOT NULL  AND estado ='publicado' 
                            ORDER by b.actualizacion DESC LIMIT 80");

        $results = $this->db->selectAll();
        return $results;
    }

    public function listarTourEditingAll(){
        $this->db->query("SELECT * FROM tdetalles a INNER JOIN tours b 
                            ON a.tid=b.tid WHERE a.tid IS NOT NULL  AND estado ='editando' 
                            ORDER by b.actualizacion DESC LIMIT 80");

        $results = $this->db->selectAll();
        return $results;
    }




    public function listarTourById($id){
        $this->db->query(" SELECT * FROM tdetalles a INNER JOIN tours b
                            ON a.tid=b.tid WHERE a.tid=:tid");

        $this->db->bind(':tid', $id);

        $row = $this->db->single();

        return $row;
    }


    public function listarTourTemporal(){

        $this->db->query(" 
          SELECT * FROM temporal a INNER JOIN tours b ON a.ramdon=b.ramdon ORDER BY a.id DESC LIMIT 1");

        $row = $this->db->single();

        return $row;
    }

    public function agregarTour($data){

        $this->db->query("INSERT INTO tours
                      (titulo,uid,duracion, estado, etiquetas,fecha, actualizacion, enlace,ramdon,lang)
                       VALUES (:titulo,:uid, :duracion, 'editando',:etiquetas, :fecha, :fecha, :enlace,:aleatorio,:idioma)");

        // Bind values
        $this->db->bind(':titulo', $data['titulo']);
        $this->db->bind(':duracion', $data['duracion']);
        $this->db->bind(':etiquetas', $data['etiquetas']);
        $this->db->bind(':fecha', $data['fecha']);

        $this->db->bind(':enlace', $data['enlace']);
        $this->db->bind(':idioma', $data['idioma']);
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':aleatorio', $data['aleatorio']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function agregarTourDetalles($data){

        $this->db->query("
                  INSERT INTO tdetalles ( tid,descripcion,incluye,noincluye,itinerario,quellevar,nota,full_itinerario) 
                  VALUES (:tid,:descripcion,:incluye,:noincluye,:isimple,:quellevar,:nota,:ifull)");

        // Bind values

        //$this->db->bind(':aleatorio', $data['aleatorio']);

        $this->db->bind(':tid', $data['tid']);

        $this->db->bind(':isimple', $data['isimple']);
        $this->db->bind(':ifull', $data['ifull']);
        $this->db->bind(':descripcion', $data['descripcion']);
        $this->db->bind(':nota', $data['nota']);
        $this->db->bind(':incluye', $data['incluye']);
        $this->db->bind(':noincluye', $data['noincluye']);
        $this->db->bind(':quellevar', $data['quellevar']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function agregarTourTemporal($data){

        $this->db->query("INSERT INTO temporal
                      (titulo,uid,duracion, estado, etiquetas,fecha, actualizacion, enlace,ramdon,lang)
                       VALUES (:titulo,:uid, :duracion, 'editando',:etiquetas, :fecha, :fecha, :enlace,:aleatorio,:idioma)");

        // Bind values
        $this->db->bind(':titulo', $data['titulo']);
        $this->db->bind(':duracion', $data['duracion']);
        $this->db->bind(':etiquetas', $data['etiquetas']);
        $this->db->bind(':fecha', $data['fecha']);

        $this->db->bind(':enlace', $data['enlace']);
        $this->db->bind(':idioma', $data['idioma']);
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':aleatorio', $data['aleatorio']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }
    public function agregarTourPortada($data){

        $this->db->query("INSERT INTO portada
                      (titulo,uid,duracion, estado, etiquetas,fecha, actualizacion, enlace,lang)
                       VALUES (:titulo,:uid, :duracion, 'editando',:etiquetas, :fecha, :fecha, :enlace,:idioma)");

        // Bind values
        $this->db->bind(':titulo', $data['titulo']);
        $this->db->bind(':duracion', $data['duracion']);
        $this->db->bind(':etiquetas', $data['etiquetas']);
        $this->db->bind(':fecha', $data['fecha']);

        $this->db->bind(':enlace', $data['enlace']);
        $this->db->bind(':idioma', $data['idioma']);
        $this->db->bind(':uid', $data['uid']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function actualizarTour($data){
        //$this->db->query('UPDATE posts SET title = :title, body = :body WHERE id = :id');

        $this->db->query("UPDATE tdetalles a INNER JOIN tours b 
                          ON a.tid=b.tid SET titulo = :titulo, uid=:uid,
                          duracion = :duracion,
                           estado = :estado,etiquetas = :etiquetas,  
                           actualizacion =:fecha,
                           descripcion =:descripcion, soles = :soles, 
                           dolares =:dolares,incluye = :incluye, noincluye =:noincluye, 
                           itinerario = :isimple, quellevar = :quellevar, nota = :nota, 
                           full_itinerario = :ifull WHERE b.tid = :tid");

        // Bind values
        $this->db->bind(':tid', $data['tid']);
        $this->db->bind(':titulo', $data['etitulo']);
        $this->db->bind(':duracion', $data['eduracion']);
        $this->db->bind(':estado', $data['eestado']);
        $this->db->bind(':etiquetas', $data['eetiquetas']);
        $this->db->bind(':descripcion', $data['edescripcion']);
        $this->db->bind(':soles', $data['esoles']);
        $this->db->bind(':dolares', $data['edolares']);
        $this->db->bind(':incluye', $data['eincluye']);
        $this->db->bind(':noincluye', $data['enoincluye']);
        $this->db->bind(':isimple', $data['eisimple']);
        $this->db->bind(':quellevar', $data['equellevar']);
        $this->db->bind(':nota', $data['enota']);
        $this->db->bind(':ifull', $data['eifull']);
        $this->db->bind(':fecha', $data['fecha']);
        $this->db->bind(':uid', $data['uid']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }


    #BORRAR NUEVO TOUR DE LA TABLA TEMPORAL
    #-----------------------------------------------------
    public function eliminarTourTemporal(){

        $this->db->query(
            "DELETE tm.* FROM temporal tm INNER JOIN tours t 
              ON tm.ramdon =t.ramdon WHERE (tm.ramdon = t.ramdon)");

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }

    }



}