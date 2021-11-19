<html>
    <head>
        <!-- Cập nhật tên game lên title được không? -->
        <title id="title">Tên game</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Thêm logo trên tab -->
        <base href="https://high-man.com/">
        <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="resources/favicon/site.webmanifest">
        <script type="text/javascript" src="resources\plugins\bootstrap\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
        <script type="text/javascript" src="resources\plugins\jQuery\jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="resources\plugins\bootstrap\bootstrap-5.1.3-dist\css\bootstrap.css">
        <link rel="stylesheet" href="/css/style_AK.css">
        <link rel="stylesheet" href="/css/gameinfo_MH.css">
    </head>

    <body onload="Sidebar()" onresize="Sidebar()">
        <!--Connect to mySQL database-->
        <?php chdir($_SERVER["DOCUMENT_ROOT"] . "/") ?>
        <?php include "php/php_functions.php"; 
            $conn = ConnectDB();
        ?>
        <!--Using custom JS script-->
        <script type="text/javascript" src="js/js_function_AK.js"></script>
        <script type="text/javascript" src="js/layout_customize_AK.js"></script>

        <div class="container-fluid" id="topbar_mobile">
            <div class="row align-items-center">
                <div class="col-2 text-start">
                    <button onclick="ShowSidebarMobi('sidebar_mobile')" style="color: white; border: 0; border-radius: 100px; background-image: linear-gradient(to right, #ab14fc , #713efc);">☰</button>
                </div>
                <div class="col-8 text-center">
                    <img src="resources/Homepage/main_nav/logo/logo.png" alt="Site Logo">
                </div>
                <div class="col-2 text-end">
                    <button onclick="ShowSidebarMobi('sidebar_mobile_3')" style="color: white; border: 0; border-radius: 100px; background-image: linear-gradient(to right, #ab14fc , #713efc);">☰</button>
                </div>
            </div>
        </div>

        <div class="container-fluid" id="sidebar_mobile">
            <div class="row">
                <div class="col-3" id="sidebar_mobile_col">
                    <div class="row align-items-center"><button style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);" onclick="HideSidebarMobi('sidebar_mobile')">Đóng</button></div>
                    <div class="row align-items-center" id="other_pages" style="margin-top: 4vh; padding-left: 1px">
                        <a href="#"><b>Hướng dẫn</b></a>
                        <a href="#"><b>Khám phá</b></a>
                        <a href="#"><b>Điều khoản và Dịch vụ</b></a>
                    </div>
                    <div class="row align-items-center text-center" style="margin-top: 1vh">
                        <a style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);" href="AboutUs.html"><b>Về chúng tôi</b></a>
                    </div>
                    <div class="row align-items-center" style="margin-top: 3vh">
                        <button style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);" onclick="SidebarSwitch()"><b>Thể loại</b></button>
                    </div>
                </div>
                <div class="col-9"></div>
            </div>
        </div>

        <div class="container-fluid" id="sidebar_mobile_2">
            <div class="row">
                <div class="col-3" id="sidebar_mobile_2_col">
                    <div class="row align-items-center"><button style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);" onclick="HideSidebarMobi('sidebar_mobile_2')">Đóng</button></div>
                    <div class="row align-items-center" style="margin-top: 4vh; padding-left: 1px">
                        <div class="col-6">
                            <a href="#"><b>Nhập vai</b></a><br>
                            <a href="#"><b>Bắn súng</b></a><br>
                            <a href="#"><b>Mô phỏng</b></a><br>
                            <a href="#"><b>Sinh tồn</b></a><br>
                            <a href="#"><b>Thực tế ảo</b></a><br>
                            <a href="#"><b>Phiêu lưu</b></a><br>
                            <a href="#"><b>Kinh dị</b></a><br>
                            <a href="#"><b>Thể thao</b></a><br>
                            <a href="#"><b>Trẻ em</b></a><br>
                            <a href="#"><b>Giải đố</b></a><br>
                            <a href="#"><b>Âm nhạc</b></a>
                        </div>
                        <div class="col-6">
                            <a href="#"><b>MOBA</b></a><br>
                            <a href="#"><b>Hành động</b></a><br>
                            <a href="#"><b>Gacha</b></a><br>
                            <a href="#"><b>Phối hợp</b></a><br>
                            <a href="#"><b>Anime</b></a><br>
                            <a href="#"><b>Hài hước</b></a><br>
                            <a href="#"><b>Chiến thuật</b></a><br>
                            <a href="#"><b>Tiểu thuyết trực quan</b></a><br>
                            <a href="#"><b>Battle Royale</b></a><br>
                            <a href="#"><b>Thế giới mở</b></a><br>
                            <a href="#"><b>Viễn tưởng</b></a><br>
                            <a href="#"><b>Quân sự</b></a>
                        </div>
                    </div>
                </div>
                <div class="col-9"></div>
            </div>
        </div>

        <div class="container-fluid" id="sidebar_mobile_3">
            <div class="row">
                <div class="col-9"></div>
                <div class="col-3 text-end" id="sidebar_mobile_3_col">
                    <div class="row align-items-center">
                        <button style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);" onclick="HideSidebarMobi('sidebar_mobile_3')">Đóng</button>
                    </div>
                    <div class="row" style="margin-top: 2vh"><input type="text" name="search" size="20" placeholder="Tìm kiếm..."/></div>
                    <div class="row align-items-center" style="margin-top: 3vh">
                        <button style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);">Đăng nhập</button>
                    </div>
                    <div class="row align-items-center" style="margin-top: 3vh">
                        <button style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);">Đăng kí</button>
                    </div>    
                </div>
            </div>
        </div>

        <div class="container-fluid" id="content_js">
            <div class="row">
                <div class="col-3" style="padding: 1.5%; padding-top: 1%" id="sidebar_js">
                    <div class="row">
                        <div class="col-12 sticky" id="sidebar">
                            <div class="row">
                                <div class="col-12 text-center">
                                    <img src="resources/Homepage/main_nav/logo/logo.png" alt="Site Logo" style="width: 100%; height: 100%;"> 
                                </div>
                            </div>
                            <div id="sidebar_content">
                                <div class="row align-items-center" id="home_button">
                                    <div class="col-3" style="text-align: right">
                                        <img src="resources/Homepage/main_nav/others/home_icon.png" alt="Home Icon" style="width: 60%; height: 100%;">
                                    </div>
                                    <div class="col-9"><a href="#"><b>Trang chủ</b></a></div>
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
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/rpg.png" alt="RPG Genre"><p>Nhập vai</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/shooter.png" alt="Shooter Genre"><p>Bắn súng</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/sim.png" alt="Simulator Genre"><p>Mô phỏng</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/survival.png" alt="Survival Genre"><p>Sinh tồn</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/vr.png" alt="VR Genre"><p>Thực tế ảo</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/adventure.png" alt="Adventure Genre"><p>Phiêu lưu</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/horror.png" alt="Horror Genre"><p>Kinh dị</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/sport.png" alt="Sport Genre"><p>Thể thao</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center"><a href="#"><img src="resources/Homepage/main_nav/others/genres/kid.png" alt="Kid Genre"><p>Trẻ em</p></a></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/puzzle.png" alt="Puzzle Genre"><p>Giải đố</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/musical.png" alt="Musical Genre"><p>Âm nhạc</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/moba.png" alt="Moba Genre"><p>MOBA</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/action.png" alt="Action Genre"><p>Hành động</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/gacha.png" alt="Gacha Genre"><p>Gacha</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/coop.png" alt="Coop Genre"><p>Phối hợp</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/anime.png" alt="Anime Genre"><p>Anime</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/comedy.png" alt="Comedy Genre"><p>Hài hước</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/strategy.png" alt="Strategy Genre"><p>Chiến thuật</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/vn.png" alt="VN Genre"><p>Tiểu thuyết trực quan</p></div>
                                    <div class="col-3 text-center"><img src="resources/Homepage/main_nav/others/genres/br.png" alt="BR Genre"><p>Battle Royale</p></div>
                                </div>
                                <div class="row">
                                    <div class="col-4 text-center"><img src="resources/Homepage/main_nav/others/genres/open.png" alt="Open-World Genre"><p>Thế giới mở</p></div>
                                    <div class="col-4 text-center"><img src="resources/Homepage/main_nav/others/genres/scifi.png" alt="Scifi Genre"><p>Viễn tưởng</p></div>
                                    <div class="col-4 col-xs-4 text-center"><img src="resources/Homepage/main_nav/others/genres/military.png" alt="Military Genre"><p>Quân sự</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-9" id="mainpanel">
                    <div class="row" id="search">
                        <div class="col-10">
                            <div id="search_bar">
                                <input type="text" id="search_bar_js" name="search" size="100" placeholder="Nhập tên game/thể loại/nhà phát triển..."/>
                                <a href="#"><img src="resources/Homepage/main_nav/others/search_icon.png" alt="Search Button"></a>
                            </div>
                        </div>
                        <div class="col-2 text-end">
                            <div id="user_buttons">
                                <a href="#"><img src="resources/Homepage/main_nav/others/loginlogout.png" alt="LogInOut Button"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="main_content">
                        <!--Where the magic happens-->
                        <?php
                            $gameName = GetGameData("NAME", $gameNumber);      //gameNum: a NUMCOUNTER
                            $gameImage = GetGameImage($gameDir);         //$gameDir (ex: "resources/DB_GAMES/VR Kanojo/")
                            $gameYoutubeLink = GetGameData("TRAILER", $gameNumber);
                            $gameDev = GetGameData("DEVELOPER", $gameNumber);
                            $gamePub = GetGameData("PUBLISHER", $gameNumber);
                            $gameGenre = GetGameData("GENRE", $gameNumber);
                            $gameAge = GetGameData("AGE", $gameNumber);
                            $gameLogo = GetGameLogo($gameDir);
                            $gameCost = GetGameData("PRICE", $gameNumber);
                            $gameScore = GetGameData("METACRITS", $gameNumber);
                            $foundMoreGame = FindGames(3, 6);      //Get more games
                        ?>
                        <div class="col-12">
                            <div>
                                <div class="row align-items-center">
                                    <!--Collum này của slideshow game-->
                                    <div class="col-9" style="padding: 3%; max-height:1050px; min-height: min-content">
                                        <div class="row"><b><p id="name"></p></b></div>
                                        <div class="row">
                                            <div class="col-12 text-center" id="slideshow">
                                                <script>
                                                    var gameImage = <?php echo json_encode($gameImage) ?>;
                                                    var gameYoutubeLink = "<?php echo $gameYoutubeLink ?>";
                                                    var carouselLocation = document.getElementById("slideshow");
                                                    carouselLocation.appendChild(CreateCarouselSingle(gameImage.length, "gameCarousel", gameImage, gameYoutubeLink));
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Collum này là phần thông tin và nút tải -->
                                    <div class="col-3" style="padding: 10% 3% 10% 3%">
                                       <div class="row">
                                            <div class="col-12" id="gamedown">
                                                <div class="row">
                                                    <img src="" id="logo">
                                                </div>
                                                <div class="row" style="margin-top: 10%; margin-bottom: 5%">
                                                    <b><p id="price">Cost</p></b>
                                                </div>
                                                <div class="row text-center">
                                                    <a href="https://www.youtube.com/watch?v=1yXZIFYv4SE&list=TLPQMTMxMTIwMjHQ9msIZxkz-Q&index=26" target="_blank" id="price_2"><b></b></a>
                                                </div>
                                                <div class="row" style="margin: 30% 5% 10% 5%" id="other_game_info">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <p>Nhà phát triển</p>
                                                            <p id="dev"></p>
                                                        </div>
                                                        <div class="row" style="border-top: 2px solid rgb(174,18,252);">
                                                            <p>Nhà phát hành</p>
                                                            <p id="pub"></p>
                                                        </div>
                                                        <div class="row" style="border-top: 2px solid rgb(174,18,252);">
                                                            <p>Thể loại</p>
                                                            <p id="genre"></p>
                                                        </div>
                                                        <div class="row" style="border-top: 2px solid rgb(174,18,252);">
                                                            <p>Độ tuổi cho phép</p>
                                                            <p id="age"></p>
                                                        </div>
                                                    </div>
                                                    <script>
                                                        DisplaySingleData("title", "<?php echo $gameName ?>" + " | 9amingHats");
                                                        DisplaySingleData("name", "<?php echo $gameName ?>");
                                                        DisplaySingleData("dev", "<?php echo $gameDev ?>");
                                                        DisplaySingleData("pub", "<?php echo $gamePub ?>");
                                                        DisplaySingleData("genre", <?php echo json_encode($gameGenre) ?>);
                                                        DisplaySingleData("age", "<?php echo $gameAge ?>" + "+");
                                                        DisplaySingleData("price", "<?php echo $gameCost ?>");
                                                        DisplayPurchase();

                                                        var gameLogo = document.getElementById("logo");
                                                        gameLogo.src="<?php echo $gameLogo ?>";
                                                    </script>
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
                                <div class="row">
                                    <div class="col-4 text-center" id="comment">
                                        <h4><b>Điểm số Metacritics</b></h4>
                                        <div class="row">
                                            <div class="col-4" id="score_col_1"></div>
                                            <div class="col-4 text-center" id="score_col">
                                                <b><p id="score"></p></b>
                                            </div>
                                            <div class="col-4" id="score_col_1"></div>
                                        </div>
                                    </div>
                                    <div class="col-8" id="moregames">
                                        <div class="row align-items-center">
                                            <script>
                                                var foundMoreGame = <?php echo json_encode($foundMoreGame) ?>;
                                                DisplayGames("moreGames", foundMoreGame);

                                                DisplaySingleData("score", "<?php echo $gameScore ?>");
                                                ScoreBackground();
                                            </script>
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