<?php 
    class controllerHome extends Controller{
        protected $models;
        protected $views;
        protected $modelTree;
        


        public function __construct(){
            $this->models = $this->model('User');
            $this->modelTree = $this->model('Tree');
        }

        public function SayHi(){
            if(isset($_SESSION['user'])){
                $this->views = $this->view('homepage',[
                    'duoclieu' => $this->modelTree->catagoryTree("dược liệu"),
                    'vithuoc' => $this->modelTree->catagoryTree("vị thuốc"),
                    'check' => 'login'
                ]);
            }else{
                $this->views = $this->view('homepage',[
                    'duoclieu' => $this->modelTree->catagoryTree("dược liệu"),
                    'vithuoc' => $this->modelTree->catagoryTree("vị thuốc"),
                    'check' => 'unlogin'
                ]);
            }
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

        public function Search(){
            $teo = $this->model("User");
            $this->views = $this->view('searchpage',[
                'duoclieu' => $teo->getUser()

            ]);
        }

        public function Info($tree){
            if(isset($_SESSION['user'])){
                $this->views = $this->view('caythuoc',[
                    'tree' => $this->modelTree->getInfo($tree),
                    'check' => 'login'
                ]);
            }else{
                $this->views = $this->view('caythuoc',[
                    'tree' => $this->modelTree->getInfo($tree),
                    'check' => 'unlogin'
                ]);
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
            header('Location: ./SayHi');
        }

        public function changePass(){
            $this->views = $this->view('changePass',[]);
            if(isset($_POST['btnChange'])){
                $pass = isset($_POST['pass']) ? trim($_POST['pass']) : '';
                $newpass = isset($_POST['newpass']) ? trim($_POST['newpass']) : '';
                $repass = isset($_POST['repass']) ? trim($_POST['repass']) : '';
                echo $this->models->checkChange($pass,$newpass,$repass);
            }
        }
    }
?>