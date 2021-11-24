<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Xác nhận thanh toán</title>
        <base href="https://high-man.com/">
        <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="resources/favicon/site.webmanifest">
        <script src="resources\plugins\bootstrap\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
        <script src="resources\plugins\jQuery\jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/payment_style_GH.css">
    </head>

    <body>
        <!--Connect to database-->
        <?php 
            chdir($_SERVER['DOCUMENT_ROOT'] . "/");
            include "php/php_functions.php";
            $conn = ConnectDB();
            $conn->set_charset("utf8mb4");
        ?>
        
        <!--Use custom JS functions-->
        <script type="text/javascript" src="js/js_function_AK.js"></script>
        <script src="js/payment_GH.js" defer></script>

        <main class="container-fluid">

            <?php
                $purchaseToken = $_GET['token'];
                $lookUpToken = FetchFromDB(ConnectDB(), "SELECT * FROM DB_PURCHASE WHERE `TOKEN`='$purchaseToken'")->num_rows;

                $gameNumcounter = $_GET['gamenum'];
                $gameMoney = CalculateMoney($gameNumcounter, $_COOKIE['username']);
            ?>
            <script>
                var purchaseToken = "<?php echo $purchaseToken ?>";
                var lookUpToken = "<?php echo $lookUpToken ?>";
                if (lookUpToken == 0) {
                    document.body.innerHTML = "<p style='color: red;'>Token không hợp lệ. Quá trình giao dịch đã bị dừng lại</p>";
                }

                var gameMoney = <?php echo $gameMoney ?>;
                var gameNumcounter = "<?php echo $gameNumcounter ?>";
            </script>

            <div id="main">
                <div class="row">
                    <a id="arrow" href="https://www.youtube.com/watch?v=b41yyHH6Cic">
                        <img src="resources/Payment/arrow.png">
                    </a>
                </div>
                <div class="row" id="payment-heading">
                    <h1 style="font-size: 50px;">
                        Xác nhận thanh toán
                    </h1>
                </div>
                <div class="row" id="payment-chose">
                    <div class="col-sm-6" id="give-choice">
                        <p>Phương thức thanh toán:</p>
                    </div>
                    <div class="col-sm-6" id="dropdown-choice">
                        <div class="row" id="choose-btn">
                            <div class="col-sm-6">
                                <div id="choose-method" onclick="dropMethods()">--Chọn phương thức--</div>
                            </div>
                            <div class="col-sm-6">
                                <div id="arrow-down" onclick="dropMethods()">
                                    <i id="dropdown"></i>
                                </div>
                            </div>
                        </div>
                        <div class="choice-list" id="methods">
                            <div class="choice" id="wallet" onclick="chooseWallet(); CheckFirst('wallet')">Ví điện tử</div>
                            <div class="choice" id="card" onclick="chooseCard(); CheckFirst('card')">Thẻ ngân hàng</div>
                        </div>
                    </div>
                </div>
                <div class="row information" id="wallet-info">
                    <div id="w-main-info">
                        <div class="info" id="w-main-info-wallet">
                            Tài khoản hiện có: 
                        </div>
                        <div class="info" id="w-main-info-cost">
                            Giá game: 
                        </div>
                        <div class="info" id="w-main-info-change">
                            Số dư: 
                        </div>
                    </div>
                </div>
                <div class="row information" id="card-info">
                    <div class="row" id="c-main-info">
                        <div class="col-sm-6 input" id="left-info">
                            <div class="row">
                                <div class="method-btn" id="master" onclick="chooseCardType(this)">
                                    <img src="resources/Payment/master-card.png" width="50%" id="master-card">
                                </div>
                            </div>
                            <div class="row">
                                <div id="card-numb">
                                    <p class="instruct"><strong>Số thẻ</strong></p>
                                    <input class="value" id="numb" type="text" maxlength="19" placeholder="XXXX XXXX XXXX XXXX">
                                </div>
                                <div id="xpire-date">
                                    <p class="instruct"><strong>Ngày hết hạn</strong></p>
                                    <input class="value" id="expire" type="text" maxlength="5" placeholder="MM/YY">
                                </div>
                                <div id="credit-amount">
                                    <p class="instruct"><strong>Số tiền giao dịch</strong></p>
                                    <input class="value" id="money" type="number">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 input" id="right-info">
                            <div class="row">
                                <div class="method-btn" id="visa" onclick="chooseCardType(this)">
                                    <img src="resources/Payment/visa.png" width="50%" id="visa-card">
                                </div>
                                <div id="name">
                                    <p class="instruct"><strong>Tên chủ thẻ</strong></p>
                                    <input class="value" id="holder" type="text">
                                </div>
                                <div id="security">
                                    <p class="instruct"><strong>Mã bảo vệ</strong></p>
                                    <input class="value" id="CVV" type="password" maxlength="3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <a id="conf-btn" style="cursor: pointer;">
                        Xác nhận
                    </a>
                </div>

                <script>
                    var userWallet = document.getElementById("w-main-info-wallet");
                    userWallet.innerHTML += MoneyIntToStr(gameMoney["userWallet"], "đ");
                    var gamePrice = document.getElementById("w-main-info-cost");
                    gamePrice.innerHTML += MoneyIntToStr(gameMoney["gamePrice"], "đ"); 
                    var change = document.getElementById("w-main-info-change");
                    change.innerHTML += MoneyIntToStr(gameMoney["remainingMoney"]);

                    function PostPurchase(type) {
                        var formData = new FormData();
                        formData.append("gameNC", gameNumcounter);
                        formData.append("userBalanceAfter", gameMoney["remainingMoney"]);
                        formData.append("purchaseType", type);
                        formData.append("purchaseToken", purchaseToken);

                        $.ajax ({
                            url: 'php/account_process.php',
                            data: formData,
                            processData: false,
                            contentType: false,
                            type: 'POST',
                            success: function(result){
                                console.log(result);
                            }
                        })
                    }
                    function CheckFirst(type) {
                        var confBtn = document.getElementById("conf-btn");
                        if (type === "wallet") {
                            if (gameMoney["result"] === 2) {
                                confBtn.style.color = "red";
                                confBtn.innerHTML = "Bạn không đủ tiền để thanh toán";
                                confBtn.style.cursor = "default";
                            }
                            else {
                                ChangeConfButton(type);
                                confBtn.style.cursor = "pointer";
                            }
                        }
                        else {
                            confBtn.style.color = "white";
                            confBtn.innerHTML = "Xác nhận";
                            confBtn.style.cursor = "pointer";
                            ChangeConfButton(type);
                        }
                    }
                    function ChangeConfButton(type) {
                        if (type === "wallet") document.getElementById("conf-btn").setAttribute("onclick", "confirmWalletPurchase(); PostPurchase(type)");
                        else document.getElementById("conf-btn").setAttribute("onclick", "confirmCardPurchase(); PostPurchase(type)");
                    }
                </script>
            </div>
        </main>
    </body>
</html>