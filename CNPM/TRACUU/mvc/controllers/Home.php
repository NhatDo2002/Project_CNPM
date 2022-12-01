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
                echo $this->models->checkRegister($username,$password,$repassword);
            }
        }
    }
?>