<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="../../plugins/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.css">
        <script src="../../plugins/bootstrap/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
        <script src="../../plugins/jQuery/jquery-3.6.0.js"></script>
        <style>
            body {
                background-color: #19164F;
            }
            #sidebar {
                background-color: #17144B;
                border-radius: 40px;
                padding: 1%;
                padding-top: 1%;
            }
            #sidebar_content {
                background-color: #19164F; 
                border-radius: 40px;
                padding: 5%;
                padding-top: 1%;
            }
            #home_button {
                margin-bottom: 1vh;
            }
            #home_button a {
                color: white;
                font-size: 25px;
            }
            #other_pages {
                margin-bottom: 2vh;
            }
            #other_pages a {
                padding-left: 15%;
                line-height: 200%;
                font-size: 15px;
            }
            #about_us {
                text-align: center;
            }
            #about_us a {
                border-radius: 40px;
                padding: 4%;
                padding-left: 20%;
                padding-right: 20%;
                background-image: url("../../resources/main_nav/others/aboutus.png");
                background-repeat: no-repeat;
                background-size: cover;
                text-align: center;
                display: inline-block;
            }
            #category {
                font-size: 11px;
                margin-top: 3vh;
                padding: 5.5%;
                background-color: #19164F; 
                border-radius: 40px;
            }
            #category img {
                width: 30px;
                height: 30px
            }
            .sticky {
                width: 23vw; /* Set the width of the sidebar */
                position: fixed; /* Fixed Sidebar (stay in place on scroll) */
                z-index: 1; /* Stay on top */
                top: 0; /* Stay at the top */
                left: 0;
                overflow-x: hidden; /* Disable horizontal scroll */
            }
            a, p {
                color: white;
                text-decoration: none;
            }
            #mainpanel {
                background-color: #17144B;
                border-radius: 40px;
                padding: 1.5%; 
                padding-top: 1%;
            }
            #search_bar {
                display: inline-block;
            }
            #search_bar input {
                height: 100%;
                border-radius: 8px;
                border: 0px;
                background-color: #231B6B;
                color: white;
            }
            #search_bar a{
                border-radius: 8px;
            }
            #user_buttons {
                display: inline-block;
            }
            #c {
                border: 5px solid orangered;
                padding: 2%;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid" style="padding: 0 1vw 4vh 1vw">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="padding: 1.5%; padding-top: 1%">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 sticky" id="sidebar">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                                <img src="../../resources/main_nav/logo/logo.png" alt="Site Logo" style="width: 100%; height: 100%;"> 
                            </div>
                        </div>
                        <div id="sidebar_content">
                            <div class="row align-items-center" id="home_button">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" style="text-align: right">
                                    <img src="../../resources/main_nav/others/home_icon.png" alt="Home Icon" style="width: 60%; height: 100%;">
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
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/rpg.png" alt="RPG Genre"><p>Nhập vai</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/shooter.png" alt="Shooter Genre"><p>Bắn súng</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/sim.png" alt="Simulator Genre"><p>Mô phỏng</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/survival.png" alt="Survival Genre"><p>Sinh tồn</p></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/vr.png" alt="VR Genre"><p>Thực tế ảo</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/adventure.png" alt="Adventure Genre"><p>Phiêu lưu</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/horror.png" alt="Horror Genre"><p>Kinh dị</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/sport.png" alt="Sport Genre"><p>Thể thao</p></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><a href="#"><img src="../../resources/main_nav/others/genres/kid.png" alt="Kid Genre"><p>Trẻ em</p></a></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/puzzle.png" alt="Puzzle Genre"><p>Giải đố</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/musical.png" alt="Musical Genre"><p>Âm nhạc</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/moba.png" alt="Moba Genre"><p>Hành động</p></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/action.png" alt="Action Genre"><p>Hành động</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/gacha.png" alt="Gacha Genre"><p>Gacha</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/coop.png" alt="Coop Genre"><p>Phối hợp</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/anime.png" alt="Anime Genre"><p>Anime</p></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/comedy.png" alt="Comedy Genre"><p>Hài hước</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/strategy.png" alt="Strategy Genre"><p>Chiến thuật</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/vn.png" alt="VN Genre"><p>Tiểu thuyết trực quan</p></div>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center"><img src="../../resources/main_nav/others/genres/br.png" alt="BR Genre"><p>Battle Royale</p></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="../../resources/main_nav/others/genres/open.png" alt="Open-World Genre"><p>Thế giới mở</p></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="../../resources/main_nav/others/genres/scifi.png" alt="Scifi Genre"><p>Viễn tưởng</p></div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center"><img src="../../resources/main_nav/others/genres/military.png" alt="Military Genre"><p>Quân sự</p></div>
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
                            <a href="#"><img src="../../resources/main_nav/others/search_icon.png" alt="Search Button"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 text-center">
                        <div id="user_buttons">
                            <a href="#"><img src="../../resources/main_nav/others/mail.png" alt="Mail Button"></a>
                            <a href="#"><img src="../../resources/main_nav/others/notif.png" alt="Notification Button"></a>
                            <a href="#"><img src="../../resources/main_nav/others/loginlogout.png" alt="LogInOut Button"></a>
                        </div>
                    </div>
                </div>
                <div class="row" id="main_content"></div>
            </div>
        </div>
        </div>
    </body>
</html>