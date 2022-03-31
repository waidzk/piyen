<?php 
class Profiles extends Controller{
    public function index()
    {
        $data['title'] = '';
        session_start();
        $data['id'] = $this->model('Users_model')->getID($_SESSION['id']);
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        $this->view('template/header', $data);
        $this->view('profiles/index', $data);
        $this->view('template/footer');
    }
    public function user($uri)
    {
        $data['title'] = 'Profile - ';
        // mendapatkan data username agar dikirim ke user.php
        // $url = $_GET['url'];
        // $url = rtrim($_GET['url'], '/');
        // $url = filter_var($url, FILTER_SANITIZE_URL);
        // $url = explode('/', $url);
        $data['userdata'] = $data['user_data'] = $this->model('Users_model')->getUsername($uri);
        session_start();
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        $data['url'] = $_GET['url'];
        $data['title'] = 'Profile - ';
        $this->view('template/navigator', $data);
        $this->view('profiles/user', $data);
        $this->view('template/footer');
    }
    public function update()
    {
        session_start();
        $result = $this->model('Users_model')->update($_SESSION['id'],$_POST);
            if($result > 0 ){
                echo "
                <script>
                    alert('Berhasil diubah!');
                    document.location.href = '".BASEURL."profiles/user/".$_SESSION['username']."';
                    </script>
                ";
            } else {
                echo "
                <script>
                    alert('Gagal diubah, silakan periksa kembali!');
                    document.location.href = '".BASEURL."profiles/user/".$_SESSION['username']."';
                    </script>
                ";
            }
    }
    
}


?>