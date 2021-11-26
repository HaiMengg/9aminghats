<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thông tin cá nhân</title>

        <base href="https://high-man.com">
        <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="resources/favicon/site.webmanifest">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/Profile_style_GH.css">
    </head>
    <body>
        <!--Connect to DB and use pHp functions-->
        <?php chdir($_SERVER['DOCUMENT_ROOT'] . "/"); ?>
        <?php include "php/php_functions.php"; ?>
        <!--Use custom JS functions-->
        <script type="text/javascript" src="js/js_function_AK.js"></script>
      
        <main class="container-fluid">
            <div class="row" id="main">
                <div class="col-sm-4" id="left-panel">
                    <a href="#">
                        <img src="resources/Library/logo.png" width="90%">
                    </a>
                    <div id="selection-tab">
                        <div class="tab">
                            <a class="select" href="#">
                                Thông tin cá nhân
                            </a>
                        </div>
                        <div class="tab">
                            <a class="select" href="#">
                                Danh sách yêu thích
                            </a>
                        </div>
                        <div class="tab">
                            <a class="select" href="#">
                                Nạp tiền
                            </a>
                        </div>
                        <div class="tab">
                            <a class="select" href="">
                                Thư viện game
                            </a>
                        </div>
                        <div class="tab">
                            <a class="select" href="#">
                                Lịch sử mua game
                            </a>
                        </div>
                    </div>
                    <div id="log-out">
                        <a id="btn" href="#">
                            Đăng xuất
                        </a>
                    </div>
                </div>
                <div class="col-sm-8" id="main-panel">
                    <div class="content">
                        <div class="row basic-info">
                            <div class="col-sm-5" id="username">
                                <div id="avt">
                                    <img src="resources/Profile/userAVT/avt-placeholder.png" width="100%">
                                </div>
                                <div id="name">
                                    <p>USERNAME</p>
                                </div>
                            </div>
                            <div class="col-sm-7" id="details">
                                <div class="info">
                                    <p id="email">example@something.com</p>
                                </div>
                                <div class="info">
                                    <p id="nationality">Quốc tịch: Việt Nam</p>
                                </div>
                            </div>
                        </div>
                        <div class="row balance-info">
                            <div class="col-sm-7" id="credit-card">
                                <div id="decoration">
                                    <div id="outer-circle">
                                        <div id="inner-circle">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" id="card-name">
                                    <div class="col-sm-2" id="card-logo">
                                        <img src="resources/Profile/card-logo.png" width="100%">
                                    </div>
                                    <div class="col-sm-10" id="card-rank">
                                        <span>
                                            Platinum
                                        </span>
                                    </div>
                                </div>
                                <div class="row" >
                                    <span id="card-number">
                                        XXXX XXXX XXXX XXXX
                                    </span>
                                </div>
                                <div class="row" id="card-footer">
                                    <div class="col-sm-5" id="bank-name">
                                        <span>ATM VIP</span>
                                        <br>
                                        <span>9amingHats</span>
                                    </div>
                                    <div class="col-sm-5" id="card-type">
                                        <span>VISA</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-5" id="wallet-balance">
                                <div class="row" id="heading">
                                    <span>Số dư:</span>
                                </div>
                                <div class="row">
                                    <span id="balance">1000000000</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <?php 
            $username = $_COOKIE['username'];
            if (!empty($username)) $userData = GetUserData($username);
        ?>

        <script>
            var username = "<?php echo $username ?>";
            if (username !== "") {
                var userData = <?php echo $userData ?>;
                DisplaySingleData("name", username);
                DisplaySingleData("email", userData[0]);
                DisplaySingleData("balance", userData[1]);
                var cardSerial = userData[2];
                cardSerial = cardSerial.replace(/[^a-zA-Z0-9]/g, "");
                cardSerial = cardSerial.substr(1, 4) + " " + cardSerial.substr(6, 4) + " " + cardSerial.substr(12, 4) + " " + cardSerial.substr(18, 4);
                cardSerial = cardSerial.toUpperCase();
                DisplaySingleData("card-number", cardSerial);
            }
            else {
                window.location.href = "pages/signin.php";
            }
        </script>
    </body>
</html>