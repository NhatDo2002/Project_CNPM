<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/adminPage.css">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/commentManagePage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <title>Quản lý bình luận</title>
</head>
<body>
    <div class="contain">
        <div class="test">
        <?php 
            require_once("./mvc/views/includes/sideBarAdmin.php");
        ?>
        </div>
        <div class="content">
            <div class="header">
                <div></div>
                <h3>Quản lý bình luận</h3>
                <p>Xin chào <span>Admin</span></p>
            </div>
            <div class="middle">
                <form action="/CNPM/TRACUU/Admin/searchCom" method="post">
                    <input type="search" name="searchCom" placeholder="Nhập bình luận cần tìm...">
                </form>
                <form action="/CNPM/TRACUU/Admin/catagory" method="post">
                    <button class="userCom" name="userCom">Người dùng</button>
                    <button class="adminCom" name="adminCom">Quản lý</button>
                    <button class="allCom" name="all">Tất cả</button>
                </form>
            </div>
            <div class="section">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tên đăng nhập</th>
                            <th>Chức vụ</th>
                            <th>Trang cây thuốc</th>
                            <th>Nội dung</th>
                            <th>Ngày bình luận</th>
                            <th>Xóa bỏ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(!empty($data['search'])){
                            while($row = mysqli_fetch_array($data['search'])){
                                $comment = $row['id'];
                                echo "<tr>";
                                echo "<td>".$row['ten']."</td>";
                                echo "<td>".$row['chucvu']."</td>";
                                echo "<td>".$row['trangcaythuoc']."</td>";
                                echo "<td class=\"des\">".$row['noidung']."</td>";
                                echo "<td>".$row['ngaybl']."</td>";
                                echo '<td><button class="deleteCom" id="'.$comment.'" href="/CNPM/TRACUU/Admin/deleteTree/'.$comment.'">Xóa bỏ</button></td>';
                                echo "</tr>";
                            }
                        }else if(!empty($data['catagory'])){
                            while($row = mysqli_fetch_array($data['catagory'])){
                                $comment = $row['id'];
                                echo "<tr>";
                                echo "<td>".$row['ten']."</td>";
                                echo "<td>".$row['chucvu']."</td>";
                                echo "<td>".$row['trangcaythuoc']."</td>";
                                echo "<td class=\"des\">".$row['noidung']."</td>";
                                echo "<td>".$row['ngaybl']."</td>";
                                echo '<td><button class="deleteCom" id="'.$comment.'" href="/CNPM/TRACUU/Admin/deleteTree/'.$comment.'">Xóa bỏ</button></td>';
                                echo "</tr>";
                            }
                        }else
                        if(!empty($data['comment'])){
                            while($row = mysqli_fetch_array($data['comment'])){
                                $comment = $row['id'];
                                echo "<tr>";
                                echo "<td>".$row['ten']."</td>";
                                echo "<td>".$row['chucvu']."</td>";
                                echo "<td>".$row['trangcaythuoc']."</td>";
                                echo "<td class=\"des\">".$row['noidung']."</td>";
                                echo "<td>".$row['ngaybl']."</td>";
                                echo '<td><button class="deleteCom" id="'.$comment.'" href="/CNPM/TRACUU/Admin/deleteTree/'.$comment.'">Xóa bỏ</button></td>';
                                echo "</tr>";
                            }
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script src="/CNPM/TRACUU/assets/js/delete.js"></script>
</html>