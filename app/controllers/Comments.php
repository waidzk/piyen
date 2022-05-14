<?php 

class Comments extends Controller
{
    public function add($url){
        if (isset($_POST['send'])){
            session_start();
            $this->model('Comments_model')->addComment($_POST, $url, $_SESSION['id']);
            header('Location: '.BASEURL.'feeds/#'.$url);
            exit;
        } else {
            header('Location: '.BASEURL.'forbidden');
        }
    }
}