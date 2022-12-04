<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/adminPage.css">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/edit.css">

    <title>Edit User</title>

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
            <div class="section">
                <?php
                    if(!empty($data['info'])){
                        while($row = mysqli_fetch_array($data['info'])){
                ?>
                <h3>Chỉnh sửa thông tin khách hàng</h3>
                <form class="formEdit" action="/CNPM/TRACUU/Admin/updateUser" method="Post">
                    <input type="hidden" name="username" value="<?php echo $row['username']; ?>">
                    <div class="form-group">
                        <label for="hoten">Họ và tên</label>
                        <input type="text" name="hoten" value="<?php echo $row['hoten']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="sdt">Số điện thoại</label>
                        <input type="number" name="sdt" value="<?php echo $row['sdt']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="<?php echo $row['email']; ?>">
                    </div>
                    <?php 
                        }
                    }
                    ?>
                    <div class="form-group">
                        <button type="submit" name="btnEdit">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>