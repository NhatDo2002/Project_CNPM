<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/formPage.css">
    <title>Register</title>
</head>
<body>
    <div class="formLogin" style="height:700px;">
        <h2>Đăng Ký</h2>
        <form action="/CNPM/TRACUU/Home/register" method="post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <input type="text" name="hovaten" placeholder="Họ và tên">
            </div>
            <div class="form-group">
                <input type="number" name="sdt" placeholder="Số điện thoại">
            </div>
            <div class="form-group">
                <input type="mail" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <input type="password" name="repassword" placeholder="Nhập lại mật khẩu">
            </div>
            <div class="form-group">
                <button type="submit" name="btnReg">Đăng ký</button>
            </div>
            <div class="bottom register">
                <a href="/CNPM/TRACUU/Home/SayHi" class="bottom-left">Trang chủ</a>
                <a href="/CNPM/TRACUU/Home/login" class="bottom-right">Đăng nhập</a>
            </div>
        </form>
    </div>
    
</body>
</html>