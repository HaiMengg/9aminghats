<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Thư viện game</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/Library_style_GH.css">
    </head>
    <body>
        <main class="container-fluid">
            <div class="row" id="main">
                <div class="col-sm-4" id="left-panel">
                    <a href="#">
                        <img src="../resources/Library/logo.png" width="90%">
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
                            <a class="select" href="#">
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
                    <div id="info-container">
                        <div class="row game-row">
                            <div class="col-sm-6 game">
                                <div class="game-icon">
                                    <img class="logo-rectangle" src="../resources/Library/games/melty-blood.png">
                                </div>
                                <div class="game-name" id="melty-blood">
                                    MELTY BLOOD: TYPE LUMINA
                                </div>
                                <a id="download-btn" href="#">
                                    Tải game
                                </a>
                            </div>
                            <div class="col-sm-6 game">
                                <div class="game-icon">
                                    <img class="logo-rectangle" src="../resources/Library/games/idolmaster.png">
                                </div>
                                <div class="game-name" id="melty-blood">
                                    THE IDOLM@STER: STARLIT SEASON
                                </div>
                                <a id="download-btn" href="#">
                                    Tải game
                                </a>
                            </div>
                        </div>
                        <div class="row game-row">
                            <div class="col-sm-6 game">
                                <div class="game-icon">
                                    <img class="logo-square" src="../resources/Library/games/minecraft.png">
                                </div>
                                <div class="game-name" id="melty-blood">
                                    Minecraft
                                </div>
                                <a id="download-btn" href="#">
                                    Tải game
                                </a>
                            </div>
                            <div class="col-sm-6 game">
                                <div class="game-icon">
                                    <img class="logo-square" src="../resources/Library/games/osu.png">
                                </div>
                                <div class="game-name" id="melty-blood">
                                    osu!
                                </div>
                                <a id="download-btn" href="#">
                                    Tải game
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>