<html>
    <head>
        <!-- Cập nhật tên game lên title được không? -->
        <title>Tên game</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Thêm logo trên tab -->
        <link rel="apple-touch-icon" sizes="180x180" href="../resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="../resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="../resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="../resources/favicon/site.webmanifest">
        <link rel="stylesheet" href="..\resources\plugins\bootstrap\bootstrap-5.1.3-dist\css\bootstrap.css">
        <script src="..\resources\plugins\jQuery\jquery-3.6.0.js"></script>
        <script src="..\resources\plugins\bootstrap\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
        <link rel="stylesheet" href="../css/style_AK.css">
        <link rel="stylesheet" href="../css/gameinfo_MH.css">
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
                <!-- Sidebar -->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 1.5%; padding-top: 1%">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sticky" id="sidebar">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                    <img src="../resources/Homepage/main_nav/logo/logo.png" alt="Site Logo" style="width: 100%; height: 100%;"> 
                                </div>
                            </div>
                            <div id="sidebar_content">
                                <div class="row align-items-center" id="home_button">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="text-align: right">
                                        <img src="../resources/Homepage/main_nav/others/home_icon.png" alt="Home Icon" style="width: 60%; height: 100%;">
                                    </div>
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9"><a href="#"><b>Trang chủ</b></a></div>
                                </div>
                                <div class="row align-items-center" id="other_pages">
                                    <a href="#"><b>Hướng dẫn</b></a>
                                    <a href="#"><b>Khám phá</b></a>
                                    <a href="#"><b>Điều khoản và Dịch vụ</b></a>
                                </div>
                                <div id="about_us">
                                    <a href="AboutUs.html"><b>Về chúng tôi</b></a>
                                </div>
                            </div>
                            <div id="category">
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/rpg.png" alt="RPG Genre"><p>Nhập vai</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/shooter.png" alt="Shooter Genre"><p>Bắn súng</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/sim.png" alt="Simulator Genre"><p>Mô phỏng</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/survival.png" alt="Survival Genre"><p>Sinh tồn</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/vr.png" alt="VR Genre"><p>Thực tế ảo</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/adventure.png" alt="Adventure Genre"><p>Phiêu lưu</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/horror.png" alt="Horror Genre"><p>Kinh dị</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/sport.png" alt="Sport Genre"><p>Thể thao</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="#"><img src="../resources/Homepage/main_nav/others/genres/kid.png" alt="Kid Genre"><p>Trẻ em</p></a></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/puzzle.png" alt="Puzzle Genre"><p>Giải đố</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/musical.png" alt="Musical Genre"><p>Âm nhạc</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/moba.png" alt="Moba Genre"><p>MOBA</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/action.png" alt="Action Genre"><p>Hành động</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/gacha.png" alt="Gacha Genre"><p>Gacha</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/coop.png" alt="Coop Genre"><p>Phối hợp</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/anime.png" alt="Anime Genre"><p>Anime</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/comedy.png" alt="Comedy Genre"><p>Hài hước</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/strategy.png" alt="Strategy Genre"><p>Chiến thuật</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/vn.png" alt="VN Genre"><p>Tiểu thuyết trực quan</p></div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../resources/Homepage/main_nav/others/genres/br.png" alt="BR Genre"><p>Battle Royale</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="../resources/Homepage/main_nav/others/genres/open.png" alt="Open-World Genre"><p>Thế giới mở</p></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="../resources/Homepage/main_nav/others/genres/scifi.png" alt="Scifi Genre"><p>Viễn tưởng</p></div>
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="../resources/Homepage/main_nav/others/genres/military.png" alt="Military Genre"><p>Quân sự</p></div>
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
                                <a href="#"><img src="../resources/Homepage/main_nav/others/search_icon.png" alt="Search Button"></a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                            <div id="user_buttons">
                                <a href="#"><img src="../resources/Homepage/main_nav/others/loginlogout.png" alt="LogInOut Button"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div>
                                <div class="row">
                                    <!--Collum này của slideshow game-->
                                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9" style="padding: 3%; max-height:1050px; min-height: min-content">
                                        <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="slideshow">
                                                <p>Slideshow is here</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Collum này là phần thông tin và nút tải -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 10% 3% 10% 3%">
                                       <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="gamedown">
                                                <div class="row">
                                                    <img src="../resources/favicon/android-chrome-512x512.png">
                                                </div>
                                                <div class="row" style="margin-top: 10%; margin-bottom: 5%">
                                                    <b>Cost</b>
                                                </div>
                                                <div class="row text-center">
                                                    <a href="https://www.youtube.com/watch?v=1yXZIFYv4SE&list=TLPQMTMxMTIwMjHQ9msIZxkz-Q&index=26" target="_blank"><b>Tải về</b></a>
                                                </div>
                                                <div class="row" style="margin: 30% 5% 10% 5%">
                                                    <table style="width: 90%;">
                                                        <tr>
                                                            <td>Nhà phát hành</td>
                                                            <td>Data</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Thể loại</td>
                                                            <td>Data</td>
                                                        </tr>
                                                        <tr>
                                                            <td>Tuổi</td>
                                                            <td>Data</td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                       </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Mô tả game -->
                            <div id="detail">
                                <div class="row">
                                    <h3><b>Mô tả game</b></h3>
                                    <hr>
                                    <p>Thông tin của game</p>
                                    <br>
                                    <h5>Cấu hình</h5>
                                    <p>Thông tin cấu hình máy</p>
                                </div>
                            </div>
                            <!-- comment và Games khác -->
                            <div>
                                <div class=row>
                                    <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7" id="comment">
                                        <h4><b>Đánh giá của người chơi</b></h4>
                                        <div class="row" id="user_cmt">
                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                                <img src="../resources/Homepage/main_nav/others/loginlogout.png" alt="avatar">
                                            </div>
                                            <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="border-radius: 10px; border: 1px solid #9672FA; text-align: left; height:fit-content; padding-top: 2% 0% 2% 0%;">
                                                <p>Nội dung bình luận</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5" id="moregames">
                                        <h4><b>Các game khác</b></h4>
                                        <div class="row" style="padding: 2%; min-height:fit-content;">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-radius: 33px; background-color: #1C1656; height: fit-content">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 5%">
                                                        <img src="../resources/favicon/android-chrome-512x512.png" alt="logo games">
                                                        <p style="text-align: center;"><b>Tên game</b></p>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="padding: 5%">
                                                        <img src="../resources/favicon/android-chrome-512x512.png" alt="logo games">
                                                        <p style="text-align: center;"><b>Tên game</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>