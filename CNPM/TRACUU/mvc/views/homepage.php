<!--  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>

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
                    <a class="nav-link" href="/CNPM/TRACUU/Home/SayHi">Trang chủ</a>
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
                            <a class="dropdown-item" href="#">Tra cứu vị thuốc</a>
                            <a class="dropdown-item" href="#">Tra cứu dược liệu</a>
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
            <?php
                if(!empty($data['check'])){
                    require_once("./mvc/views/includes/".$data['check'].".php");
                } 
            ?>
        </div>
    </nav>
    <div class="container">
        <div class="row my-3 mx-auto">
            
            <div class="col-12 col-lg-12 row m-0 p-0 pr-lg-3">
                <div id="carouselExampleIndicators" class="carousel slide col-12 p-0 mt-3 m-lg-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="https://sieuthithuocviet.edu.vn/wp-content/uploads/2020/02/c%C3%A2y-n%C3%A0ng-n%C3%A0ng-e1581739755118.jpg" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://yte123.com/wp-content/uploads/2018/07/18-0-1414381572407.jpg" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="https://genkstf.vn/wp-content/uploads/2022/01/cay-thuoc-nam-chua-phu-chan-1.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            


                
                <div class="container px-4 py-5" id="featured-3">
                    <h2 class="pb-2 border-bottom" style="color: red">Dược liệu <a class="more-list-index" href="#" title="Dược liệu">Xem tất cả</a></h2>                    
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                        

                    <?php
            //   $sql = "SELECT * from caythuoc
            //             where Loai='dược liệu'";
            //   $result = $conn->query($sql);
            if(!empty($data['duoclieu'])){
                    $result = $data['duoclieu'];
                    if ($result->num_rows > 0) { ?>
                  <?php while ($row = $result->fetch_assoc()) { ?>

                    <div class="col-12 col-md-6 pt-3 col-lg-3 p-0 pr-lg-1 pr-md-2" >
                            <div class="card h-100">
                                <div class="text-center">
                                    <img class="card-img-top" src="<?= $row['hinh'] ?>" alt="Card image cap">
                                </div>
                                <div class="card-body">
                                    <h3 class="card-title">
                                        <a href="/CNPM/TRACUU/Home/Info/<?php echo $row['id']?>"  class="card-link" name = "<?= $row['Ten'] ?>"><?= $row['Ten'] ?></a>
                                    </h3>
                                    
                                </div>
                                
                            </div>
                        </div>


                      
              <?php }
              } else {
                  echo "<script>alert('Bảng chưa có dữ liệu')</script>";
              } 
            }
            ?>
                    </div>
                </div>

                <div class="container px-4 py-5" id="featured-3">
                    <h2 class="pb-2 border-bottom" style="color: red">Vị thuốc <a class="more-list-index" href="#" title="Vị thuốc">Xem tất cả</a></h2>                    
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                        

                    <?php
              
              if(!empty($data['vithuoc'])){
                $result = $data['vithuoc'];
                if ($result->num_rows > 0) { ?>
              <?php while ($row = $result->fetch_assoc()) { ?>

                <div class="col-12 col-md-6 pt-3 col-lg-3 p-0 pr-lg-1 pr-md-2" >
                        <div class="card h-100">
                            <div class="text-center">
                                <img class="card-img-top" src="<?= $row['hinh'] ?>" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">
                                    <a href="/CNPM/TRACUU/Home/Info/<?php echo $row['id']?>"  class="card-link" name = "<?= $row['Ten'] ?>"><?= $row['Ten'] ?></a>
                                </h3>
                                
                            </div>
                            
                        </div>
                    </div>


                  
          <?php }
          } else {
              echo "<script>alert('Bảng chưa có dữ liệu')</script>";
          } 
        }
        ?>
                    </div>
                </div>
            </div>

            



            
        
      
	</div>

        

</div>    
    

</body>
</html>