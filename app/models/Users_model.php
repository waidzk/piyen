<?php 
class Users_model{
    public $table = "pengguna";
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    
    public function authByUsername($username)
    {
        $resulted = $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username');
        $this->db->bind('username', $username);
        return $resulted ;
    }

    public function getUsername($username)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE username=:username');
        $this->db->bind('username', $username);
        return $this->db->single();
    }
    public function getAllUsers(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getID($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        $this->db->executed();
        return $this->db->single();
    }

    public function register($data)
    {
        $data['pass'] = password_hash($data['pass'], PASSWORD_BCRYPT);
        $this->db->query("INSERT INTO pengguna VALUES (NULL, :username, :birth, :email, :passwords, NULL, NULL, NULL, current_timestamp(), current_timestamp())");
        $this->db->bind('username', $data['username']);
        $this->db->bind('birth', $data['birth']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('passwords', $data['pass']);
        $this->db->executed();
        return $this->db->rowCount();
    }

    public function update($id, $data)
    {
        $query = "UPDATE `pengguna` 
            SET 
            `username` = :username, `birth` = :birth, `email` = :email, `photo` = :photo, `bio` = :bio 
            WHERE `pengguna`.`id` = :id
        ";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('username', $data['username']);
        $this->db->bind('birth', $data['birth']);
        $this->db->bind('email', $data['email']);
        $this->db->bind('photo', $data['photo']);
        $this->db->bind('bio', $data['bio']);
        $this->db->executed();
        return $this->db->rowCount();
    }
}


?>