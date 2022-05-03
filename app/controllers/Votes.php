<?php 
class Votes extends Controller {
    public function add($url){
        session_start();
        $this->model('Votes_model')->vote($_SESSION['id'], $url);
        header("Location: ".BASEURL."feeds");
        exit;
    }
}


?>