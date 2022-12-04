<?php 
    class controllerHome extends Controller{
        protected $models;
        protected $views;

        public function __construct(){
            $this->models = $this->model('User');
        }

        public function SayHi(){
            $teo = $this->model("User");
            $this->views = $this->view('TestUser',[
                'user' => $teo->getUser()
            ]);
        }

        public function Show(){


            $this->view("loginUser",[
            ]);

        }

        public function login(){
            $this->views = $this->view('loginUser',[]);
            if(isset($_POST['btnLogin'])){
                $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                echo $this->models->checkUser($username,$password);
            }
        }

        public function register(){
            $this->views = $this->view('registerUser',[]);
            if(isset($_POST['btnReg'])){
                $username = isset($_POST['username']) ? trim($_POST['username']) : '';
                $password = isset($_POST['password']) ? trim($_POST['password']) : '';
                $repassword = isset($_POST['repassword']) ? trim($_POST['repassword']) : '';
                $ten = isset($_POST['hovaten']) ? trim($_POST['hovaten']) : '';
                $sdt = isset($_POST['sdt']) ? trim($_POST['sdt']) : '';
                $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                echo $this->models->checkRegister($username,$password,$repassword,$ten,$sdt,$email);
            }
        }

        public function logout(){
            unset($_SESSION['user']);
            header('Location: ./login');
        }
    }
?>