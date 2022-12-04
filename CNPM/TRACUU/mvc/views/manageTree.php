<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/adminPage.css">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/treeManagePage.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <title>Quản lý cây thuốc</title>
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
                <h3>Quản lý cây thuốc</h3>
                <p>Xin chào <span>Admin</span></p>
            </div>
            <div class="middle">
                <form action="/CNPM/TRACUU/Admin/searchTree" method="post">
                    <input type="search" name="searchTree" placeholder="Nhập tên cây cần tìm...">
                </form>
                <button class="add"><a href="/CNPM/TRACUU/Admin/addTree" style="color:black;">Thêm cây thuốc</a></button>
            </div>
            <div class="section">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Tên cây thuốc</th>
                            <th>Phân loại</th>
                            <th>Mô tả</th>
                            <th>Hình</th>
                            <th>Chỉnh sửa</th>
                            <th>Xóa bỏ</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if(!empty($data['search'])){
                            while($row = mysqli_fetch_array($data['search'])){
                                $tree = $row['id'];
                                echo "<tr>";
                                echo "<td>".$row['Ten']."</td>";
                                echo "<td>".$row['Loai']."</td>";
                                echo "<td class=\"des\">".$row['MoTa']."</td>";
                                echo "<td><img src=\"".$row['hinh']."\" width='100px' height='100px'></td>";
                                echo '<td><button class="edit"><a href="/CNPM/TRACUU/Admin/editTree/'.$tree.'">Chỉnh sửa</a></button></td>';
                                echo '<td><button class="deleteTree" id="'.$tree.'" href="/CNPM/TRACUU/Admin/deleteTree/'.$tree.'">Xóa bỏ</button></td>';
                                echo "</tr>";
                            }
                        }else
                        if(!empty($data['tree'])){
                            while($row = mysqli_fetch_array($data['tree'])){
                                $tree = $row['id'];
                                echo "<tr>";
                                echo "<td>".$row['Ten']."</td>";
                                echo "<td>".$row['Loai']."</td>";
                                echo "<td class=\"des\">".$row['MoTa']."</td>";
                                echo "<td><img src=\"".$row['hinh']."\" width='100px' height='100px'></td>";
                                echo '<td><button class="edit"><a href="/CNPM/TRACUU/Admin/editTree/'.$tree.'">Chỉnh sửa</a></button></td>';
                                echo '<td><button class="deleteTree" id="'.$tree.'" href="/CNPM/TRACUU/Admin/deleteTree/'.$tree.'">Xóa bỏ</button></td>';
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