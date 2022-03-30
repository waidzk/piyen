<?php 
class Feeds extends Controller{
    public function index()
    {
        session_start();
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        $data['title'] = 'Feeds - ';
        $this->view('template/navigator', $data);
        $this->view('feeds/index');
        $this->view('template/footer');
    }
    public function add()
    {
        session_start();
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        $data['title'] = '';
        $this->view('template/header', $data);
        $this->view('feeds/add');
        $this->view('template/footer');
    }
}


?>