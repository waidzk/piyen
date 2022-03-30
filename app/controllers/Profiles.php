<?php 
class Profiles extends Controller{
    public function index()
    {
        $data['title'] = 'Profile - ';
        $this->view('template/navigator', $data);
        $this->view('profiles/index');
        $this->view('template/footer');
    }
    public function user()
    {
        $data['title'] = '';
        $this->view('template/header', $data);
        $this->view('profiles/user');
        $this->view('template/footer');
    }
}


?>