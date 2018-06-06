<?php

class User {
    private $db;


    public function __construct(){
        $this->db = new Database;
    }


    public function registroIngreso($data){
        $this->db->query(
            'INSERT INTO historial (user_email, actividad, fecha) 
                VALUES(:email, :actividad,:fecha)');
        // Bind values
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':actividad', $data['actividad']);
        $this->db->bind(':fecha', $data['fecha']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    public function guardar_Reg_Actividad($data){
        $this->db->query(
            'INSERT INTO actividades (user_id,tid, actividad, afecha) 
                VALUES(:uid,:pid, :actividad,:fecha)');
        // Bind values
        $this->db->bind(':uid', $data['uid']);
        $this->db->bind(':pid', $data['pid']);
        $this->db->bind(':actividad', $data['actividad']);
        $this->db->bind(':fecha', $data['fecha']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // Registrar a un Usuario
    public function register($data){
        $this->db->query(
            'INSERT INTO usuarios (nombre, password, email,rol) VALUES(:nombre, :password,:email,1 )');
        // Bind values
        $this->db->bind(':nombre', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

    // Find user by email
    public function findUserByEmail($email){
        $this->db->query('SELECT * FROM usuarios WHERE email = :email');
        // Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        // Contar
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    public function User_Baneado($data){
        $this->db->query('SELECT * FROM usuarios WHERE email = :email AND activo = false');
        // Bind value
        $this->db->bind(':email', $data);

        $row = $this->db->single();

        // Contar
        if($this->db->rowCount() > 0){
            return true;
        } else {
            return false;
        }
    }

    // Login User
    public function login($email, $password){

        $this->db->query("SELECT * FROM usuarios WHERE email = :email");

        $this->db->bind(":email", $email);

        $row = $this->db->single();

        $hashed_password = $row->password;
        if(password_verify($password, $hashed_password)){
            //devolver la fila del usuario
            return $row;
        } else {
            return false;
        }

    }

    // Get User by ID
    public function llamarUserById($id){
        $this->db->query('SELECT * FROM usuarios WHERE id = :id');
        // Bind value
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }
    //contador de intentos
    public function Sumar_intentos($data){
        $this->db->query("UPDATE usuarios SET intentos =intentos +1 WHERE email= :email");
        $this->db->bind(':email',$data);
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }

    }

//==============================         REGISTROS      =========================

    public function listar_All_Actividades(){

        $this->db->query("SELECT * FROM actividades c INNER JOIN usuarios u ON c.user_id=u.id 
                            INNER JOIN tdetalles a ON c.tid=a.tid INNER JOIN tours b
                            ON a.tid=b.tid WHERE b.estado = 'publicado'
                            OR b.estado= 'editando' AND b.lang = 'es' OR b.lang = 'en'
                            AND a.tid IS NOT NULL ORDER by c.id DESC LIMIT 10");

        $results = $this->db->selectAll();
        return $results;
    }


    public function listar_All_Historial(){

        $this->db->query(
            "SELECT * FROM usuarios a INNER JOIN historial b ON a.email=b.user_email
                  ORDER BY b.log_id DESC LIMIT 10");

        $results = $this->db->selectAll();
        return $results;
    }



}