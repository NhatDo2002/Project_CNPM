<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="/CNPM/TRACUU/assets/css/formLoginAd.css">
    <title>Login</title>
</head>
<body>
    <div class="adminLogin">
        <h2>Đăng nhập</h2>
        <form action="/CNPM/TRACUU/Admin/loginAd" method="Post">
            <div class="form-group">
                <input type="text" name="username" placeholder="Tên đăng nhập">
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Mật khẩu">
            </div>
            <div class="form-group">
                <button type="submit" name="btnLoginAd">Đăng nhập</button>
            </div>
        </form>
    </div>
</body>
</html>