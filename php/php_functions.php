<?php
    function ConnectDB() {
        $DB_SERVER = 'localhost';
        $DB_USER = 'dpreqxgt_adminmike';
        $DB_PASSWORD = 'Highman.2410';
        $DB_NAME = 'dpreqxgt_9aminghats';
        $connect = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);
        if (!$connect) {
            die("Connection error: " . mysqli_connect_error());
        }
        else {
            $connect->set_charset("utf8mb4");
            return $connect;   //Pass returned value to mysqli_query
        }
    }

    function FetchFromDB($mysqli_conn, $dataToFetch) {
        return $mysqli_conn->query($dataToFetch);
    }

    function FileProcessing($filePath, $content = "") {
        if ($content != "") {
            file_put_contents($filePath, $content, LOCK_EX);
            return true;
        }
        else {
            $string = file_get_contents($filePath);
            return $string;
        }
    }

    function ArrayStartAppend($array, $newValue) {
        for ($i = 0; $i <= count($array) - 1; $i++) {
            $array[$i + 1] = $array[$i];
        }
        $array[0] = $newValue;
        return $array;
    }

    function StringToDate($date_string) {    //The format has to be dd/mm/yyyy
        $date = date_create_from_format('d/m/Y', $date_string);
        return $date;
    }

    /*
    Mode:
        1: Fetch new games
        2: Fetch free games
        3: Fetch recommended games
        4: Fetch favorite genres
    */
    function FindGames($mode, $maxDisplay) {        
        $foundGames = array();
        $foundGameNum = array();
        $foundLogoFile = array();
        if ($mode == 1) {
            $today = date_create_from_format("d/m/Y", date('d/m/Y'));
            $date_raw = FetchFromDB(ConnectDB(), "SELECT RELEASEDATE FROM DB_GAMES");
            $gamesData = FetchFromDB(ConnectDB(), "SELECT `NAME` FROM DB_GAMES")->fetch_all();
            if ($date_raw->num_rows > 1) {
                $date_rows = $date_raw->fetch_all();
                for ($x = 0; $x <= count($date_rows) - 1; $x++) {
                    $date = date_create_from_format("d/m/Y", $date_rows[$x][0]);
                    $diff = $today->getTimestamp() - $date->getTimestamp();
                    $diff = $diff / 60 / 60 / 24 / 365;         //Calculator time interval from seconds to years 
                    if ($diff <= 1) {
                        array_push($foundGames, $gamesData[$x][0]);
                    }
                }
                shuffle($foundGames);
                if (count($foundGames) > $maxDisplay) {                         //In case user does not want to display all the games found and only a portion of them
                    array_splice($foundGames, $maxDisplay, count($foundGames) - 1, null);
                }
                for ($x = 0; $x <= count($foundGames) - 1; $x++) {
                    $game = $foundGames[$x];
                    $logoDir = $_SERVER["DOCUMENT_ROOT"] . "/resources/DB_GAMES/" . $game . "/";
                    array_push($foundLogoFile, "resources/DB_GAMES/" . $game . "/" . GetFileNoExtension($logoDir, "logo"));

                    $gameNum = FetchFromDB(ConnectDB(), "SELECT NUMCOUNTER FROM DB_GAMES WHERE `NAME`='" . $foundGames[$x] . "'")->fetch_row();
                    array_push($foundGameNum, $gameNum[0]);
                }
            }
        }
        else if ($mode == 2) {
            $gamesData = FetchFromDB(ConnectDB(), "SELECT `NAME` FROM DB_GAMES WHERE PRICE='FREE'")->fetch_all();
            for ($x = 0; $x <= count($gamesData) - 1; $x++) {
                array_push($foundGames, $gamesData[$x][0]);
            }
            shuffle($foundGames);
            if (count($foundGames) > $maxDisplay) {                         //In case user does not want to display all the games found and only a portion of them
                array_splice($foundGames, $maxDisplay, count($foundGames) - 1, null);
            }
            for ($x = 0; $x <= count($foundGames) - 1; $x++) {
                $game = $foundGames[$x];
                $logoDir = $_SERVER["DOCUMENT_ROOT"] . "/resources/DB_GAMES/" . $game . "/";
                array_push($foundLogoFile, "resources/DB_GAMES/" . $game . "/" . GetFileNoExtension($logoDir, "logo"));

                $gameNum = FetchFromDB(ConnectDB(), "SELECT NUMCOUNTER FROM DB_GAMES WHERE `NAME`='" . $foundGames[$x] . "'")->fetch_row();
                array_push($foundGameNum, $gameNum[0]);
            }
        }
        else if ($mode == 3) {
            $gamesData = FetchFromDB(ConnectDB(), "SELECT `NAME` FROM DB_GAMES")->fetch_all();
            for ($x = 0; $x <= count($gamesData) - 1; $x++) {
                array_push($foundGames, $gamesData[$x][0]);
            }
            shuffle($foundGames);
            if (count($foundGames) > $maxDisplay) {                         //In case user does not want to display all the games found and only a portion of them
                array_splice($foundGames, $maxDisplay, count($foundGames) - 1, null);
            }
            for ($x = 0; $x <= count($foundGames) - 1; $x++) {
                $game = $foundGames[$x];
                $logoDir = $_SERVER["DOCUMENT_ROOT"] . "/resources/DB_GAMES/" . $game . "/";
                array_push($foundLogoFile, "resources/DB_GAMES/" . $game . "/" . GetFileNoExtension($logoDir, "logo"));

                $gameNum = FetchFromDB(ConnectDB(), "SELECT NUMCOUNTER FROM DB_GAMES WHERE `NAME`='" . $foundGames[$x] . "'")->fetch_row();
                array_push($foundGameNum, $gameNum[0]);
            }
        }
        $foundGameData = array(
            0 => $foundGames,
            1 => $foundLogoFile,
            2 => $foundGameNum
        );
        return $foundGameData;
    }

    function GetFileNoExtension($dir, $fileName) {          //Get the name of a file regardless of its extension (might cause bug if there are two files with identical names but different extension)
        $propertyList = scandir($dir);
        for ($x = 0; $x <= count($propertyList) - 1; $x++) {
            if (strpos($propertyList[$x], $fileName) !== false) {
                return $propertyList[$x]; 
            }
        }
    }


    function GetGameData($dataName, $gameNO) {
        $requestedData = FetchFromDB(ConnectDB(), "SELECT `" . $dataName . "` FROM DB_GAMES WHERE `NUMCOUNTER`=" . $gameNO)->fetch_row();
        $urlpos = strpos($requestedData[0], "watch?v=") + 8;
        if ($dataName == "TRAILER") {
            $requestedData[0] = substr($requestedData[0], $urlpos, strlen($requestedData[0]) - $urlpos);
            return $requestedData[0];
        }
        else if ($dataName == "GENRE") {
            $genresNum = explode("-",$requestedData[0]);
            $genresString = array();
            for ($i = 0; $i <= count($genresNum) - 1; $i++) {
                $queryResult = FetchFromDB(ConnectDB(), "SELECT `Genre` FROM DB_GENRES WHERE `No.`=" . $genresNum[$i])->fetch_row();
                array_push($genresString, $queryResult[0]);
            }
            return $genresString;
        }
        else if ($dataName == "METACRITS") {
            if ($requestedData[0] == 0) return "Chưa cập nhật";
            else return $requestedData[0];
        }
        else return $requestedData[0];
    }

    function GetGameImage($gameDir) {
        $imgArray = array();
        $propertyList = scandir($gameDir);
        for ($i = 0; $i <= count($propertyList) - 1; $i++) {
            if (strpos($propertyList[$i], "png") !== false || strpos($propertyList[$i], "jpg") !== false || strpos($propertyList[$i], "jpeg") !== false) {
                if (intval(substr($propertyList[$i], 0, 1)) != 0) {
                    array_push($imgArray, $gameDir . $propertyList[$i]);
                }
            }
        }
        return $imgArray;
    }

    function GetGameLogo($gameDir) {
        $propertyList = scandir($gameDir);
        for ($i = 0; $i <= count($propertyList) - 1; $i++) {
            if (strpos($propertyList[$i], "logo") !== false) {
                return $gameDir . $propertyList[$i];
            }
        }
    }


    function CreatePage($name, $content, $dir) {
        $template = FileProcessing($_SERVER["DOCUMENT_ROOT"] . "/pages/template/gameinfo.php");
        $insertion = "<!--Where the magic happens-->";
        $new_string = str_replace($insertion, $content, $template);
        FileProcessing($dir . $name, $new_string);
    }

    $gameName = $_POST['name'];
    $gameNumcounter = $_POST['num'];
    if (isset($gameName) !== false) {
        CreatePage("gamepage.php", 
        "<?php $" . "gameNumber=" . $gameNumcounter . "; $" . "gameDir='" . "resources/DB_GAMES/" . $gameName . "/'; ?>", 
        $_SERVER["DOCUMENT_ROOT"] . "/resources/DB_GAMES/" . $gameName . "/");
    }
?>