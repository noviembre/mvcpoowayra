<?php

class User {
    private $db;

    public function __construct(){
        $this->db = new Database;
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
    public function intentos($data){
        $this->db->query("UPDATE usuarios SET intentos =intentos +1 WHERE email= :email");
        $this->db->bind(':email',$data);
        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }

    }

}