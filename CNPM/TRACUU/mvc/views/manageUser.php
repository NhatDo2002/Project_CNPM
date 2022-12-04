<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/adminPage.css">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/UserManagePage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <title>Manage User</title>

</head>
<body>
    <div class="contain"> 
        <?php 
            require_once("./mvc/views/includes/sideBarAdmin.php");
        ?>
        <div class="content">
            <div class="header">
                <div></div>
                <h3>Quản lý người dùng</h3>
                <p>Xin chào <span>Admin</span></p>
            </div>
            <form action="/CNPM/TRACUU/Admin/searchUser" method="post">
                <input class="searchUser" name="searchUser" type="search" placeholder="Nhập tên người dùng cần tìm...">
            </form>
            <div class="section">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Họ và tên</th>
                            <th>Số điện thoại</th>
                            <th>Email</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa bỏ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            if(!empty($data['search'])){
                                while($row = mysqli_fetch_array($data['search'])){
                                    $user = $row['username'];
                                    echo "<tr>";
                                    echo "<td>".$row['hoten']."</td>";
                                    echo "<td>".$row['sdt']."</td>";
                                    echo "<td>".$row['email']."</td>";
                                    echo '<td><button class="edit"><a href="/CNPM/TRACUU/Admin/editUser/'.$row['username'].'">Chỉnh sửa</a></button></td>';
                                    echo '<td><button class="delete" id="'.$row['username'].'" href="/CNPM/TRACUU/Admin/deleteUser/'.$row['username'].'">Xóa bỏ</button></td>';
                                    echo "</tr>";
                                }
                            }else
                            if(!empty($data['user'])){
                                while($row = mysqli_fetch_array($data['user'])){
                                    $user = $row['username'];
                                    echo "<tr>";
                                    echo "<td>".$row['hoten']."</td>";
                                    echo "<td>".$row['sdt']."</td>";
                                    echo "<td>".$row['email']."</td>";
                                    echo '<td><button class="edit"><a href="/CNPM/TRACUU/Admin/editUser/'.$row['username'].'">Chỉnh sửa</a></button></td>';
                                    echo '<td><button class="delete" id="'.$row['username'].'" href="/CNPM/TRACUU/Admin/deleteUser/'.$row['username'].'">Xóa bỏ</button></td>';
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