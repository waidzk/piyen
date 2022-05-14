<?php 
class Articles_model {
    public $table = "articles";
    public $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function add($id, $value){
        $query = "INSERT INTO `articles` (`id`, `user_id`, `article_title`, `article_value`, `article_photo`, `created_at`, `updated_at`, `deleted_at`) VALUES (NULL, :userId, :title, :articleValue, NULL, current_timestamp(), current_timestamp(), current_timestamp())";

        $this->db->query($query);
        $this->db->bind('userId', $id);
        $this->db->bind('title', $value['title']);
        $this->db->bind('articleValue', $value['articles']);
        $this->db->executed();

        return $this->db->rowCount();
    }
}



?>