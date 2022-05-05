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

    public function downVote($id, $comId){
        $query = 'DELETE FROM '. $this->table . ' WHERE user_id = :id AND commen_id = :comId';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->bind('comId', $comId);
        $this->db->executed();
        return $this->db->rowCount();
    }

    public function showVote($id){
        $query = $this->db->query('SELECT COUNT(*) FROM '. $this->table .' WHERE commen_id = '.$id);
        return $query;
    }

}


?>