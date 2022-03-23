<?php 
class Login extends Controller{
    public function index()
    {
        $this->view('template/header');
        $this->view('login/index');
        $this->view('template/footer');
    }
}

?>