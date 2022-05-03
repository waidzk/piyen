<?php 
class Feeds extends Controller{
    public function index()
    {
        session_start();
        if(!isset($_SESSION['login'])){
            header('Location: '. BASEURL .'login');
            exit;
        }
        $data['feeds'] = $this->model('Feeds_model')->getAllFeeds();
        $data['comments'] = $this->model('Comments_model')->getComments();
        $data['title'] = 'Feeds - ';
        $this->view('template/navigator', $data);
        $this->view('feeds/index', $data);
        $this->view('template/footer');
    }
    public function add()
    {
        session_start();
        if (isset($_POST['make'])){
            // available extensions
            $extensions	= array('png','jpg');
            //get name of photo files
            $photo = $_FILES['feedPhoto']['name'];
            $photo_extension = explode('.', $photo);
            $extension = strtolower(end($photo_extension));
            // size of file
            $size	= $_FILES['feedPhoto']['size'];
            // tmp of photo file
            $file_tmp = $_FILES['feedPhoto']['tmp_name'];

            move_uploaded_file($file_tmp, __DIR__.'/../assets/img/feeds/'.$photo);
            $this->model('Feeds_model')->addFeed($_SESSION['id'], $_POST['feedValue'], $photo);
            header('Location: '.BASEURL.'feeds');
            exit;
        } else {
            echo "
                <script>
                    alert('Gagal membuat feed!');
                    </script>
                ";
        }
    }

    public function delete($url)
    {
        session_start();
        $this->model('Feeds_model')->deleteFeed($url); 
        header('Location: '.BASEURL.'profiles/user/'.$_SESSION['username']);
        exit;
    }
}


?>