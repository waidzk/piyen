<?php 
class Login extends Controller{
    public function index()
    {
        $data['user'] = $this->model('Users_model')->getAllUsers();
        $data['title'] = 'Login - ';
        $this->view('template/header', $data);
        $this->view('login/index', $data);
    }

    public function auth()
    {
        session_start();
        if(isset($_SESSION['login'])){
            header('Location: ' .BASEURL. 'feeds');
            exit;
        }
        if(isset($_POST['login'])){
            $username = $_POST['username'];
            //$username = isset($_POST['username'])? $_POST['username']: '';
            $pass = $_POST['pass'];
            //$pass = isset($_POST['pass'])? $_POST['pass'] : '';
            $result = $this->model('Users_model')->getUsername($username); 

            if($username === $result['username'] || $username === $result['email']){
                if(password_verify($pass, $result['passwords'])){
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['username'] = $result['username'];
                    header('Location: ' . BASEURL . 'feeds');
                    exit;
                } else {
                    echo "
                    <script>
                    alert('Username atau password anda salah');
                    document.location.href = '".BASEURL."login';
                    </script>
                    ";
                    // header('Location: ' . BASEURL . 'login');
                    // exit;
                }
            }
        }

    }
    
    protected function logout()
    {
        session_start();
        session_destroy();
        session_unset();
        header('Location: '.BASEURL.'login');
        exit;
    }
    
}
?>