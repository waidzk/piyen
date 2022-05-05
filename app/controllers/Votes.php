<?php 
class Votes extends Controller {
    public function add(){
        session_start();
        $this->model('Votes_model')->vote($_SESSION['id'], $_POST['id']);
    }

    public function showVote(){
        $this->model('Votes_model')->showVote($_POST['id']);
    }

    public function down(){
        session_start();
        $this->model('Votes_model')->downVote($_SESSION['id'], $_POST['id']);
    }
}


?>