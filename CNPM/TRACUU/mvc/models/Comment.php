<?php
    class Comment extends DB{
        public function getAllCom(){
            $sql = "SELECT * FROM comment";
            return mysqli_query($this->conn,$sql);
        }

        public function deleteCom($id){
            $sql = "DELETE FROM comment where id = '$id'";
            mysqli_query($this->conn,$sql);
        }

        public function searchCom($search){
            $sql = "SELECT * FROM comment where ten like '%$search%' or noidung like '% $search' or noidung like '$search %' or trangcaythuoc like '% $search' or trangcaythuoc like '$search %'";
            if(mysqli_query($this->conn,$sql)){
                return (mysqli_query($this->conn,$sql));
            }
        }

        public function catagoryCom($chucvu){
            $sql = "SELECT * FROM comment where chucvu = '$chucvu'";
            if(mysqli_query($this->conn,$sql)){
                return (mysqli_query($this->conn,$sql));
            }
        }
    }
?>  