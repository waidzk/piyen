<?php 
class Profiles extends Controller{
    public function index()
    {
        $data['title'] = 'Profile - ';
        session_start(); 
        $data['id'] = $this->model('Users_model')->getID($_SESSION['id']);
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        $this->view('template/header', $data);
        $this->view('template/navigator', $data);
        $this->view('profiles/index', $data);
        $this->view('template/footer');

        // upload button trigger 
        if(isset($_POST['upload'])){
            // available extensions
            $extensions	= array('png','jpg');
            //get name of photo files
            $photo = $_FILES['photo']['name'];
            $photo_extension = explode('.', $photo);
            $extension = strtolower(end($photo_extension));
            // size of file
            $size	= $_FILES['photo']['size'];
            // tmp of photo file
            $file_tmp = $_FILES['photo']['tmp_name'];

            if(isset($photo)){
                // checking the available extensions and size of photo
                if(in_array($extension, $extensions) === true && $size <= 1044070){
                    move_uploaded_file($file_tmp, __DIR__.'/../assets/img/profiles/'.$photo);
                    $this->model('Users_model')->updatePhoto($_SESSION['id'], $photo);
                    header('Location: '.BASEURL.'profiles');
                    exit;
                } else {
                    echo "
                    <script>
                        alert('Foto terlalu besar atau format tidak mendukung!');
                        </script>
                    ";
                }
            } else {
                header('Location: '.BASEURL.'profiles');
                exit;
            }
        }
    }

    public function user()
    {
        if(!isset(exploded($_SERVER['REQUEST_URI'])[4]) || !isset(exploded($_SERVER['REQUEST_URI'])[5])){
            header('Location: '.BASEURL.'err/notfound');
        }
        $data['title'] = 'Profile - ';
        $data['userdata'] = $this->model('Users_model')->getUsername(exploded($_SERVER['REQUEST_URI'])[4]);
        session_start();  
        $data['feeds'] = $this->model('Feeds_model')->getFeedUser(exploded($_SERVER['REQUEST_URI'])[5]);
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        // $data['url'] = $_GET['url'];
        $data['title'] = 'Profile - ';
        $this->view('template/header', $data);
        $this->view('template/navigator', $data);
        $this->view('profiles/user', $data);
        $this->view('template/footer');
    }
    public function update()
    {
        session_start();
        $result = $this->model('Users_model')->update($_SESSION['id'],$_POST);
            if($result > 0 ){
                $_SESSION['username'] = $_POST['username'];
                echo "
                <script>
                    alert('Berhasil diubah!');
                    document.location.href = '".BASEURL."profiles/user/".$_POST['username']."/".$_SESSION['id']."';
                    </script>
                ";
            } else {
                echo "
                <script>
                    alert('Gagal diubah, silakan periksa kembali!');
                    document.location.href = '".BASEURL."profiles/user/".$_POST['username']."/".$_SESSION['id']."';
                    </script>
                ";
            }
    }

    public function deletephoto()
    {
        session_start();
        // clear photo profile
        if(isset($_POST['delete_photo'])){
            $photo = 'user.jpg';
            $this->model('Users_model')->updatePhoto($_SESSION['id'], $photo);
            header('Location: '.BASEURL.'profiles');
            exit;
        } else {
            echo "
                <script>
                    alert('Gagal menghapus foto!');
                    </script>
                ";
        }
    }
    
}


?>