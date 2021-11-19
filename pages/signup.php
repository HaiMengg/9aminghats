<!DOCTYPE html>
<html>
    <head>
        <title>Đăng ký | 9aminghats</title>
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
                <div class="row" style="margin: 2% 0% 2% 0%"><h1><b>Đăng Kí Tài Khoản</b></h1></div>
                <div class="row" style="margin: 2% 0% 2% 0%">
                    <form">
                        <h4><b>Họ và tên</b></h4>
                        <div class="input-container input row">
                            <input type="text" name="name" placeholder="Họ và tên của bạn" style="width: 98%;"/>
                        </div>
                         <h4><b>Ngày sinh</b></h4>
                        <div class="input-container input row">
                            <input type="date" name="DOB" placeholder="01/01/2021" style="width: 98%;"/>
                        </div>
                        <h4><b>Email</b></h4>
                        <div class="input-container input row">
                            <input type="email" name="email" placeholder="Email của bạn" style="width: 98%;"/>
                        </div>
                        <h4><b>Tên đăng nhập</b></h4>
                        <div class="input-container input row">
                            <input type="text" name="user_name" placeholder="Tên đăng nhập" style="width: 98%;"/>
                        </div>
                        <h4><b>Mật khẩu</b></h4>
                        <div class="input-container input row">
                            <input type="password" name="password" placeholder="Mật khẩu của bạn" style="width: 98%;"/>
                        </div>
                        <h4><b>Xác nhận mật khẩu</b></h4>
                        <div class="input-container input row">
                            <input type="password" name="password" placeholder="Nhập lại mật khẩu" style="width: 98%;"/>
                        </div>
                        <div class="input-container inline">
                            <input type="checkbox" name="remember_password"/>
                            <label for="accept" style="margin-left: 10px; font-size: large;">Đồng ý với <a href="../pages/terms.php" style="color: white;" target="_blank">điều khoản dịch vụ</a> của chúng tôi.</label>
                        </div>
                        <button type="submit" class="sub"><b>Đăng ký</b></button>
                        <div class="row text-center inline" style="font-size: large;">
                            Bạn đã có tài khoản?
                            <a href="../pages/signin.php" style="color: white;">Đăng nhập tại đây</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>