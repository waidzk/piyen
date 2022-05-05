<?php 

class Comments_model
{
    public $table = "comments";
    public $table2 = "pengguna";
    public $table3 = "feeds";
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getComments(){
        $this->db->query('SELECT * FROM ' . $this->table3 . ', ' . $this->table2 .', ' . $this->table . ' WHERE comments.user_id = pengguna.id AND comments.feed_id = feeds.id order by comments.id DESC');
        return $this->db->resultSet();
    }

    public function addComment($data, $feedId, $id){
        $query = "INSERT INTO ".$this->table." 
                    VALUES 
                    (NULL, :userId, :feedId, :commentValue, current_timestamp(), current_timestamp(), current_timestamp())";
        $this->db->query($query);
        $this->db->bind('userId', $id);
        $this->db->bind('feedId', $feedId);
        $this->db->bind('commentValue', $data['comment']);
        $this->db->executed();
        return $this->db->rowCount();
    }
}
