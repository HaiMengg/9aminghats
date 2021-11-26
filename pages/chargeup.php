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
        <!--Use custom JS functions-->
        <script type="text/javascript" src="js/js_function_AK.js"></script>
      
        <main class="container-fluid">
            <div id="main">
                <div class="row">
                    <a id="arrow" href="pages/profile.php">
                        <img src="resources/Payment/arrow.png">
                    </a>
                </div>
                <div class="row" id="payment-heading">
                    <h1 style="font-size: 50px;">
                        Nạp tiền vào ví điện tử
                    </h1>
                </div>
                <div class="row information" id="card-info" style="display: block">
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
                                    <input class="value" id="numb" type="text" maxlength="19" placeholder="1234 5678 9283 1231">
                                </div>
                                <div id="xpire-date">
                                    <p class="instruct"><strong>Ngày hết hạn</strong></p>
                                    <input class="value" id="expire" type="text" maxlength="5" placeholder="MM/YY">
                                </div>
                                <div id="credit-amount">
                                    <p class="instruct"><strong>Số tiền muốn nạp</strong></p>
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
                    <a id="conf-btn" href="javascript:GetInputValue('money');" style="display: block; right: 21%; bottom: 19%">
                        Xác nhận
                    </a>
                </div>
            </div>
        </main>

        <script>
            if (GetCookie('username') === "") {
                window.location.href = "pages/signin.php"
            }
         </script>
    </body>
</html>