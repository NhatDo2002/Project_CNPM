<?php 
    class controllerAdmin extends Controller{
        protected $modelUser;
        protected $views;
        protected $modelAdmin;
        protected $modelTree;
        protected $modelCom;

        public function __construct(){
            $this->modelUser = $this->model('User');
            $this->modelAdmin = $this->model('Admin');
            $this->modelTree = $this->model('Tree');
            $this->modelCom = $this->model('Comment');
        }
        //-----------Trang chủ-------------------------------
        public function show(){
            $this->views = $this->view('homeAdmin',[]);
        }
        //------------Đăng nhập/Đăng xuất---------------------
        public function loginAd(){
            $this->view("loginAdmin",[]);
            if(isset($_POST['btnLoginAd'])){
                $user = isset($_POST['username']) ? trim($_POST['username']) : '';
                $pass = isset($_POST['password']) ? trim($_POST['password']) : '';
                echo $this->modelAdmin->checkAdmin($user,$pass);
            }
        }



        public function logoutAd(){
            unset($_SESSION['admin']);
            $this->views = $this->view('loginAdmin',[]);
        }

        //----------------Người dùng-----------------------
        public function manageUser(){
                $this->views = $this->view('manageUser',[
                    'username' => $this->modelAdmin->getUsername("admin"),
                    'user' => $this->modelUser->getUser()
                ]);
        }

        public function editUser($user){
            $this->views = $this->view("editUser",[
                "info" => $this->modelUser->getInfo($user),
            ]);
        }

        public function updateUser(){
            if(isset($_POST["btnEdit"])){
                $user = isset($_POST['username']) ? trim($_POST['username']) : '';
                $ten = isset($_POST['hoten']) ? trim($_POST['hoten']) : '';
                $sdt = isset($_POST['sdt']) ? trim($_POST['sdt']) : '';
                $email = isset($_POST['email']) ? trim($_POST['email']) : '';
                echo $this->modelUser->updateUser($user,$ten,$sdt,$email);
            }
        }

        public function deleteUser($user){
            echo $this->modelUser->delUser($user);
        }

        public function searchUser(){
            if(isset($_POST['searchUser'])){
                $user = isset($_POST['searchUser']) ? trim($_POST['searchUser']) : '';
            }
            $this->views = $this->view('manageUser',[
                'search' => $this->modelUser->searchUser($user)
            ]);
        }
        //-----------------Cây thuốc--------------------
        public function manageTree(){
            $this->views = $this->view('manageTree',[
                'username' => $this->modelAdmin->getUsername("admin"),
                'tree' => $this->modelTree->getAllTree()
            ]);
        }


        public function editTree($tree){
            $this->views = $this->view("editTree",[
                "info" => $this->modelTree->getInfo($tree)
            ]);
        }

        public function updateTree(){
            if(isset($_POST["treeEdit"])){
                $id = isset($_POST['id']) ? trim($_POST['id']) : '';
                $ten = isset($_POST['ten']) ? trim($_POST['ten']) : '';
                $loai = isset($_POST['loai']) ? trim($_POST['loai']) : '';
                $mota = isset($_POST['mota']) ? trim($_POST['mota']) : '';
                $hinh = isset($_POST['hinh']) ? trim($_POST['hinh']) : '';
                echo $this->modelTree->updateTree($id,$ten,$loai,$mota,$hinh);
            }
        }

        public function deleteTree($id){
            echo $this->modelTree->deleteTree($id);
        }

        public function addTree(){
            $this->views = $this->view('addTree',[]);
            if(isset($_POST['treeAdd'])){
                $ten = isset($_POST['ten']) ? trim($_POST['ten']) : '';
                $loai = isset($_POST['loai']) ? trim($_POST['loai']) : '';
                $mota = isset($_POST['mota']) ? trim($_POST['mota']) : '';
                $hinh = isset($_POST['hinh']) ? trim($_POST['hinh']) : '';
                echo $this->modelTree->insertTree($ten,$loai,$mota,$hinh);
            }
        }

        public function searchTree(){
            if(isset($_POST['searchTree'])){
                $ten = isset($_POST['searchTree']) ? trim($_POST['searchTree']) : '';
            }
            $this->views = $this->view('manageTree',[
                'search' => $this->modelTree->searchTree($ten)
            ]);
        }
        //--------------Comment-----------------------------
        public function manageCom(){
            $this->views = $this->view('manageComment',[
                'comment' => $this->modelCom->getAllCom()
            ]);
        }

        public function deleteCom($com){
            echo $this->modelCom->deleteCom($com);
        }

        public function searchCom(){
            if(isset($_POST['searchCom'])){
                $search = isset($_POST['searchCom']) ? trim($_POST['searchCom']) : '';
            }
            $this->views = $this->view('manageComment',[
                'search' => $this->modelCom->searchCom($search)
            ]);
        }

        public function catagory(){
            if(isset($_POST['userCom'])){
                $chucvu = 'Người dùng';
            }else if(isset($_POST['adminCom'])){
                $chucvu = 'Quản lý';
            }
            $this->views = $this->view('manageComment',[
                'catagory' => $this->modelCom->catagoryCom($chucvu)
            ]);
        }
    }
?>