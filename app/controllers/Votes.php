<?php 
class Votes extends Controller {
    public function add(){
        if(!isset($_POST['id'])){
            header('Location: '.BASEURL.'err/notfound');
        } else {
            session_start();
            $this->model('Votes_model')->vote($_SESSION['id'], $_POST['id']);
        }
        
    }

    public function showVote(){
        return showVotes($_POST['id']);
    }

    public function down(){
        if(!isset($_POST['id'])){
            header('Location: '.BASEURL.'err/notfound');
        } else {
            session_start();
            $this->model('Votes_model')->downVote($_SESSION['id'], $_POST['id']);
        }
    }
}


?>