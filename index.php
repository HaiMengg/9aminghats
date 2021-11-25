<html>
    <head>
        <title>Trang chủ | 9amingHats</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Thêm logo trên tab -->
        <base href="https://high-man.com/">
        <link rel="apple-touch-icon" sizes="180x180" href="resources/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="resources/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="resources/favicon/favicon-16x16.png">
        <link rel="manifest" href="resources/favicon/site.webmanifest">
        <script src="resources\plugins\bootstrap\bootstrap-5.1.3-dist\js\bootstrap.js"></script>
        <script src="resources\plugins\jQuery\jquery-3.6.0.js"></script>
        <link rel="stylesheet" href="resources\plugins\bootstrap\bootstrap-5.1.3-dist\css\bootstrap.css">
        <link rel="stylesheet" href="css/style_AK.css">
        <link rel="stylesheet" href="css/term_MH.css">
    </head>

    <body onmouseover="TermsPanCheck()" onload="Sidebar(); UserButtons();" onresize="Sidebar()" id="index_body">
        <!--Connect to mySQL database-->
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
                        <a href=""><b>Hướng dẫn</b></a>
                        <a href=""><b>Khám phá</b></a>
                        <a href=""><b>Điều khoản và Dịch vụ</b></a>
                    </div>
                    <div class="row align-items-center text-center" style="margin-top: 1vh">
                        <a style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);" href="pages/aboutus2.html"><b>Về chúng tôi</b></a>
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
                            <a href=""><b>Nhập vai</b></a><br>
                            <a href=""><b>Bắn súng</b></a><br>
                            <a href=""><b>Mô phỏng</b></a><br>
                            <a href=""><b>Sinh tồn</b></a><br>
                            <a href=""><b>Thực tế ảo</b></a><br>
                            <a href=""><b>Phiêu lưu</b></a><br>
                            <a href=""><b>Kinh dị</b></a><br>
                            <a href=""><b>Thể thao</b></a><br>
                            <a href=""><b>Trẻ em</b></a><br>
                            <a href=""><b>Giải đố</b></a><br>
                            <a href=""><b>Âm nhạc</b></a>
                        </div>
                        <div class="col-6">
                            <a href=""><b>MOBA</b></a><br>
                            <a href=""><b>Hành động</b></a><br>
                            <a href=""><b>Gacha</b></a><br>
                            <a href=""><b>Phối hợp</b></a><br>
                            <a href=""><b>Anime</b></a><br>
                            <a href=""><b>Hài hước</b></a><br>
                            <a href=""><b>Chiến thuật</b></a><br>
                            <a href=""><b>Tiểu thuyết trực quan</b></a><br>
                            <a href=""><b>Battle Royale</b></a><br>
                            <a href=""><b>Thế giới mở</b></a><br>
                            <a href=""><b>Viễn tưởng</b></a><br>
                            <a href=""><b>Quân sự</b></a>
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
                    <div id="sidebar_mobile_3_logInOut">
                        <div class="row align-items-center" style="margin-top: 3vh">
                            <button type="button" style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);" onclick="CheckLogInState('login')">Đăng nhập</button>
                        </div>
                        <div class="row align-items-center" style="margin-top: 3vh">
                            <button type="button" style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);" onclick="CheckLogInState('signin')">Đăng kí</button>
                        </div>
                    </div>
                    <div id="sidebar_mobile_3_userprofile" style="display: none;">
                        <div class="row align-items-center" style="margin-top: 3vh">
                            <button style="color: white; border: 0; border-radius: 15px; background-image: linear-gradient(to right, #ab14fc , #713efc);">Thông tin người dùng</button>
                        </div>
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
                                    <a href="#modal_terms" data-bs-toggle="modal" data-bs-target="#modal_terms" style="color: white;"><b>Điều khoản và Dịch vụ</b></a>
                                </div>
                                <div id="about_us">
                                    <a href="pages/aboutus2.html"><b>Về chúng tôi</b></a>
                                </div>
                            </div>
                            <div id="category">
                                <div class="row">
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=1"><img src="resources/Homepage/main_nav/others/genres/rpg.png" alt="RPG Genre"><p>Nhập vai</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=4"><img src="resources/Homepage/main_nav/others/genres/shooter.png" alt="Shooter Genre"><p>Bắn súng</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=10"><img src="resources/Homepage/main_nav/others/genres/sim.png" alt="Simulator Genre"><p>Mô phỏng</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=16"><img src="resources/Homepage/main_nav/others/genres/survival.png" alt="Survival Genre"><p>Sinh tồn</p></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=11"><img src="resources/Homepage/main_nav/others/genres/vr.png" alt="VR Genre"><p>Thực tế ảo</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=21"><img src="resources/Homepage/main_nav/others/genres/adventure.png" alt="Adventure Genre"><p>Phiêu lưu</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=2"><img src="resources/Homepage/main_nav/others/genres/horror.png" alt="Horror Genre"><p>Kinh dị</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=14"><img src="resources/Homepage/main_nav/others/genres/sport.png" alt="Sport Genre"><p>Thể thao</p></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=19"><img src="resources/Homepage/main_nav/others/genres/kid.png" alt="Kid Genre"><p>Trẻ em</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=5"><img src="resources/Homepage/main_nav/others/genres/puzzle.png" alt="Puzzle Genre"><p>Giải đố</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=24"><img src="resources/Homepage/main_nav/others/genres/musical.png" alt="Musical Genre"><p>Âm nhạc</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=9"><img src="resources/Homepage/main_nav/others/genres/moba.png" alt="Moba Genre"><p>MOBA</p></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=22"><img src="resources/Homepage/main_nav/others/genres/action.png" alt="Action Genre"><p>Hành động</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=7"><img src="resources/Homepage/main_nav/others/genres/gacha.png" alt="Gacha Genre"><p>Gacha</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=12"><img src="resources/Homepage/main_nav/others/genres/coop.png" alt="Coop Genre"><p>Phối hợp</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=23"><img src="resources/Homepage/main_nav/others/genres/anime.png" alt="Anime Genre"><p>Anime</p></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=3"><img src="resources/Homepage/main_nav/others/genres/comedy.png" alt="Comedy Genre"><p>Hài hước</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=13"><img src="resources/Homepage/main_nav/others/genres/strategy.png" alt="Strategy Genre"><p>Chiến thuật</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=18"><img src="resources/Homepage/main_nav/others/genres/vn.png" alt="VN Genre"><p>Tiểu thuyết trực quan</p></a></div>
                                    <div class="col-3 text-center"><a href="pages/genre.php?gno=8"><img src="resources/Homepage/main_nav/others/genres/br.png" alt="BR Genre"><p>Battle Royale</p></a></div>
                                </div>
                                <div class="row">
                                    <div class="col-4 text-center"><a href="pages/genre.php?gno=20"><img src="resources/Homepage/main_nav/others/genres/open.png" alt="Open-World Genre"><p>Thế giới mở</p></a></div>
                                    <div class="col-4 text-center"><a href="pages/genre.php?gno=15"><img src="resources/Homepage/main_nav/others/genres/scifi.png" alt="Scifi Genre"><p>Viễn tưởng</p></a></div>
                                    <div class="col-4 col-xs-4 text-center"><a href="pages/genre.php?gno=17"><img src="resources/Homepage/main_nav/others/genres/military.png" alt="Military Genre"><p>Quân sự</p></a></div>
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
                                <div class="row align-items-center" id="user_buttons_anon">
                                    <div class="col-6 text-center" style="border-right: 1px solid purple"><a href="javascript:CheckLogInState('login')">Đăng nhập</a></div>
                                    <div class="col-6 text-center"><a href="javascript:CheckLogInState('signin')">Đăng kí</a></div>
                                </div>
                                <div class="row align-items-center" id="user_button_user" style="display: none">
                                    <div class="col-6 text-center"><p id="user_button_username"></p></div>
                                    <div class="col-6 text-center"><a href="pages/library.php" id="user_button_userprofile"><img src="resources/Homepage/main_nav/others/loginlogout.png" alt="LogInOut Button"></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="main_content">
                        <?php
                            $foundNewGame = FindGames(1, 6);        //Get new games
                            $foundFreeGame = FindGames(2, 6);       //Get free games
                            $foundRecomGame = FindGames(3, 6);      //Get recommended games
                        ?>
                        
                        <div class="col-12">
                            <div class="row" id="banner">
                                <img id="banner_js" src="resources/Homepage/banner.png">
                            </div>
                            <div class="row align-items-center" id="newGames">
                                <script>
                                    var foundNewGame = <?php echo json_encode($foundNewGame) ?>;
                                    DisplayGames("newGames", foundNewGame);
                                </script>
                            </div>
                            <div class="row align-items-center" id="freeGames">
                                <script>
                                    var foundFreeGame = <?php echo json_encode($foundFreeGame) ?>;
                                    DisplayGames("freeGames", foundFreeGame);
                                </script>
                            </div>
                            <div class="row align-items-center" id="recommendedGames">
                                <script>
                                    var foundRecomGame = <?php echo json_encode($foundRecomGame) ?>;
                                    DisplayGames("recommendedGames", foundRecomGame);
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--TOS-->
        <div class="modal fade" id="modal_terms" tabindex="-1" aria-labelledby="modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modal-title">ĐIỀU KHOẢN VÀ DỊCH VỤ</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 table_content">
                                    <div class="container" style="padding-top:5%; padding-bottom: 5%;">
                                        <a id="p_intro">GIỚI THIỆU</a> <hr>
                                        <a id="p_security">BẢO MẬT</a> <hr>
                                        <a id="p_limited_use_rights">GIỚI HẠN VỀ QUYỀN SỬ DỤNG</a> <hr>
                                        <a id="p_software">PHẦN MỀM</a> <hr>
                                        <a id="p_account_and_security">TÀI KHOẢN VÀ BẢO MẬT</a> <hr>
                                        <a id="p_payment">CÁC ĐIỀU KHOẢN VÀ THANH TOÁN</a> <hr>
                                        <a id="p_excluding_liability">LOẠI TRỪ TRÁCH NHIỆM</a> <hr>
                                        <a id="p_limited_liability">CÁC TRƯỜNG HỢP LOẠI TRỪ VÀ GIỚI HẠN TRÁCH NHIỆM PHÁP LÝ</a> <hr>
                                        <a id="p_third_party_links">LIÊN KẾT ĐẾN CÁC TRANG CỦA BÊN THỨ BA</a> <hr>
                                        <a id="p_term_of_use">ĐIỀU KHOẢN SỬ DỤNG</a> <hr>
                                        <a id="p_violate">VI PHẠM CÁC ĐIỀU KHOẢN DỊCH VỤ CỦA CHÚNG TÔI</a> <hr>
                                        <a id="p_your_assure">ĐẢM BẢO VÀ CAM ĐOAN CỦA BẠN</a> <hr>
                                        <a id="p_indemnify">BỒI THƯỜNG</a> <hr>
                                        <a id="p_effect">TÍNH HIỆU LỰC TỪNG PHẦN</a> <hr>
                                        <a id="p_ajust">LUẬT ĐIỀU CHỈNH</a> <hr>
                                        <a id="p_general_rules">CÁC QUY ĐỊNH CHUNG</a> <hr>
                                        
                                        <script>
                                            var intro = document.getElementById("p_intro");
                                            var security = document.getElementById("p_security");
                                            var limited = document.getElementById("p_limited_use_rights");
                                            var software = document.getElementById("p_software");
                                            var aas = document.getElementById("p_account_and_security");
                                            var payment = document.getElementById("p_payment");
                                            var el = document.getElementById("p_excluding_liability");
                                            var ll = document.getElementById("p_limited_liability");
                                            var tpl = document.getElementById("p_third_party_links");
                                            var tos = document.getElementById("p_term_of_use");
                                            var violate = document.getElementById("p_violate");
                                            var assure = document.getElementById("p_your_assure");
                                            var indemnify = document.getElementById("p_indemnify");
                                            var effect = document.getElementById("p_effect");
                                            var ajust = document.getElementById("p_ajust");
                                            var generalrules = document.getElementById("p_general_rules");

                                            intro.setAttribute("href", window.location.href + "#intro");
                                            security.setAttribute("href", window.location.href + "#security");
                                            limited.setAttribute("href", window.location.href + "#limited_use_rights");
                                            software.setAttribute("href", window.location.href + "#software");
                                            payment.setAttribute("href", window.location.href + "#payment");
                                            aas.setAttribute("href", window.location.href + "#account_and_security");
                                            el.setAttribute("href", window.location.href + "#excluding_liability");
                                            ll.setAttribute("href", window.location.href + "#limited_liability");
                                            tpl.setAttribute("href", window.location.href + "#third_party_links");
                                            tos.setAttribute("href", window.location.href + "#term_of_use");
                                            violate.setAttribute("href", window.location.href + "#violate");
                                            assure.setAttribute("href", window.location.href + "#your_assure");
                                            indemnify.setAttribute("href", window.location.href + "#indemnify");
                                            effect.setAttribute("href", window.location.href + "#effect");
                                            ajust.setAttribute("href", window.location.href + "#ajust");
                                            generalrules.setAttribute("href", window.location.href + "#general_rules");
                                        </script>
                                    </div>           
                                </div>
                                <div class="div col-lg-8 col-md-8 col-sm-8 terms">
                                    <div class="row" id="intro">
                                        <h3>GIỚI THIỆU</h3>
                                        <ol>
                                            <li>Chào mừng bạn đến với trang web 9amingHats của Nhóm 9 ("Trang Web"). Vui lòng đọc kỹ các Điều Khoản Dịch Vụ sau đây trước khi sử dụng Trang Web này hoặc trước khi mở một tài khoản ("Tài Khoản") để bạn biết được các quyền lợi và nghĩa vụ hợp pháp của mình liên quan đến trang web bán game (gọi riêng và gọi chung là "chúng tôi" hoặc "của chúng tôi").</li>
                                            <li>"Các Dịch Vụ" chúng tôi cung cấp hoặc phát hành bao gồm (a) Trang Web này, (b) các dịch vụ được cung cấp bởi Trang Web và bởi phần mềm khách hàng của Nhóm 9 được cung cấp thông qua Trang Web, và (c) mọi thông tin,các trang web được liên kết, các tính năng, dữ liệu, văn bản, hình ảnh,hình chụp, đồ họa, nhạc, âm thanh, video, thông báo, tag, nội dung, lập trình, phần mềm, các dịch vụ ứng dụng (bao gồm nhưng không giới hạn ở bất kỳ dịch vụ ứng dụng di động nào) hoặc các tài liệu khác được cung cấp thông qua Trang Web hoặc các dịch vụ liên quan của nó ("Nội Dung"). Bất kỳ tính năng mới nào được thêm vào hoặc để tăng cường Các Dịch Vụ đều phải tuân thủ các Điều Khoản Dịch Vụ này.</li>
                                            <li>BẰNG VIỆC SỬ DỤNG CÁC DỊCH VỤ HOẶC MỞ MỘT TÀI KHOẢN, BẠN CHO BIẾT RẰNG BẠN CHẤP NHẬN, KHÔNG RÚT LẠI, CÁC ĐIỀU KHOẢN DỊCH VỤ NÀY. NẾU BẠN KHÔNG ĐỒNG Ý VỚI CÁC ĐIỀU KHOẢN NÀY, VUI LÒNG KHÔNG SỬ DỤNG CÁC DỊCH VỤ CỦA CHÚNG TÔI HAY TRUY CẬP TRANG WEB. NẾU BẠN DƯỚI 18 TUỔI HOẶC "ĐỘ TUỔI TRƯỞNG THÀNH"PHÙ HỢP Ở NƠI BẠN SỐNG, BẠN PHẢI XIN PHÉP CHA MẸ HOẶC NGƯỜI GIÁM HỘ HỢP PHÁP ĐỂ MỞ MỘT TÀI KHOẢN VÀ CHA MẸ HOẶC NGƯỜI GIÁM HỘ HỢP PHÁP PHẢI ĐỒNG Ý VỚI CÁC ĐIỀU KHOẢN DỊCH VỤ NÀY. NẾU BẠN KHÔNG BIẾT BẠN CÓ THUỘC "ĐỘ TUỔI TRƯỞNG THÀNH" Ở NƠI BẠN SỐNG HAY KHÔNG, HOẶC KHÔNG HIỂU PHẦN NÀY, VUI LÒNG KHÔNG TẠO TÀI KHOẢN CHO ĐẾN KHI BẠN ĐÃ NHỜ CHA MẸ HOẶC NGƯỜI GIÁM HỘ HỢP PHÁP CỦA BẠN GIÚP ĐỠ. NẾU BẠN LÀ CHA MẸ HOẶC NGƯỜI GIÁM HỘ HỢP PHÁP CỦA MỘT TRẺ VỊ THÀNH NIÊN MUỐN TẠO MỘT TÀI KHOẢN, BẠN PHẢI CHẤP NHẬN CÁC ĐIỀU KHOẢN DỊCH VỤ NÀY THAY MẶT CHO TRẺ VỊ THÀNH NIÊN ĐÓ VÀ BẠN SẼ CHỊU TRÁCH NHIỆM ĐỐI VỚI TẤT CẢ HOẠT ĐỘNG SỬ DỤNG TÀI KHOẢN HAY CÁC DỊCH VỤ, BAO GỒM CÁC GIAO DỊCH MUA HÀNG DO TRẺ VỊ THÀNH NIÊN THỰC HIỆN, CHO DÙ TÀI KHOẢN CỦA TRẺ VỊ THÀNH NIÊN ĐÓ ĐƯỢC MỞ VÀO LÚC NÀY HAY ĐƯỢC TẠO SAU NÀY VÀ CHO DÙ TRẺ VỊ THÀNH NIÊN CÓ ĐƯỢC BẠN GIÁM SÁT TRONG GIAO DỊCH MUA HÀNG ĐÓ HAY KHÔNG.</li>
                                            <li>Chúng tôi có quyền chỉnh sửa các Điều Khoản Dịch Vụ này vào bất kỳ lúc nào mà không cần thông báo cho người dùng. Việc bạn tiếp tục sử dụng nội dung, sản phẩm Trang Web này, hoặc Tài Khoản của bạn sẽ được xem là sự chấp nhận, không rút lại đối với các điều khoản chỉnh sửa đó.</li>
                                            <li>Chúng tôi có quyền thay đổi, điều chỉnh, đình chỉ hoặc ngưng bất kỳ phần nào của Trang Web này hoặc Các Dịch Vụ vào bất kỳ lúc nào. 9gamingHats có thể ra mắt Các Dịch Vụ nhất định hoặc các tính năng của chúng trong một phiên bản beta, phiên bản này có thể không hoạt động chính xác hoặc theo cùng cách như phiên bản cuối cùng, và chúng tôi sẽ không chịu trách nhiệm pháp lý trong các trường hợp đó. Chúng tôi cũng có thể toàn quyền áp dụng giới hạn đối với các tính năng nhất định hoặc hạn chế quyền truy cập của bạn đối với một phần hoặc toàn bộ Trang Web hoặc Các Dịch Vụ mà không cần thông báo hoặc phải chịu trách nhiệm pháp lý.</li>
                                            <li>Chúng tôi có quyền từ chối cho phép bạn truy cập Trang Web hoặc Các Dịch Vụ hoặc cho phép bạn mở Tài Khoản vì bất kỳ lý do gì.</li>
                                        </ol>
                                    </div>
                                    <div class="row" id="security">
                                        <h3>BẢO MẬT</h3>
                                        <ol>
                                            <li>Chúng tôi rất coi trọng việc bảo mật thông tin của bạn. Để bảo vệ các quyền của bạn một cách hiệu quả hơn, chúng tôi đã cung cấp Chính Sách Bảo Mật tại High-man.com để giải thích chi tiết về các cách thức bảo mật thông tin của chúng tôi. Vui lòng xem Chính Sách Bảo Mật để hiểu được cách thức Chúng tôi thu thập và sử dụng thông tin liên kết với Tài Khoản của bạn và/hoặc việc bạn sử dụng Các Dịch Vụ. Bằng việc sử dụng Các Dịch Vụ hoặc đồng ý với các Điều Khoản Dịch Vụ này, bạn đồng ý cho phép Chúng tôi thu thập, sử dụng, tiết lộ và/hoặc xử lý Nội Dung và dữ liệu cá nhân của bạn như mô tả trong Chính Sách Bảo Mật này.</li>
                                            <li>Người dùng nào lưu giữ dữ liệu cá nhân của một người dùng khác ("Bên Nhận Thông Tin") phải (i) tuân thủ mọi điều luật bảo vệ dữ liệu cá nhân hiện hành; (ii) cho phép người dùng kia ("Bên Tiết Lộ Thông Tin") tự xóa tên mình ra khỏi cơ sở dữ liệu của Bên Nhận Thông Tin; và (iii) cho phép Bên Tiết Lộ Thông Tin xem các thông tin đã được Bên Nhận Thông Tin thu thập về họ.</li>
                                        </ol>
                                    </div>
                                    <div class="row" id="limited_use_rights">
                                        <h3>GIỚI HẠN VỀ QUYỀN SỬ DỤNG</h3>
                                        <ol>
                                            <li>Chúng tôi cấp cho bạn quyền sử dụng có giới hạn để truy cập và sử dụng Các Dịch Vụ tuân theo các điều khoản và điều kiện của Điều Khoản Dịch Vụ này vì mục đích sử dụng cá nhân. Việc cấp quyền này không cho phép bạn sử dụng vì bất kỳ mục đích thương mại nào hay sử dụng vì mục đích phái sinh đối với Các Dịch Vụ này (bao gồm nhưng không giới hạn ở bất kỳ yếu tố riêng lẻ nào hay Nội Dung của nó). Tất cả Nội Dung, thương hiệu, nhãn hiệu dịch vụ, tên thương hiệu, logo và tài sản trí tuệ khác được hiển thị trên Trang Web là tài sản của Chúng tôi và của các chủ sở hữu bên thứ ba được chỉ rõ trên Trang Web, nếu có. Bất kỳ đối tượng nào truy cập vào Trang Web đều không có quyền hoặc được cấp phép một cách trực tiếp hoặc gián tiếp sử dụng hoặc sao chép bất kỳ Nội dung, thương hiệu, nhãn hiệu dịch vụ, tên thương hiệu, logo hay bất kỳ tài sản trí tuệ nào khác và cũng không có đối tượng nào truy cập vào Trang Web được yêu cầu bất kỳ quyền, quyền sở hữu hay quyền lợi nào liên quan đến các đối tượng trên. Bằng việc sử dụng hoặc truy cập Các Dịch Vụ, bạn đồng ý tuân thủ các quy định pháp luật về sở hữu trí tuệ hiện hành đối với vấn đề bảo hộ bản quyền, thương hiệu, nhãn hiệu dịch vụ, Các Dịch Vụ, Trang Web và Nội Dung của nó. Bạn đồng ý không sao chép, phát tán, tái xuất bản, gửi, trưng bày công khai, trình diễn công khai, điều chỉnh, sửa đổi, cho thuê, bán, hay tạo phó bản của bất kỳ phần nào của Các Dịch Vụ, Trang Web hoặc Nội Dung của nó. Nếu không có sự đồng ý trước bằng văn bản của chúng tôi. Bạn cũng không được nhân bản hoặc chỉnh sửa một phần hay toàn bộ nội dung của Trang Web này trên máy chủ khác hoặc như một phần của bất kỳ trang web nào khác. Ngoài ra, bạn đồng ý rằng bạn sẽ không sử dụng bất kỳ công cụ robot, spider hay bất kỳ thiết bị tự động hay quy trình thủ công nào khác để theo dõi hay sao chép Nội Dung của chúng tôi, nếu không có sự đồng ý trước bằng văn bản của chúng tôi (thỏa thuận này áp dụng cho các công cụ tìm kiếm cơ bản trên các website kết nối người dùng trực tiếp đến website đó).</li>
                                            <li>Chúng tôi hoan nghênh bạn liên kết đến Trang Web này từ trang web của bạn, miễn là trang web của bạn không ngụ ý rằng Chúng tôi ủng hộ hay liên kết với trang web của bạn. Bạn thừa nhận rằng Chúng tôi, vào bất kỳ lúc nào, có thể tự quyền quyết định về việc ngừng cung cấp bất kỳ phần nào của Các Dịch Vụ mà không cần thông báo.</li>

                                        </ol>
                                    </div>
                                    <div class="row" id="software">
                                        <h3>PHẦN MỀM</h3>
                                        <p style=" margin-left: 30px;  font-family: BreeSerif_N;">
                                            Trừ phi kèm theo một thỏa thuận cấp phép riêng, bất kỳ phần mềm nào được chúng tôi cung cấp cho bạn như một phần của Các Dịch Vụ sẽ tuân thủ các điều khoản của Điều Khoản Dịch Vụ này. Phần mềm được cấp phép sử dụng, bán, và Chúng tôi bảo lưu tất cả các quyền đối với phần mềm mà Chúng tôi không cấp. Bất kỳ lệnh hay mã nào của bên thứ ba, được liên kết đến hoặc được tham chiếu từ Các Dịch Vụ, đều được cấp phép cho bạn bởi các bên thứ ba sở hữu các mã script hoặc mã đó, không phải bởi Chúng tôi.
                                        </p>
                                    </div>
                                    <div class="row" id="account_and_security">
                                        <h3>TÀI KHOẢN VÀ BẢO MẬT</h3>
                                        <ol>
                                            <li>Một số chức năng trong Các Dịch Vụ của chúng tôi yêu cầu phải đăng ký một Tài Khoản bằng cách chọn danh định người dùng duy nhất ("ID Người Dùng") và mật khẩu, và bằng cách cung cấp một số thông tin cá nhân nhất định. Nếu bạn chọn một ID Người Dùng mà Chúng tôi, theo quyết định của mình, thấy là phản cảm hoặc không thích hợp, Chúng tôi có quyền đình chỉ hoặc chấm dứt Tài Khoản của bạn. Bạn có thể sử dụng Tài Khoản của mình để tiếp cận/truy cập các sản phẩm, trang web hoặc dịch vụ mà chúng tôi đã cho phép truy cập hoặc chúng tôi đã có liên kết hay hợp tác. Chúng tôi đã không xem xét, hay nhận trách nhiệm đối với bất kỳ nội dung, chức năng, bảo mật, dịch vụ, chính sách bảo mật nào của bên thứ ba, hay các hoạt động khác của các sản phẩm, trang web hoặc dịch vụ đó. Trong trường hợp đó, điều khoản dịch vụ dành cho những sản phẩm, website, dịch vụ đó, gồm cả chính sách bảo mật tương ứng, vẫn được áp dụng khi bạn sử dụng sản phẩm, website, dịch vụ đó ngay cả khi những điều khoản bảo mật khác với Điều khoản dịch vụ/Chính sách bảo mật của chúng tôi.</li>
                                            <li>Bạn đồng ý (a) bảo mật mật khẩu của bạn và chỉ sử dụng ID Người Dùng và mật khẩu của bạn khi đăng nhập, (b) đảm bảo rằng bạn đăng xuất ra khỏi tài khoản của mình vào cuối mỗi phiên truy cập trên Trang Web, (c) thông báo ngay cho Chúng tôi biết bất kỳ trường hợp nào sử dụng trái phép ID Người Dùng và/hoặc mật khẩu của bạn, và (d) đảm bảo rằng thông tin Tài Khoản của bạn là chính xác và cập nhật. Bạn hoàn toàn chịu trách nhiệm đối với mọi hoạt động diễn ra dưới tên ID Người Dùng và Tài Khoản của bạn ngay cả khi các hoạt động hay việc sử dụng đó không phải do bạn thực hiện. Chúng tôi sẽ không chịu trách nhiệm pháp lý đối với bất kỳ tổn thất hay thiệt hại nào phát sinh từ việc mật khẩu của bạn bị sử dụng trái phép hoặc việc bạn không tuân thủ điều khoản này.</li>
                                            <li>Bạn đồng ý rằng Chúng tôi có thể, vì bất kỳ lý do gì, tự quyền quyết định và không cần thông báo hay chịu trách nhiệm pháp lý đối với bạn hay bất kỳ bên thứ ba nào, ngay lập tức chấm dứt Tài Khoản và ID Người Dùng của bạn, và xóa hay gỡ bỏ bất kỳ Nội Dung nào liên kết với Tài Khoản và ID Người Dùng của bạn ra khỏi Trang Web. Căn cứ chấm dứt tài khoản có thể bao gồm, nhưng không giới hạn (a) tài khoản không hoạt động trong thời gian dài, (b) vi phạm nội dung hoặc tinh thần của các Điều Khoản Dịch Vụ này, (c) có hành vi gian lận, quấy rối, lăng mạ, đe dọa hoặc xúc phạm hoặc (d) có hành vi gây hại cho người dùng khác, các bên thứ ba, hoặc lợi ích kinh doanh của Chúng tôi. Hành vi sử dụng Tài Khoản cho mục đích phi pháp, gian lận, quấy rối, lăng mạ, đe dọa hay xúc phạm có thể bị báo cho các cơ quan thực thi pháp luật mà không cần thông báo cho bạn. Nếu bạn nộp đơn khiếu kiện (cho dù nguyên nhân kiện là gì) hoặc chống lại Chúng tôi, hoặc liên quan đến Chúng tôi dưới bất kỳ hình thức nào, thì Chúng tôi có thể chấm dứt Tài Khoản của bạn.</li>
                                            <li>Bạn chỉ được sử dụng Các Dịch Vụ và/hoặc mở Tài Khoản nếu khu vực áp dụng của bạn cho phép bạn chấp nhận các Điều Khoản Dịch Vụ này.</li>
                                        </ol>
                                    </div>
                                    <div class="row" id="payment">
                                        <h3>CÁC KHOẢN PHÍ VÀ THANH TOÁN</h3>
                                        <ol>
                                            <li>Nếu có một khoản phí liên quan đến giao dịch nạp số dư hoặc bất kỳ phần nào của Các Dịch Vụ, bạn đồng ý thanh toán khoản phí đó để nhận số dư trong tài khoản 9amingHats hoặc để nhận quyền truy cập và/hoặc nhận quyền lợi của Các Dịch Vụ đó. Giá dành cho số dư ảo và Các Dịch Vụ không bao gồm các khoản thuế hiện hành và phí đổi tiền, trừ trường hợp qui định khác. Bạn hoàn toàn chịu trách nhiệm đóng các khoản thuế hay phí khác đó. Chúng tôi có thể đình chỉ hoặc hủy quyền truy cập của bạn vào Các Dịch Vụ nếu chúng tôi không nhận được thanh toán đầy đủ từ bạn trong thời hạn thanh toán quy định. Việc đình chỉ hoặc hủy Các Dịch Vụ vì không thanh toán có thể dẫn đến mất quyền truy cập và sử dụng Tài Khoản của bạn và Nội Dung của nó.</li>
                                            <li>Để thanh toán phí áp dụng cho số dư hoặc cho một Dịch Vụ, bạn sẽ được yêu cầu chọn một phương thức thanh toán trước khi bạn hoàn thành giao dịch mua hàng hoặc tại thời điểm bạn đăng ký Dịch Vụ đó. Bạn có thể truy cập và thay đổi thông tin tài khoản thanh toán và phương thức thanh toán của mình vào bất kỳ lúc nào. Bạn đồng ý cho phép Chúng tôi sử dụng bất kỳ thông tin tài khoản cập nhật nào về phương thức thanh toán của bạn được cung cấp bởi ngân hàng phát hành của bạn hoặc mạng lưới thanh toán áp dụng. Bạn đồng ý luôn cập nhật thông tin tài khoản thanh toán của bạn. Mọi thay đổi mà bạn thực hiện đối với tài khoản thanh toán của bạn sẽ không ảnh hưởng đến các khoản phí chúng tôi gửi đến tài khoản thanh toán của bạn trước khi chúng tôi có thể có hành động hợp lý đối với các thay đổi của bạn.</li>
                                            <li>Bằng việc cung cấp một phương thức thanh toán cho Chúng tôi, bạn:</li>
                                            <ol type="a">
                                                <li>Đảm bảo rằng bạn được phép sử dụng phương thức thanh toán mà bạn đã cung cấp và rằng bất kỳ thông tin thanh toán nào bạn cung cấp đều là đúng sự thực và chính xác;</li>
                                                <li>Cho phép Chúng tôi tính phí cho bạn đối với Các Dịch Vụ, dùng phương thức thanh toán mà bạn lựa chọn; </li>
                                                <li>Cho phép Chúng tôi tính phí cho bạn đối với bất kỳ tính năng có trả phí nào của Các Dịch Vụ mà bạn lựa chọn đăng ký hoặc sử dụng trong thời gian các Điều Khoản Dịch Vụ này có hiệu lực.</li>
                                                <li>Chúng tôi có thể thay đổi giá Dịch Vụ nào vào bất kỳ lúc nào. Nếu có một kỳ hạn và giá cố định đối với Dịch Vụ, giá đó sẽ vẫn có hiệu lực trong kỳ hạn đó.</li>
                                                <li>Một khi đã mua, số dư và game của bạn sẽ có giá trị vô thời hạn cho đến khi Tài Khoản của bạn bị chấm dứt vì bất kỳ lý do gì hoặc nếu chúng tôi không còn có thể phục vụ Tài Khoản của bạn một cách hợp pháp (ví dụ, nếu bạn không đồng ý cho chúng tôi sử dụng dữ liệu cá nhân của bạn nữa). Nếu Tài Khoản của bạn không có hoạt động, Chúng tôi có quyền xóa hoặc vô hiệu Tài Khoản của bạn và tất cả các số dư trong Tài khoản của bạn sẽ bị mất.</li>
                                                <li>Trừ phi có quy định khác theo luật hiện hành hoặc các điều khoản thành văn của một Dịch Vụ, mọi giao dịch mua hàng là cuối cùng và không hoàn lại. Bạn có thể hủy bất kỳ Dịch Vụ nào vào bất kỳ lúc nào nhưng mọi khoản thanh toán trước và tất cả số dư đã nạp là không hoàn lại.</li>
                                            </ol>
                                        </ol>
                                    </div>
                                    <div class="row" id="excluding_liability">
                                        <h3>LOẠI TRỪ TRÁCH NHIỆM</h3>
                                        <ol>
                                            <li>CÁC DỊCH VỤ ĐƯỢC CUNG CẤP THEO "NGUYÊN TRẠNG" VÀ KHÔNG CÓ BẤT KỲ SỰ ĐẢM BẢO, KHẲNG ĐỊNH HAY CAM ĐOAN NÀO CỦA CHÚNG TÔI DƯỚI BẤT KỲ HÌNH THỨC NÀO, THÀNH VĂN, BẤT THÀNH VĂN HAY THEO PHÁP ĐỊNH VỀ CÁC DỊCH VỤ, BAO GỒM NHƯNG KHÔNG GIỚI HẠN Ở ĐẢM BẢO CHẤT LƯỢNG, HIỆU SUẤT, KHÔNG VI PHẠM, TÍNH KHẢ MẠI, HAY TÍNH PHÙ HỢP CHO MỘT MỤC ĐÍCH CỤ THỂ, CŨNG KHÔNG CÓ BẤT KỲ SỰ ĐẢM BẢO NÀO ĐƯỢC TẠO RA BỞI QUÁ TRÌNH GIAO DỊCH, THỰC HIỆN HAY SỬ DỤNG THƯƠNG MẠI. KHÔNG GIỚI HẠN Ở NỘI DUNG BÊN TRÊN, CHÚNG TÔI KHÔNG ĐẢM BẢO RẰNG CÁC DỊCH VỤ, TRANG WEB NÀY HOẶC CÁC CHỨC NĂNG TRONG TRANG WEB ĐÓ SẼ LÀ KHẢ DỤNG, CÓ THỂ TRUY CẬP, KHÔNG BỊ GIÁN ĐOẠN, KỊP THỜI, AN TOÀN, CHÍNH XÁC, HOÀN CHỈNH HAY KHÔNG CÓ LỖI, RẰNG CÁC KHIẾM KHUYẾT, NẾU CÓ, SẼ ĐƯỢC KHẮC PHỤC, HAY RẰNG TRANG WEB NÀY VÀ/HOẶC MÁY CHỦ CUNG CẤP TRANG WEB NÀY LÀ KHÔNG CÓ VIRUS, ĐỒNG HỒ, HẸN GIỜ, BỘ ĐẾM, S U, KHÓA PHẦN MỀM, THIẾT BỊ DROP DEAD, THỜI HẠN, ĐỊNH TUYẾN, TRAP DOOR, BOM HẸN GIỜ HOẶC BẤT KỲ MÃ, CHỈ THỊ, CHƯƠNG TRÌNH HAY THÀNH PHẦN CÓ HẠI NÀO KHÁC.</li>
                                            <li>BẠN XÁC NHẬN RẰNG BẠN HOÀN TOÀN CHỊU RỦI RO PHÁT SINH TỪ VIỆC SỬ DỤNG HOẶC VẬN HÀNH TRANG WEB VÀ/HOẶC CÁC DỊCH VỤ THEO MỨC ĐỘ TỐI ĐA ĐƯỢC PHÁP LUẬT CHO PHÉP.</li>
                                            <li>Một số khu vực không cho phép loại trừ trách nhiệm đối với những bảo đảm bất thành văn, do đó một số hoặc tất cả tuyên bố loại trừ bên trên có thể không áp dụng cho bạn</li>
                                        </ol>
                                    </div>
                                    <div class="row" id="limited_liability">
                                        <h3>CÁC TRƯỜNG HỢP LOẠI TRỪ VÀ GIỚI HẠN TRÁCH NHIỆM PHÁP LÝ</h3>
                                        <ol>
                                            <li>TRONG MỌI TRƯỜNG HỢP, CHÚNG TÔI SẼ KHÔNG CHỊU TRÁCH NHIỆM PHÁP LÝ, DÙ LÀ DƯỚI HÌNH THỨC HỢP ĐỒNG, BẢO ĐẢM, LỖI DO SƠ SUẤT (DÙ LÀ CHỦ ĐỘNG, BỊ ĐỘNG HAY QUY GÁN), TRÁCH NHIỆM ĐỐI VỚI SẢN PHẨM HAY TRÁCH NHIỆM PHÁP LÝ HAY NGUYÊN NHÂN KHÁC), HOẶC NGUYÊN NHÂN TỐ TỤNG THEO LUẬT ĐỊNH, LUẬT LỆ, ĐỐI VỚI VIỆC MẤT QUYỀN SỬ DỤNG, MẤT LỢI NHUẬN, DOANH THU, UY TÍN HOẶC TIẾT KIỆM DỰ KIẾN HOẶC ĐỐI VỚI BẤT KỲ THIỆT HẠI GIÁN TIẾP, VÔ TÌNH, ĐẶC BIỆT HAY HẬU QUẢ NÀO (BAO GỒM NHƯNG KHÔNG GIỚI HẠN Ở MẤT DỮ LIỆU, GIÁN ĐOẠN DỊCH VỤ, LỖI MÁY TÍNH, ĐIỆN THOẠI DI ĐỘNG HAY THIẾT BỊ DI ĐỘNG) PHÁT SINH TỪ HOẶC LIÊN QUAN ĐẾN VIỆC SỬ DỤNG HAY KHÔNG THỂ SỬ DỤNG TRANG WEB NÀY HOẶC CÁC DỊCH VỤ, BAO GỒM, NHƯNG KHÔNG GIỚI HẠN, BẤT KỲ THIỆT HẠI NÀO PHÁT SINH TỪ ĐÓ, NGAY CẢ KHI CHÚNG TÔI ĐÃ ĐƯỢC THÔNG BÁO VỀ KHẢ NĂNG XẢY RA NHỮNG THIỆT HẠI ĐÓ.</li>
                                            <li>QUYỀN DUY NHẤT CỦA BẠN LIÊN QUAN ĐẾN CÁC SỰ CỐ HOẶC SỰ KHÔNG HÀI LÒNG NÀO VỚI CÁC DỊCH VỤ LÀ CHẤM DỨT TÀI KHOẢN CỦA BẠN VÀ NGƯNG SỬ DỤNG CÁC DỊCH VỤ.</li>
                                            <li>BẤT KỂ CÁC PHẦN TRƯỚC, NẾU CHÚNG TÔI BỊ TÒA ÁN CÓ THẨM QUYỀN TUYÊN LÀ PHẢI CHỊU TRÁCH NHIỆM PHÁP LÝ (ĐỐI VỚI LỖI BẤT CẨN HIỂN NHIÊN), TRÁCH NHIỆM PHÁP LÝ CỦA CHÚNG TÔI ĐỐI VỚI BẠN HOẶC ĐỐI VỚI BẤT KỲ BÊN THỨ BA NÀO KHÁC CHỈ GIỚI HẠN Ở MỨC DƯỚI 100.000 VNĐ (MỘT TRĂM NGHÌN ĐỒNG CHẴN).</li>
                                            <li>KHÔNG CÓ NỘI DUNG NÀO CỦA CÁC ĐIỀU KHOẢN DỊCH VỤ NÀY SẼ HẠN CHẾ HAY LOẠI TRỪ BẤT KỲ TRÁCH NHIỆM PHÁP LÝ NÀO ĐỐI VỚI TRƯỜNG HỢP TỬ VONG HOẶC THƯƠNG TẬT GÂY RA BỞI SỰ BẤT CẨN CỦA CHÚNG TÔI, ĐỐI VỚI SỰ GIAN LẬN HOẶC ĐỐI VỚI BẤT KỲ TRÁCH NHIỆM PHÁP LÝ NÀO KHÁC MÀ KHÔNG THỂ HẠN CHẾ VÀ/HOẶC LOẠI TRỪ MỘT CÁCH HỢP PHÁP.</li>
                                        </ol>
                                    </div>
                                    <div class="row" id="third_party_links">
                                        <h3>LIÊN KẾT ĐẾN CÁC TRANG CỦA BÊN THỨ BA</h3>
                                        <p style=" margin-left: 30px;  font-family: BreeSerif_N;">
                                            Các đường dẫn được cung cấp trên Trang Web này sẽ đưa người dùng rời khỏi Trang Web này. Các đường dẫn này chỉ mang tính tham khảo, và các trang mà chúng liên kết đến không thuộc quyền kiểm soát của Chúng tôi dưới bất kỳ hình thức nào và do đó bạn tự chịu rủi ro khi truy cập các trang đó. Do đó, Chúng tôi không chịu trách nhiệm dưới bất kỳ hình thức nào đối với nội dung của bất kỳ trang web bên thứ ba nào hoặc bất kỳ liên kết nào có trong một trang được liên kết bao gồm bất kỳ thay đổi hay cập nhật nào đối với các trang đó. Chúng tôi cung cấp các liên kết này ở đây chỉ nhằm mục đích thuận tiện cho bạn, và việc bao gồm bất kỳ liên kết nào không ngụ ý hay bày tỏ dưới bất kỳ hình thức nào về sự liên kết, ủng hộ hay tài trợ của Chúng tôi đối với bất kỳ trang web nào được liên kết và/hoặc bất kỳ nội dung nào của nó trong đó.
                                        </p>
                                    </div>
                                    <div class="row" id="term_of_use">
                                        <h3>ĐIỀU KHOẢN SỬ DỤNG</h3>
                                        <ol>
                                            <li>Quyền sử dụng Trang Web này và Các Dịch Vụ có hiệu lực đến khi bị chấm dứt. Quyền sử dụng này sẽ chấm dứt như quy định trong các Điều Khoản Dịch Vụ này hoặc nếu bạn không tuân thủ bất kỳ điều khoản hay điều kiện nào của các Điều Khoản Dịch Vụ này. Trong trường hợp đó, Chúng tôi sẽ không cần thông báo để áp dụng sự chấm dứt đó.</li>
                                            <li>Bạn đồng ý không?</li>
                                            <ol type="a">
                                                <li>Tải lên, đăng tin, gửi email, gửi hoặc cung cấp theo cách khác bất kỳ Nội Dung nào được cho là bất hợp pháp, có hại, đe dọa, xúc phạm, quấy rối, làm lo lắng, tra tấn, nhục mạ, phản cảm, tục tĩu, phỉ báng, xâm phạm quyền riêng tư của người khác, thù địch, hoặc phân biệt chủng tộc, sắc tộc hoặc các hành động đáng lên án khác;</li>
                                                <li>Sử dụng Các Dịch Vụ có thể gây hại cho trẻ vị thành niên dưới bất kỳ hình thức nào;</li>
                                                <li>Sử dụng Các Dịch Vụ để mạo danh bất kỳ cá nhân hay tổ chức nào; hoặc giả mạo khác việc bạn liên kết với một cá nhân hay tổ chức;</li>
                                                <li>Giả mạo các đầu đề hoặc thao túng khác đối với các yếu tố danh định nhằm che giấu nguồn gốc của bất kỳ Nội Dung nào được gửi qua Các Dịch Vụ;</li>
                                                <li>Xóa gỡ bất kỳ thông báo độc quyền nào ra khỏi Trang Web;</li>
                                                <li>Thực hiện, cho phép hoặc ủy quyền sửa đổi, tạo ra các bản phái sinh, hoặc biên dịch Các Dịch Vụ mà không được sự cho phép của Chúng tôi;</li>
                                                <li>Sử dụng Các Dịch Vụ vì bất kỳ mục đích thương mại nào hay vì lợi ích của bất kỳ bên thứ ba hoặc theo bất kỳ hình thức nào không được phép theo các quyền đã được cấp.</li>
                                                <li>Sử dụng Các Dịch Vụ vì mục đích gian lận;</li>
                                                <li>Tìm cách biên dịch giải mã, thay đổi cấu trúc kỹ thuật, tháo rời hoặc tấn công Các Dịch Vụ (hoặc bất kỳ phần nào của nó), hoặc thủ tiêu hay vượt qua bất kỳ công nghệ mã hóa hay biện pháp bảo mật nào mà Chúng tôi thực hiện liên quan đến Các Dịch Vụ và/hoặc dữ liệu được gửi, xử lý hoặc lưu trữ bởi Chúng tôi;</li>
                                                <li>Thu thập bất kỳ thông tin nào về các chủ Tài Khoản khác, bao gồm, nhưng không giới hạn các dữ liệu hay thông tin cá nhân;</li>
                                                <li>Tải lên, đăng, gửi email, gửi hoặc cung cấp dưới hình thức khác bất kỳ Nội Dung nào mà bạn không có quyền cung cấp theo bất kỳ điều luật nào hay theo các quan hệ hợp đồng hoặc ủy thác (chẳng hạn như thông tin nội gián, thông tin độc quyền và thông tin mật đã biết hoặc được tiết lộ trong các mối quan hệ tuyển dụng hoặc theo các thỏa thuận không tiết lộ thông tin);</li>
                                                <li>Tải lên, đăng, gửi email, gửi hoặc cung cấp dưới hình thức khác bất kỳ Nội Dung nào xâm phạm bất kỳ bằng sáng chế, thương hiệu, bí mật thương mại, bản quyền hay độc quyền khác của bất kỳ bên nào;</li>
                                                <li>Tải lên, đăng, gửi email, gửi hoặc cung cấp dưới hình thức khác bất kỳ tài liệu quảng cáo, quảng bá không được phép, "thư rác," "thư hàng loạt," "thư dây chuyền,", "quảng cáo đa cấp" hoặc bất kỳ hình thức câu kéo khác;</li>
                                                <li>Tải lên, đăng, gửi email, gửi hoặc cung cấp dưới hình thức khác bất kỳ tài liệu nào chứa virus, sâu, Trojan hoặc bất kỳ mã máy tính, trình tự, tập tin hay chương trình nào được thiết kế để trực tiếp hoặc gián tiếp cản trở, thao túng, làm gián đoạn, phá hủy hoặc hạn chế chức năng hay tính toàn vẹn của bất kỳ phần mềm hay phần cứng máy tính nào hay dữ liệu hoặc thiết bị viễn thông nào;</li>
                                                <li>Làm rối loạn đến mạch đối thoại bình thường, làm cho màn hình "cuộn" nhanh hơn mức người dùng Các Dịch Vụ có thể đánh máy, hoặc hành động khác theo cách ảnh hưởng tiêu cực đến khả năng tham gia trao đổi trong thời gian thực của người dùng khác.</li>
                                                <li>Làm gián đoạn, thao túng hoặc làm rối loạn Các Dịch Vụ hoặc các máy chủ hay mạng được kết nối với Các Dịch Vụ hoặc việc sử dụng Các Dịch Vụ của bất kỳ người dùng nào khác, hoặc không tuân thủ bất kỳ yêu cầu, thủ tục, chính sách hay quy định nào của các mạng được kết nối với Trang Web;</li>
                                                <li>Có bất kỳ hành động nào hay liên quan đến bất kỳ hành vi nào có thể trực tiếp hay gián tiếp làm thiệt hại, vô hiệu, gây áp lực quá mức, hoặc làm suy giảm Các Dịch Vụ hoặc các dịch vụ hay các mạng được kết nối với Các Dịch Vụ;</li>
                                                <li>Sử dụng Các Dịch Vụ để cố tình hay vô tình vi phạm bất kỳ điều luật, quy tắc, quy định, chỉ thị, hướng dẫn, chính sách hay quy định hiện hành nào của địa phương, tiểu bang, quốc gia hoặc quốc tế bao gồm nhưng không giới hạn ở các điều luật và qui định (cho dù có hiệu lực pháp luật hay không) liên quan đến chống rửa tiền hoặc chống khủng bố;</li>
                                                <li>Sử dụng Các Dịch Vụ để cung cấp sự hỗ trợ vật chất hoặc nguồn lực (hoặc để che giấu hay ngụy trang bản chất, địa điểm, nguồn gốc, hoặc quyền sở hữu đối với sự hỗ trợ vật chất hay nguồn lực) cho bất kỳ tổ chức nào bị chính phủ Hoa Kỳ xem là một tổ chức khủng bố nước ngoài tuân theo mục 219 của Luật Nhập Cư và Quốc Tịch;</li>
                                                <li>Sử dụng Các Dịch Vụ để xâm phạm quyền riêng tư của người khác hoặc để "lén theo dõi" hoặc quấy rối một người khác và/hoặc</li>
                                                <li>Sử dụng Các Dịch Vụ để thu thập hoặc lưu lại dữ liệu cá nhân về người dùng khác liên quan đến hành vi và các hoạt động bị cấm bên trên.</li>
                                            </ol>
                                            <li>Bạn hiểu rằng mọi Nội Dung, cho dù được đăng công khai hay gửi riêng tư, là do người gửi Nội Dung đó hoàn toàn chịu trách nhiệm. Điều này có nghĩa là bạn, chứ không phải Chúng tôi, hoàn toàn chịu trách nhiệm đối với mọi Nội Dung bạn tải lên, đăng, gửi email, gửi hoặc cung cấp theo hình thức khác thông qua Trang Web. Chúng tôi không kiểm soát Nội Dung đăng trên Trang Web và, như thế, không đảm bảo tính chính xác, tính toàn vẹn hay chất lượng của Nội Dung đó. Bạn hiểu rằng bằng việc sử dụng Trang Web này, bạn có thể tiếp xúc với Nội Dung mà bạn có thể cho là khiếm nhã, đáng lên án hoặc có tính công kích. Trong mọi trường hợp, Chúng tôi sẽ không chịu trách nhiệm pháp lý dưới bất kỳ hình thức nào đối với bất kỳ Nội Dung nào, bao gồm, nhưng không giới hạn, lỗi hay thiếu sót trong bất kỳ Nội Dung nào, hay bất kỳ tổn thất hay thiệt hại nào dưới bất kỳ hình thức nào phát sinh từ việc sử dụng hoặc dựa vào bất kỳ Nội Dung nào được đăng tải, email, truyền tải hoặc cung cấp trên Trang Web</li>
                                            <li>Bạn xác nhận rằng Chúng tôi có thể hoặc có thể không sàng lọc trước Nội Dung nhưng Chúng tôi và những người được chỉ định của họ sẽ có toàn quyền (nhưng không phải là nghĩa vụ) sàng lọc trước, từ chối, xóa hay gỡ bỏ bất kỳ Nội Dung nào được đăng trên Trang Web. Không giới hạn các quy định trên, Chúng tôi và những người được chỉ định sẽ có quyền gỡ bỏ bất kỳ Nội Dung nào vi phạm các Điều Khoản Dịch Vụ này, nếu chúng tôi nhận được khiếu nại từ một người dùng khác, nếu chúng tôi nhận được thông báo về sự xâm phạm tài sản trí tuệ hoặc yêu cầu có giá trị pháp lý khác đề nghị gỡ bỏ, hoặc nếu Nội Dung đó là đáng lên án theo cách khác. Chúng tôi cũng có thể chặn đường gửi một nội dung liên lạc (bao gồm nhưng không giới hạn cập nhật trạng thái, bài đăng, tin nhắn và/hoặc chat) đến hoặc từ Các Dịch Vụ như một phần trong nỗ lực của chúng tôi để bảo vệ Các Dịch Vụ hoặc người dùng của chúng tôi, hoặc nếu không thì là thực thi các điều khoản trong các Điều Khoản và Điều Kiện này. Bạn đồng ý rằng bạn phải tự đánh giá được và chịu mọi rủi ro liên quan đến việc sử dụng bất kỳ Nội Dung nào, bao gồm cả độ tin cậy vào tính chính xác, tính đầy đủ, hay tính hữu ích của Nội Dung đó. Về mặt này, bạn xác nhận rằng bạn không được dựa vào bất kỳ Nội Dung nào tạo bởi Chúng tôi hoặc được gửi cho Chúng tôi, bao gồm, nhưng không giới hạn thông tin trong các Diễn Đàn Chúng tôi và trong bất kỳ phần nào khác của Trang Web.</li>
                                            <li>Bạn xác nhận và đồng ý rằng Chúng tôi có thể truy cập, bảo lưu và tiết lộ thông tin tài khoản của bạn và Nội Dung của bạn nếu luật quy định điều đó hoặc tuân theo lệnh của tòa hoặc theo yêu cầu của bất kỳ cơ quan chính phủ hay cơ quan quản lý nào có thẩm quyền đối với Chúng tôi hoặc vì thiện chí cho rằng sự bảo lưu truy cập hay tiết lộ đó là cần thiết một cách hợp lý để: (a) tuân thủ quy trình pháp lý; (b) thực thi các Điều Khoản Dịch Vụ này; (c) phản hồi một đơn khiếu kiện cho rằng Nội Dung vi phạm quyền của các bên thứ ba; (d) phản hồi yêu cầu của bạn đối với dịch vụ chăm sóc khách hàng; hoặc (e) bảo vệ quyền lợi, tài sản hoặc sự an toàn cá nhân của Chúng tôi, người dùng của của Chúng tôi và/hoặc công chúng.</li>

                                        </ol>
                                    </div>
                                    <div class="row" id="violate">
                                        <h3>VI PHẠM CÁC ĐIỀU KHOẢN DỊCH VỤ CỦA CHÚNG TÔI</h3>
                                        <p style=" margin-left: 30px;  font-family: BreeSerif_N;">
                                            Nếu bạn cho rằng một người dùng trên Trang Web của chúng tôi đang vi phạm các Điều Khoản Dịch Vụ này, vui lòng liên hệ với cskh.9h@gmail.com
                                        </p>
                                    </div>
                                    <div class="row" id="your_assure">
                                        <h3>ĐẢM BẢO VÀ CAM ĐOAN CỦA BẠN</h3>
                                        <p style=" margin-left: 30px;  font-family: BreeSerif_N;">Bạn đảm bảo và cam đoan rằng: </p>
                                        <ol>
                                            <li>Bạn có năng lực pháp lý (và trong trường hợp là trẻ vị thành niên, có sự đồng ý hợp lệ của cha mẹ hoặc người giám hộ hợp pháp), có quyền và khả năng ký kết các Điều Khoản Dịch Vụ này và tuân thủ các điều khoản của nó;</li>
                                            <li>Bạn sẽ chỉ sử dụng Các Dịch Vụ cho các mục đích hợp pháp và tuân theo các Điều Khoản Dịch Vụ này và mọi điều luật, quy định, quy tắc, chỉ thị, hướng dẫn, chính sách và quy định hiện hành;</li>
                                            <li>Bạn sẽ chỉ sử dụng Các Dịch Vụ trên một máy tính mà việc sử dụng đó được chủ máy tính cho phép.</li>
                                        </ol>
                                    </div>
                                    <div class="row" id="indemnify">
                                        <h3>BỒI THƯỜNG</h3>
                                        <p style="margin-left: 30px; font-family: BreeSerif_N;">1.	Bạn đồng ý bồi thường, bảo vệ và miễn trách nhiệm cho Chúng tôi, và cổ đông cán bộ, đại diện, đồng sở hữu hoặc các đối tác khác và nhân viên của Chúng tôi (gọi chung là "Các Bên Được Miễn"), bằng chi phí của bạn, đối với bất kỳ và tất cả khiếu kiện, kiện tụng, thủ tục, và mọi trách nhiệm pháp lý liên quan, thiệt hại, giải quyết, trừng phạt, phạt tiền, chi phí và phí tổn (bao gồm nhưng không giới hạn ở phí luật sư hợp lý và các chi phí giải quyết bất đồng khác) mà bất kỳ Bên Được Miễn nào phải chịu phát sinh từ hoặc liên quan đến (a) việc đặt máy chủ, điều hành, quản lý và/hoặc quản trị Các Dịch Vụ bởi hoặc thay mặt Chúng tôi, (b) việc bạn vi phạm hay xâm phạm bất kỳ điều khoản nào của các Điều Khoản Dịch Vụ này hoặc bất kỳ chính sách hay hướng dẫn nào được tham chiếu trong đây, hoặc (c) việc bạn sử dụng hay sử dụng không đúng cách Các Dịch Vụ, hoặc (e) việc bạn vi phạm bất kỳ điều luật hay quyền nào của một bên thứ ba.</p>
                                    </div>
                                    <div class="row" id="effect">
                                        <h3>TÍNH CÓ HIỆU LỰC TỪNG PHẦN</h3>
                                        <p style="margin-left: 30px; font-family: BreeSerif_N;">
                                            Nếu bất kỳ quy định nào của các Điều Khoản Dịch Vụ này bị xem là trái luật, vô hiệu, hoặc không thể thực thi vì bất kỳ lý do gì theo luật pháp của bất kỳ khu vực nào, thì quy định đó sẽ được xem là tách biệt với các điều khoản và điều kiện này và sẽ không ảnh hưởng đến tính hợp lệ và khả năng thực thi của bất kỳ quy định nào còn lại trong khu vực đó hoặc tính hợp lệ hay khả năng thực thi của quy định đang bàn tới theo luật pháp của bất kỳ khu vực nào khác.
                                        </p>
                                    </div>
                                    <div class="row" id="ajust"> 
                                        <h3>LUẬT ĐIỀU CHỈNH</h3>
                                        <p style="margin-left: 30px; font-family: BreeSerif_N;">
                                            Các Điều Khoản Dịch Vụ này sẽ được điều chỉnh bởi và được giải thích theo luật pháp Cộng hòa xã hội chủ nghĩa Việt Nam, bất kể nó có mâu thuẫn với các quy tắc pháp luật hay không. Trong phạm vi áp dụng của các Điều Khoản Dịch vụ, Công Ước Liên Hiệp Quốc về Hợp Đồng Mua Bán Hàng Hóa Quốc Tế và Luật giao dịch điện tử, sẽ không được áp dụng. Bất kỳ bất đồng, tranh cãi, khiếu kiện hay khác biệt nào dưới bất kỳ hình thức nào phát sinh từ hoặc liên quan đến các Điều Khoản Dịch Vụ chống lại hoặc liên quan đến Chúng tôi hoặc bất kỳ Bên Được Miễn nào theo các Điều Khoản Dịch Vụ này sẽ được giải quyết bằng phương thức trọng tài tại Trung tâm trọng tài quốc tế Việt Nam (VIAC) bên cạnh Phòng thương mại và Công nghiệp Việt Nam (VCCI) và theo các Nguyên Tắc Trọng Tài của Trung tâm Trọng tài Quốc tế Việt Nam (Arbitration Rules of the Vietnam International Arbitration Centre) ("VIAC") các nguyên tắc đó được xem là đã được đưa vào Phần này để tham khảo. Sẽ có một (1) trọng tài viên và ngôn ngữ trọng tài sẽ là tiếng Anh.
                                        </p>
                                    </div>
                                    <div class="row" id="general_rules">
                                        <h3>CÁC QUY ĐỊNH CHUNG</h3>
                                        <ol>
                                            <li>Chúng tôi bảo lưu tất cả các quyền không được cấp rõ trong đây.</li>
                                            <li>Chúng tôi có thể điều chỉnh các Điều Khoản Dịch Vụ này vào bất kỳ lúc nào bằng cách đăng các Điều Khoản Dịch Vụ đã chỉnh sửa lên Trang Web này. Việc bạn tiếp tục sử dụng Trang Web này sau khi những thay đổi đó đã được đăng sẽ cấu thành việc bạn chấp nhận các Điều Khoản Dịch Vụ đã chỉnh sửa đó.</li>
                                            <li>Bạn không được chuyển nhượng, cấp phép con hay chuyển giao bất kỳ quyền nào đã cấp cho bạn theo đây hoặc lập hợp đồng phụ bất kỳ nghĩa vụ nào của bạn.</li>
                                            <li>Không nội dung nào trong các Điều Khoản Dịch Vụ này sẽ cấu thành sự hợp tác, liên doanh hay quan hệ người ủy thác-đại lý giữa bạn và Chúng tôi, cũng không cho phép bạn chịu bất kỳ chi phí hay trách nhiệm pháp lý nào thay mặt Chúng tôi.</li>
                                            <li>Việc Chúng tôi, vào bất kỳ lúc nào, không yêu cầu thực hiện bất kỳ quy định nào trong đây sẽ không ảnh hưởng dưới bất kỳ hình thức nào đến quyền của nó sau này được thực thi quy định đó trừ phi có văn bản miễn áp dụng quy định đó.</li>
                                            <li>Các Điều Khoản Dịch Vụ này chỉ nhằm vì lợi ích của bạn và của chúng tôi và không vì lợi ích của bất kỳ cá nhân hay tổ chức nào khác, trừ các công ty liên kết và các công ty con của Chúng tôi (và từng người thừa nhiệm và người được chỉ định của Chúng tôi và các công ty liên kết và các công ty con của nó).</li>
                                            <li>Các điều khoản được đặt ra trong các Điều Khoản Dịch Vụ này và bất kỳ thỏa thuận và chính xác nào được đưa vào hoặc tham chiếu trong các các Điều Khoản Dịch Vụ này cấu thành toàn bộ thỏa thuận và cam kết của các bên về Các Dịch Vụ và Trang Web này và thay thế bất kỳ thỏa thuận hay cam kết nào trước đây giữa các bên liên quan đến vấn đề đó. Các bên theo đây loại trừ tất cả các điều khoản bất thành văn. Khi ký kết thỏa thuận được tạo thành bởi các Điều Khoản Dịch Vụ này, các bên đã không dựa vào bất kỳ phát biểu, đảm bảo, cam quan, cam kết, hứa hẹn nào của bất kỳ cá nhân nào ngoài trường hợp được quy định rõ trong các Điều Khoản Dịch Vụ này. Mỗi bên khước từ, không rút lại và vô điều kiện, mọi khiếu kiện, quyền và quyền được bồi thường mà nếu không có Phần này có thể đã có liên quan đến bất kỳ quy định nào phía trên. Các Điều Khoản Dịch Vụ này có thể không được phủ nhận, giải thích hay bổ sung bởi bằng chứng của bất kỳ thỏa thuận nào trước đây, bất kỳ thỏa thuận miệng đồng thời nào hoặc bất kỳ điều khoản bổ sung nhất quán nào.</li>
                                            <li>Bạn đồng ý tuân thủ tất cả điều luật, quy chế, quy định và quy tắc hiện hành liên quan đến chống hối lộ và tham nhũng bao gồm nhưng không giới hạn Luật Chống Hối Lộ của Vương Quốc Anh, Đạo Luật Chống Tham Nhũng Ở Nước Ngoài của Hoa Kỳ và Luật Phòng Chống Tham Nhũng của Việt Nam và xác nhận rằng bạn có và đã áp dụng mọi chính sách và thủ tục cần thiết để đảm bảo tuân thủ các yêu cầu đó.</li>
                                            <li>Nếu bạn có bất kỳ thắc mắc hay quay nại nào về các Điều Khoản Dịch Vụ này hoặc bất kỳ vấn đề nào được nêu ra trong các Điều Khoản Dịch Vụ này hoặc trên Trang Web, vui lòng liên hệ với chúng tôi tại: cskh.9h@gmail.com</li>
                                        </ol>
                                    </div>
                                    <div class="row">
                                        <p>TÔI ĐÃ ĐỌC THỎA THUẬN NÀY VÀ ĐỒNG Ý VỚI TẤT CẢ CÁC QUY ĐỊNH CÓ TRONG NỘI DUNG BÊN TRÊN VÀ BẤT KỲ BẢN CHỈNH SỬA NÀO CỦA NỘI DUNG BÊN TRÊN SAU NÀY. BẰNG VIỆC NHẤP VÀO NÚT "ĐĂNG KÝ NGAY" HOẶC BẤT KỲ THAO TÁC NÀO TƯƠNG TỰ BÊN DƯỚI, TÔI HIỂU RẰNG TÔI ĐANG TẠO RA MỘT CHỮ KÝ ĐIỆN TỬ MÀ TÔI HIỂU RẰNG NÓ CÓ GIÁ TRỊ VÀ HIỆU LỰC TƯƠNG TỰ NHƯ CHỮ KÝ TÔI KÝ BẰNG TAY.</p>
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