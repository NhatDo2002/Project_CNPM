<?php
    class Admin extends DB{
        public function getAdmin(){
            $sql = "SELECT * FROM admin";
            return mysqli_query($this->conn, $sql);
        }

        public function checkAdmin($user, $pass){
            if(empty($user) || empty($pass)){
                return "<p class='mess'>Vui lòng điền đầy đủ</p>";
            }

            $sql = "SELECT * FROM admin where username = '$user'";
            $result = mysqli_query($this->conn, $sql);
            if(mysqli_num_rows($result)==0){
                return '<p class="mess">Tên đăng nhập không đúng</p>';
            }else{
                $row = mysqli_fetch_array($result);
                if($pass != $row['password']){
                    return '<p class="mess">Mật khẩu không chính xác</p>';
                }
            }
            $_SESSION['admin'] = $user;

            header('Location: ./show');
            return "Đăng nhập thành công";
        }

        public function getUsername($username){
            $sql = "SELECT * FROM admin where username = '$username'";
            if(mysqli_query($this->conn,$sql)){
                return mysqli_query($this->conn,$sql);
            }else{
                return fasle;
            }
        }
        
    }
?>