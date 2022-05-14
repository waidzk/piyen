<?php 
class Articles extends Controller{
    public function index()
    {
        session_start();
        $data['title'] = '';
        $this->view('template/header', $data);
        $this->view('template/navigator');
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
        $data['title'] = 'Add Articles';
        $this->view('template/header', $data);
        $this->view('template/navigator');
        $this->view('articles/add');
        $this->view('template/footer');

        if(isset($_POST['save'])){
            $this->model('Articles_model')->add($_SESSION['id'], $_POST);
            echo "
            <script>
                alert('Article berhasil diunggah!')
                document.location.href = '".BASEURL."/articles'
            </script>
            ";
        }
    }
    
}

?>