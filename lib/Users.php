<?php
class Users{

private $db;
    
    public function __construct(){
        $this->db = new Database();
    }
    
    public function insertUser($data){
        $this->db->query("INSERT INTO users(name, email, password) VALUES(:name, :email, :password)");
        $this->db->bind(":name", $data['name']);
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":password", md5($data['password']));
        
        $this->db->execute();
        if(!$this->db->lastInsertId()){
            return true;
        }else{
            return false;
        }
    }
    
    
    
    public function loginUser($data){
        $this->db->query("SELECT * FROM users WHERE email = :email && password = :password");
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":password", md5($data['password']));
        $row = $this->db->single();
        if($row){
            $_SESSION['is_logged_in'] = true;
            $_SESSION['user_data'] = array(
            "name" => $row['name']
            );
            return true;
        }else{
            return false;
        }
    }
}