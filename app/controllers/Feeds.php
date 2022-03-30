<?php 
class Feeds extends Controller{
    public function index()
    {
        $data['title'] = 'Feeds - ';
        $this->view('template/navigator', $data);
        $this->view('feeds/index');
        $this->view('template/footer');
    }
    public function add()
    {
        $data['title'] = '';
        $this->view('template/header', $data);
        $this->view('feeds/add');
        $this->view('template/footer');
    }
}


?>