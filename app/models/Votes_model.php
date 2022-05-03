<?php 
class Votes_model {
    public $table = 'votes';
    public $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function vote($id, $commentId){
        $query = 'INSERT INTO ' . $this->table . 
                    ' VALUE (NULL, :userId, :commentId, current_timestamp(), current_timestamp())';
        $this->db->query($query);
        $this->db->bind('userId', $id);
        $this->db->bind('commentId', $commentId);
        $this->db->executed();
        return $this->db->rowCount();
    }

    public function countVote(){
        $query = "SELECT * FROM ". $this->table . " WHERE id = :id";
        $this->db->bind('id', $id);
        return mysqli_num_rows($this->db->query($query));
    }

}


?>