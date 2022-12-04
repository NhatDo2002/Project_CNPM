<?php 
    class Tree extends DB{
        public function getAllTree(){
            $sql = "SELECT * FROM caythuoc";
            return mysqli_query($this->conn,$sql);
        }

        public function insertTree($name, $loai, $des, $image){
            if(empty($name) || empty($des) || empty($image) || empty($loai)){
                return "<p> Vui lòng điền đầy đủ </p>";
            }
            $sql = "INSERT INTO caythuoc VALUES(null,'$name','$loai','$des','$image')";
            if(mysqli_query($this->conn,$sql)){
                header("Location: ./manageTree");
            }
        }

        public function getInfo($id){
            $sql = "SELECT * FROM caythuoc where id = '$id'";
            if(mysqli_query($this->conn,$sql)){
                return mysqli_query($this->conn,$sql);
            }
        }

        public function updateTree($id,$ten,$loai,$mota,$hinh){
            $sql = "UPDATE caythuoc set MoTa = '$mota', hinh = '$hinh', Ten = '$ten',Loai='$loai' where id = '$id'";
            if(mysqli_query($this->conn,$sql)){
                header("Location: ./manageTree");
            }else{
                alert("Cập nhật thất bại");
                header("Location: ./manageTree");
            }
        }

        public function deleteTree($id){
            $sql = "DELETE FROM caythuoc where id = '$id'";
            mysqli_query($this->conn,$sql);
        }

        public function searchTree($ten){
            $sql = "SELECT * FROM caythuoc where Ten like '%$ten%' or Ten like '% $ten'";
            if(mysqli_query($this->conn,$sql)){
                return (mysqli_query($this->conn,$sql));
            }
        }
        
    }
?>