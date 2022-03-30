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
        if(isset($_POST['login'])){
            $username = $_POST['uname'];
            $pass = $_POST['pass'];

            $result = $this->model('Users_model')->getUsername($username);

            if($result['username'] === $username){
                if($pass === $result['password']){
                    header('Location: ' . BASEURL . 'feeds/index');
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
    
}

?>