<?php 
class Err extends Controller{
    public function index() {
        $this->view('template/forbidden');
    }
    public function notfound() {
        $this->view('template/notfound');
    }
}



?>