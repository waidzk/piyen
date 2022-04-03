<?php 
class Articles extends Controller{
    public function index()
    {
        session_start();
        $data['title'] = '';
        $this->view('template/navigator', $data);
        $this->view('articles/index');
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
        $this->view('template/navigator', $data);
        $this->view('articles/add');
        $this->view('template/footer');
    }
    
}


?>