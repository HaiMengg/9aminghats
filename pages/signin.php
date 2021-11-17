<!DOCTYPE html>
<html>
    <head>
        <title>Sign in</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" sizes="180x180" href="../resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="../resources/favicon/site.webmanifest">
        <link rel="stylesheet" href="..\resources\plugins\bootstrap\bootstrap-5.1.3-dist\css\bootstrap.css">
        <script src="..\resources\plugins\jQuery\jquery-3.6.0.js"></script>
        <script src="..\resources\plugins\bootstrap\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
        <link rel="stylesheet" href="../css/signin_MH.css">
    </head>
    <body>
      <div class="row" style="height:100%;">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="rocket">
                <div class="row" id="logo">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <a href="../index.php"><img src="../resources/Homepage/main_nav/logo/logo.png"></a>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"></div>
                </div>            
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" id="content">
                <div class="row" style="margin: 5% 0% 15% 0%"><h1><b>Đăng Nhập</b></h1></div>
                <div class="row" style="margin: 5% 0% 5% 0%">
                    <form">
                        <h3><b>Email</b></h3>
                        <div class="input-container input row">
                            <img src="../resources/signin/email.png">
                            <input type="email" name="email" placeholder="Email đã dùng để đăng ký"/>
                        </div>
                        <br>
                        <h3><b>Mật khẩu</b></h3>
                        <div class="input-container input row">
                            <img src="../resources/signin/password.png">
                            <input type="password" name="password" placeholder="Mật khẩu"/>
                        </div>
                        <br>
                        <div class="input-container">
                            <input type="checkbox" name="remember_password"/>
                            <label for="remember_password" style="margin-left: 10px; font-size: x-large;"><b>Nhớ mật khẩu</b></label>
                        </div>
                        <button type="submit" class="sub"><b>Đăng nhập</b></button>
                    </form>
                </div>
                <div class="row text-center inline" style="font-size: large;">
                    Bạn chưa có tài khoản?
                    <a href="../pages/signup.php" style="color: white;">Đăng ký</a>
                </div>
                 <div class="row text-center inline" style="font-size: large;">
                    <a href="../pages/forgotpassword.php" style="color: white;">Bạn quên mật khẩu?</a>
                </div>
            </div>
        </div>
    </body>
</html>