<?php 
class Signup extends Controller
{
    public function index()
    {
        session_start();
        $data['title'] = 'Sign Up - ';
        $this->view('template/header', $data);
        $this->view('signup/index', $data);
    }

    public function regist()
    {
        if($_POST['password'] === $_POST['password2']){
            $result = $this->model('Users_model')->register($_POST);
                if($result > 0 ){
                    echo "
                    <script>
                        alert('Berhasil Signup!');
                        document.location.href = '".BASEURL."login';
                        </script>
                    ";
                    // header('Location: ' . BASEURL . 'login');
                    // exit;
                } else {
                    echo "
                    <script>
                        alert('Gagal Signup, silakan signup kembali!');
                        document.location.href = '".BASEURL."signup';
                        </script>
                    ";
                    // header('Location: ' . BASEURL . 'signup');
                    // exit;
                }
        } else {
            echo "
                    <script>
                        alert('Gagal Signup, password tidak sama!');
                        document.location.href = '".BASEURL."signup';
                        </script>
                    ";
        }
    }
}


?>