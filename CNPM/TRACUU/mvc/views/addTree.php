<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/adminPage.css">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/edit.css">

    <title>Add Tree</title>

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
                <h3 id ="tree">Thêm cây thuốc mới</h3>
                <form class="formEditTree" action="/CNPM/TRACUU/Admin/addTree" method="Post">
                    <div class="form-group">
                        <label for="ten">Tên cây</label>
                        <input type="text" name="ten">
                    </div>
                    <div class="form-group">
                        <label for="loai">Phân loại</label>
                        <input type="text" name="loai">
                    </div>
                    <label id="des" for="mota">Mô tả cây</label>
                    <textarea name = "mota" rows="4" cols="33"></textarea>
                    <div class="form-group">
                        <label for="hinh">Hình</label>
                        <input type="text" name="hinh">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="treeAdd">Thêm cây</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>