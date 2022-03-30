<?php 
class User_model{
    public $table = "users";
    public $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllUser()
    {
        # code...
    }
}


?>