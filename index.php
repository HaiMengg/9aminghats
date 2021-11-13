<html>
    <head>
        <title>9amingHats | Trang chủ</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="resources\plugins\bootstrap\bootstrap-5.1.3-dist\css\bootstrap.css">
        <script src="resources\plugins\jQuery\jquery-3.6.0.js"></script>
        <script src="resources\plugins\bootstrap\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
        <link rel="stylesheet" href="css/style_AK.css">
        <script type="text/javascript">
            function ResizeWidth() {
                var browserWidth = document.body.clientWidth
                var contentDiv = document.getElementById("content")
                var style = document.createAttribute("style")
                style.value = "width: " + browserWidth.toString()
                contentDiv.setAttributeNode(style)
            }
        </script>
    </head>

    <body>
        <!--Connect to mySQL database-->
        <?php include "php/php_functions.php"; 
            $conn = ConnectDB();
        ?>
        <!--Using custom JS script-->
        <script src="js/js_function_AK.js"></script>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 1.5%; padding-top: 1%">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sticky" id="sidebar">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <img src="resources/Homepage/main_nav/logo/logo.png" alt="Site Logo" style="width: 100%; height: 100%;"> 
                                </div>
                            </div>
                            <div id="sidebar_content">
                                <div class="row align-items-center" id="home_button">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="text-align: right">
                                        <img src="resources/Homepage/main_nav/others/home_icon.png" alt="Home Icon" style="width: 60%; height: 100%;">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><a href="#"><b>Trang chủ</b></a></div>
                                </div>
                                <div class="row align-items-center" id="other_pages">
                                    <a href="#"><b>Hướng dẫn</b></a>
                                    <a href="#"><b>Khám phá</b></a>
                                    <a href="#"><b>Điều khoản và Dịch vụ</b></a>
                                </div>
                                <div id="about_us">
                                    <a href="#"><b>Về chúng tôi</b></a>
                                </div>
                            </div>
                            <div id="category">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/rpg.png" alt="RPG Genre"><p>Nhập vai</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/shooter.png" alt="Shooter Genre"><p>Bắn súng</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/sim.png" alt="Simulator Genre"><p>Mô phỏng</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/survival.png" alt="Survival Genre"><p>Sinh tồn</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/vr.png" alt="VR Genre"><p>Thực tế ảo</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/adventure.png" alt="Adventure Genre"><p>Phiêu lưu</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/horror.png" alt="Horror Genre"><p>Kinh dị</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/sport.png" alt="Sport Genre"><p>Thể thao</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="#"><img src="resources/Homepage/main_nav/others/genres/kid.png" alt="Kid Genre"><p>Trẻ em</p></a></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/puzzle.png" alt="Puzzle Genre"><p>Giải đố</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/musical.png" alt="Musical Genre"><p>Âm nhạc</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/moba.png" alt="Moba Genre"><p>MOBA</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/action.png" alt="Action Genre"><p>Hành động</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/gacha.png" alt="Gacha Genre"><p>Gacha</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/coop.png" alt="Coop Genre"><p>Phối hợp</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/anime.png" alt="Anime Genre"><p>Anime</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/comedy.png" alt="Comedy Genre"><p>Hài hước</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/strategy.png" alt="Strategy Genre"><p>Chiến thuật</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/vn.png" alt="VN Genre"><p>Tiểu thuyết trực quan</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="resources/Homepage/main_nav/others/genres/br.png" alt="BR Genre"><p>Battle Royale</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="resources/Homepage/main_nav/others/genres/open.png" alt="Open-World Genre"><p>Thế giới mở</p></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="resources/Homepage/main_nav/others/genres/scifi.png" alt="Scifi Genre"><p>Viễn tưởng</p></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="resources/Homepage/main_nav/others/genres/military.png" alt="Military Genre"><p>Quân sự</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" id="mainpanel">
                    <div class="row" id="search">
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
                            <div id="search_bar">
                                <input type="text" name="search" size="80" placeholder="Nhập tên game/thể loại/nhà phát triển..."/>
                                <a href="#"><img src="resources/Homepage/main_nav/others/search_icon.png" alt="Search Button"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                            <div id="user_buttons">
                                <a href="#"><img src="resources/Homepage/main_nav/others/mail.png" alt="Mail Button"></a>
                                <a href="#"><img src="resources/Homepage/main_nav/others/notif.png" alt="Notification Button"></a>
                                <a href="#"><img src="resources/Homepage/main_nav/others/loginlogout.png" alt="LogInOut Button"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="main_content">
                        <p>
                            <?php
                                $foundGameData = FindGames(1, 6);        //Get new games
                            ?>
                        </p>
                        <div class="col-12">
                            <div class="row"></div>
                            <div class="row align-items-center" id="newGames">
                                <script>
                                    var foundGameData = <?php echo json_encode($foundGameData) ?>;
                                    console.log(foundGameData);
                                    DisplayGames("newGames", foundGameData);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>