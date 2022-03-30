<?php 
class Articles extends Controller{
    public function index()
    {
        $data['title'] = '';
        $this->view('template/navigator', $data);
        $this->view('articles/index');
        $this->view('template/footer');
    }

    public function add()
    {
        $data['title'] = '';
        $this->view('template/header', $data);
        $this->view('articles/add');
        $this->view('template/footer');
    }
    
}


?>