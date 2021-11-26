<!DOCTYPE html>
<html>
    <head>
        <title>Lấy lại mật khẩu | 9amingHats</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="https://high-man.com/">
        <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="resources/favicon/site.webmanifest">
        <link rel="stylesheet" href="resources\plugins\bootstrap\bootstrap-5.1.3-dist\css\bootstrap.css">
        <script src="resources\plugins\jQuery\jquery-3.6.0.js"></script>
        <script src="resources\plugins\bootstrap\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
        <link rel="stylesheet" href="css/signin_MH.css">
    </head>
    <body>
        <!--Use custom JS functions-->
        <script type="text/javascript" src="js/js_function_AK.js"></script>

        <div class="row" style="height:100%;">
            <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="rocket">
                <div class="row" id="logo">
                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                        <a href="index.php"><img src="resources/Homepage/main_nav/logo/logo.png"></a>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7"></div>
                </div>            
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" id="content" style="padding: 10% 5% 10% 5%; align-items: center;">
                <div class="row" style="margin: 5% 0% 5% 0%"><h1><b>Lấy Lại Mật Khẩu</b></h1></div>
                <div class="row" id="password_notif" style="display: none"></div>
                <div class="row" style="margin: 5% 0% 5% 0%">
                    <form id="password_form" action="javascript:ProcessPasswordResetEmail();">
                        <div class="input-container input row">
                        <input type="text" name="email" placeholder="Nhập vào email bạn đã đăng ký" style="width: 98%;"/>
                        </div>
                        <button type="submit" class="sub">Gửi</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>