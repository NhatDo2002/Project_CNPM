<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db ="quanlyhethong";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $db);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  // echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang tìm kiếm</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="script/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="script/jquery-ui-1.8.1.custom.min.js"></script>
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/home.css" type="text/css">

</head>
<body>
    

    <div class="bg">
        <img src="/CNPM/TRACUU/assets/images/background.webp" alt="">
      </div> 
    
    


    <nav class="navbar navbar-expand-sm navbar-dark bg-info">

        <div class="container">
            <div class="navbar-header">
                <img class="logo" src="/CNPM/TRACUU/assets/images/logo1.png">
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                    <a class="nav-link" href="SayHi">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Giới thiệu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#">Bài thuốc hay</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            Danh sách cây thuốc
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Tra cứu theo cây</a>
                            <a class="dropdown-item" href="#">Tra cứu theo bệnh</a>
                            <a class="dropdown-item" href="#">Tra cứu theo bài thuốc</a>
                        </div>
                    </div>
                  </li>

              </ul>

              
              <form class="d-flex" action="Search" method="post">
		        <input class="search-box form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
		        <button class="btn btn-outline-dark" type="submit">Tìm kiếm</button>
		      </form>
            </div>
            <div class="navbar-header-user dropdown">
            <img class="user-avatar dropdown-toggle" id="user-avatar" data-toggle="dropdown" src="https://www.nicepng.com/png/detail/367-3671905_person-icon-person-icon-silhouette.png">
                <div class="dropdown-menu">
                    <div class="user-item">
                        <a href="/sua-thong-tin">
                        <i class="fas fa-edit"></i>
                        Sửa thông tin
                        </a>
                    </div>
                    <div class="user-item">
                        <a href="/doi-mat-khau">
                        <i class="fas fa-unlock"></i>
                        Đổi mật khẩu
                        </a>
                    </div>
                    <hr>
                    <div class="logout user-item" id="logout">
                        <a href="welcome/logout">
                        <i class="bi bi-power"></i>
                        Đăng xuất
                    </div>
                </div>
            </div>
        </div>
    </nav>
    
    
        
        <div class="container px-4 py-5" id="featured-3">
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <?php

                        $search = $_POST['search'];


                        $sql = "select * from caythuoc where Ten like '%$search%' or Loai like '%$search%' or MoTa like '%$search%'";
                        

                        $result = $conn->query($sql);

                        $num_rows = mysqli_num_rows($result);
                        ?>
                        <!-- <div style="z-index:999;">
                            <p style="color:white;"><strong></strong> results for '' </br></p>
                        </div> -->
                    <?php     
                        if ($result->num_rows > 0){  
                            while($row = $result->fetch_assoc() ){
                            ?>
                            
                                <div class="col-12 col-md-6 pt-3 col-lg-3 p-0 pr-lg-1 pr-md-2">
                                            <div class="card h-100">
                                                <div class="text-center">
                                                    <img class="card-img-top" src="<?= $row['hinh'] ?>" alt="Card image cap">
                                                </div>
                                                <div class="card-body">
                                                    <h3 class="card-title">
                                                        <a href="/CNPM/TRACUU/Home/Info/<?php echo $row['id']?>" class="card-link"><?= $row['Ten'] ?></a>
                                                    </h3>
                                                    
                                                </div>
                                                
                                            </div>
                                        </div>
                            <?php
                        }
                        } else {
                            echo "<p style=\"z-index:999;color:white;\">Không có cây thuốc cần tìm</p>";
                        }

                        $conn->close();

                        ?>

                    </div>
        </div>
    
    <!-- <footer>
        <div class="text-center p-4 text-light mt-3" style="background-color: rgba(0, 0, 0, 0.8);">
            Copyright © Your Website 2017
        </div>
    </footer> -->
</body>
</html>