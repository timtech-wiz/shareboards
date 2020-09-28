<?php

class Shares{
    private $db;
    
    public function __construct(){
        $this->db = new Database();
    }
    
    // fetch all shares
    public function allShares(){
        $this->db->query("SELECT * FROM share ORDER BY date_created DESC");
        $result = $this->db->resultSet();
        return $result;
         
    }
    
    public function insertShare($data){
        $this->db->query("INSERT INTO share(title, body, link) VALUES(:title, :body, :link)");
        $this->db->bind(":title", $data['title']);
        $this->db->bind(":body", $data['body']);
        $this->db->bind(":link", $data['link']);
        
        if($this->db->execute()){
            return false;
        }else{
            return true;
        }
    }
}