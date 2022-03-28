<?php 
class Home extends Controller{
    public function index()
    {
        $data['title'] = 'Home';
        $this->view('template/header', $data);
        $this->view('home/index');
        $this->view('template/footer');
    }
    public function feeds()
    {
        $data['title'] = 'Feeds';
        $this->view('template/header', $data);
        $this->view('home/feeds');
        $this->view('template/footer');

    }
}


?>