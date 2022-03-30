<?php 
class Profiles extends Controller{
    public function user()
    {
        $data['title'] = 'Profile - ';
        session_start();
        $data['user_data'] = $this->model('Users_model')->getUsername($_SESSION['username']);
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        $data['title'] = 'Profile - ';
        $this->view('template/navigator', $data);
        $this->view('profiles/index', $data);
        $this->view('template/footer');
    }
    public function index()
    {
        $data['title'] = '';
        session_start();
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        $this->view('template/header', $data);
        $this->view('profiles/user');
        $this->view('template/footer');
    }
}


?>