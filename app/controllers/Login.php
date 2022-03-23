<?php 
class Login extends Controller{
    public function index()
    {
        $data['title'] = 'Login';
        $this->view('template/header', $data);
        $this->view('login/index');
        $this->view('template/footer');
        
    }
}

?>