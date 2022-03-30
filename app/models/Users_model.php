<?php 
class Users_model{
    public $table = "pengguna";
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUsername($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }
    public function getAllUsers(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
     }
     public function queryUsername($id)
    {
        $a = $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:id');
        $this->db->bind('id', $id);
        return $a;
    }
}


?>