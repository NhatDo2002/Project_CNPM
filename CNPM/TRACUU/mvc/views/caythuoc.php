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
    <title>Document</title>

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
                            <a class="dropdown-item" href="#">Tra cứu theo cây</a>
                            <a class="dropdown-item" href="#">Tra cứu theo bệnh</a>
                            <a class="dropdown-item" href="#">Tra cứu theo bài thuốc</a>
                        </div>
                    </div>
                  </li>

              </ul>

              
              <form class="d-flex" action="../Search" method="post">
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


    <?php


                    if(!empty($data['tree'])){
                        $result = $data['tree'];
                        $row = $result->fetch_assoc();
                    
                        ?>

        

    <div class="container"  >
        <div class="row my-3 mx-auto">
            
            <div class="col-3 col-lg-9 row m-0 p-0 pr-lg-3" id="detail" style="background-color: white">
                <img class="left-content" src="<?= $row['hinh'] ?>" alt="Card image cap">
                <div class="right-content">
                <h2>
                       <p style="color: red">Tên:</p> <?= $row['Ten'] ?>
                       <h3>
                       <p style="color: red">
                       Phân loại:
                    </p> <?= $row['Loai'] ?>
                        </h3>
                </h2>
                </div>
                


                
                

                <div class="container px-4 py-5" id="featured-3">
                    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <h3>
                    <p style="color: red">
                        Công dụng:
                    </p> <?= $row['MoTa'] ?>
                    </h3>
                    </div>
                </div>


                <!-- comment -->

                <div id="respond" class="comment-respond"> 
                    <h3 id="reply-title" class="comment-reply-title">
                        <span>Câu hỏi của bạn</span> 
                        <small><a rel="nofollow" id="cancel-comment-reply-link" href="/kho-qua-vt.html#respond" style="display:none;">Hủy</a></small>
                    </h3> 
                    <form action="https://tracuuduoclieu.vn/wp-comments-post.php" method="post" id="commentform" class="comment-form" novalidate=""> 

                    </form>
                    <form action="https://tracuuduoclieu.vn/wp-comments-post.php" method="POST" enctype="multipart/form-data" id="attachmentForm" class="comment-form" novalidate="">
                            <div class="popup-comment">
                                <div class="box-comment">
                                    <span class="close-popup-comment">X</span>
                                    <p>Bạn vui lòng <a>đăng nhập</a>/đăng ký để nhận tư vấn!</p>                            
                                </div>
                            </div>
                        
                        
                        <p class="comment-form-comment">
                            <textarea id="comment" name="comment" cols="45" rows="8" class="form" tabindex="4" aria-required="true" placeholder="Câu hỏi của bạn">
                            </textarea>
                        </p>
                        <p class="form-submit">
                            <input name="submit" type="submit" id="submit" class="submit" value="Gửi bình luận"> 
                            <input type="hidden" name="comment_post_ID" value="50264" id="comment_post_ID">
                            <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                        </p> 
                    </form> 
                    <div class="commented-section mt-2">
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2">Trung</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">7 tiếng trước</span></div>
                        <div class="comment-text-sm"><span>Cho mình hỏi về cây thuốc này</span></div>
                        <div class="reply-section">
                            <div class="d-flex flex-row align-items-center voting-icons"><span class="dot ml-2"></span>
                                <h6 class="ml-2 mt-1">Reply</h6>
                            </div>
                        </div>
                    </div>
                </div>
    <!-- /.
                


            </div>
        <?php 
        }
        ?>
            



            

 
	</div>
    
    
        
        
    
    <footer>
        <div class="text-center p-4 text-light mt-3" style="background-color: rgba(0, 0, 0, 0.8);">
            Copyright © Your Website 2017
        </div>
    </footer>
</body>
</html>