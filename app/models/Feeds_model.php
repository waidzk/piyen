<?php 
class Feeds_model {
    public $table = "feeds";
    public $table2 = 'pengguna';
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getFeedUser($id){
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE user_id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSet();
    }
    public function getAllFeeds(){
        $this->db->query('SELECT * FROM ' . $this->table . ', ' . $this->table2 . ' WHERE feeds.user_id = pengguna.id order by feeds.id desc');
        return $this->db->resultSet();
    }

    public function addFeed($id, $value, $photo){
        $query = "INSERT INTO feeds 
                    VALUES 
                    (NULL, :userId, :feedValue, :feedPhoto, current_timestamp(), current_timestamp(), current_timestamp())
                ";
        $this->db->query($query);
        $this->db->bind('userId', $id);
        $this->db->bind('feedValue', $value);
        $this->db->bind('feedPhoto', $photo);
        $this->db->executed();
        return $this->db->rowCount();
    }

    public function deleteFeed($id)
    {
        $query = "DELETE FROM ".$this->table." WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->executed();
        return $this->db->rowCount();
    }
}



?>