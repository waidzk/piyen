<?php 
class Signup extends Controller{
    public function index()
    {
        $data['title'] = 'Sign Up - ';
        $this->view('template/header', $data);
        $this->view('signup/index');
    }
}


?>