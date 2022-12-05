<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/formPage.css">
    <title>Login</title>
</head>
<body>
    <div class="formLogin">
        <h2>Đổi mật khẩu</h2>
        <form action="/CNPM/TRACUU/Home/changePass" method="post">
            <div class="form-group">
                <input type="password" name="pass" placeholder="Mật khẩu cũ">
            </div>
            <div class="form-group">
                <input type="password" name="newpass" placeholder="Mật khẩu mới">
            </div>
            <div class="form-group">
                <input type="password" name="repass" placeholder="Nhập lại mật khẩu mới">
            </div>
            <div class="form-group">
                <button type="submit" name="btnChange">Đổi mật khẩu</button>
            </div>
        </form>
    </div>
    
</body>
</html>