<?php
class User {
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    //register new user
    public function register($data){
        $this->db->query('INSERT INTO cdpm_users (name, email, password) VALUES (:name, :email, :password)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
    //find user by email
    public function findUsersUsename($username){
        $this->db->query('SELECT * FROM cdpm_users WHERE username = :username');
        $this->db->bind(':username', $username);

        $row = $this->db->single();

        //check the row 
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    public function login($username){
        $this->db->query('SELECT * FROM cdpm_users where username = :username');
        $this->db->bind(':username', $username);
        $row = $this->db->single();
        return $row;
    }

    public function getUserById($id){
        $this->db->query('SELECT * FROM cdpm_users WHERE id = :id');
        $this->db->bind(':id', $id);
        $row = $this->db->single();
        return $row;
    }
}