<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>User</h1>
    <?php
        if(isset($_SESSION['user'])){
            echo "<p>".$_SESSION['user']."</p>";
            while($row = mysqli_fetch_array($data["user"])){
                echo $row["username"];
            }
        }
    ?>
    <a href="/CNPM/TRACUU/Home/logout">Đăng xuất</a>
</body>
</html>