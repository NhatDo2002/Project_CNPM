<?php 
    class User extends DB{
        public function getUser(){
            $sql = "SELECT * FROM user";
            return mysqli_query($this->conn,$sql);
        }

        public function checkUser($user, $pass){
            if(empty($user) || empty($pass)){
                return "<p class='mess'>Vui lòng điền đầy đủ</p>";
            }

            $sql = "SELECT * FROM user where username = '$user'";
            $result = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($result) == 0){
                return "<p class='mess'> Tên đăng nhập không tồn tại </p>";
            }else{
                $row = mysqli_fetch_array($result);
                if($pass != $row['password']){
                    return "<p class='mess'> Mật khẩu không chính xác </p>";
                }
            }
            $_SESSION['user'] = $user;
            header('location: ./SayHi');
            return "Đăng nhập thành công";
        }

        public function checkRegister($user,$pass,$repass,$ten,$sdt,$email){
            if(empty($user) || empty($pass) || empty($repass) || empty($ten) || empty($sdt) || empty($email)){
                return "<p class='mess'>Vui lòng điền đầy đủ</p>";
            }

            if($pass != $repass){
                return "<p class='mess'>Hai mật khẩu không giống nhau</p>";
            }

            if(strlen($pass) < 6){
                return "<p class='mess'>Mật khẩu không đủ độ dài</p>";
            }

            $sql = "SELECT * FROM user WHERE username = '$user'";
            $result = mysqli_query($this->conn,$sql);
            if(mysqli_num_rows($result) == 0){
                $sql2 = "INSERT INTO user VALUES(null,'$user','$pass','$ten','$sdt','$email')";
                if(mysqli_query($this->conn,$sql2)){
                    header('location: ./login');
                }
            }else{
                return "<p class='mess'>Tên đăng nhập đã tồn tại</p>";
            }
        }

        public function getInfo($user){
            $sql = "SELECT * FROM user WHERE username = '$user'";
            if(mysqli_query($this->conn, $sql)){
                return mysqli_query($this->conn,$sql);
            }else{
                return false;
            }
        }

        public function updateUser($username, $ten, $sdt, $email){
            $sql = "UPDATE user set hoten = '$ten',sdt = '$sdt',email = '$email' where username = '$username'";
            if(mysqli_query($this->conn,$sql)){
                header("Location: ./manageUser");
            }else{
                alert("Cập nhật thất bại");
                header("Location: ./manageUser");
            }
        }

        public function delUser($user){
            $sql = "DELETE FROM user WHERE username = '$user'";
            if(mysqli_query($this->conn,$sql)){};
        }

        public function searchUser($ten){
            $sql = "SELECT * FROM user where hoten like '%$ten%'";
            if(mysqli_query($this->conn,$sql)){
                return (mysqli_query($this->conn,$sql));
            }
        }
    }
?>