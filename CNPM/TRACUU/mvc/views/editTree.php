<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/adminPage.css">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/edit.css">

    <title>Edit Tree</title>

</head>
<body>
    <div class="contain"> 
        <?php 
            require_once("./mvc/views/includes/sideBarAdmin.php");
        ?>
        <div class="content">
            <div class="header">
                <div></div>
                <h3>Quản lý cây thuốc</h3>
                <p>Xin chào <span>Admin</span></p>
            </div>
            <div class="section">
                <?php
                    if(!empty($data['info'])){
                        while($row = mysqli_fetch_array($data['info'])){
                ?>
                <h3 id ="tree"><b>Chỉnh sửa thông tin cây thuốc</b></h3>
                <form class="formEditTree" action="/CNPM/TRACUU/Admin/updateTree" method="Post">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <div class="form-group">
                        <label for="ten">Tên cây</label>
                        <input type="text" name="ten" value="<?php echo $row['Ten']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="loai">Phân loại</label>
                        <input type="text" name="loai" value="<?php echo $row['Loai']; ?>">
                    </div>
                    <label id="des" for="mota">Mô tả cây</label>
                    <textarea name = "mota" rows="4" cols="33"><?php echo $row['MoTa']; ?></textarea>
                    <!-- <div class="form-group">
                        <input type="text" name="mota" value="<?php echo $row['MoTa']; ?>">
                    </div> -->
                    <div class="form-group">
                        <label for="hinh">Hình</label>
                        <input type="text" name="hinh" value="<?php echo $row['hinh']; ?>">
                    </div>
                    <?php 
                        }
                    }
                    ?>
                    <div class="form-group">
                        <button type="submit" name="treeEdit">Cập nhật</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>