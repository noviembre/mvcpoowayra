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

    public function getTours(){
        $this->db->query(
            "SELECT * FROM portada WHERE facha = 1
                        ");

        $results = $this->db->resultSet();
        return $results;
    }

    # Seleccionar tour por id
    public function getTourById($id){
        $this->db->query('SELECT * FROM portada WHERE pid = :id');
        $this->db->bind(':id', $id);

        $row = $this->db->single();

        return $row;
    }

    public function addPost($data){
        $this->db->query('INSERT INTO tours (title, user_id, body) VALUES(:title, :user_id, :body)');
        // Bind values
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':body', $data['body']);

        // Execute
        if($this->db->execute()){
            return true;
        } else {
            return false;
        }
    }

}