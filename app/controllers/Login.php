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
            $username = $_POST['uname'];
            $pass = $_POST['pass'];

            $result = $this->model('Users_model')->getUsername($username);

            if($result['username'] === $username){
                if($pass === $result['password']){
                    $_SESSION['login'] = true;
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['username'] = $result['username'];
                    header('Location: ' . BASEURL . 'feeds');
                    exit;
                } else {
                    echo "
                    <script>
                    alert('Password Salah! Anda bukan admin Erdoe');
                    document.location.href = 'index.php';
                    </script>
                    ";
                }
            }

        }
    }

    public function logout()
    {
        session_start();
        session_destroy();
        session_unset();

        header('Location: '.BASEURL.'login');
        exit;
    }
    
}

?>