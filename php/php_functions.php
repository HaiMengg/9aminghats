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
        $requestedData = FetchFromDB(ConnectDB(), "SELECT `$dataName` FROM DB_GAMES WHERE `NUMCOUNTER`=$gameNO")->fetch_row();
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
    if (isset($gameName) && isset($gameNumcounter)) {
        CreatePage("gamepage.php", 
        "<?php $" . "gameNumber=" . $gameNumcounter . "; $" . "gameDir='" . "resources/DB_GAMES/" . $gameName . "/'; ?>", 
        $_SERVER["DOCUMENT_ROOT"] . "/resources/DB_GAMES/" . $gameName . "/");
    }

    function CalculateMoney($gameNumcounter, $username, $mode = 1) {
        $userWallet = FetchFromDB(ConnectDB(), "SELECT `WALLET` FROM DB_USER WHERE `USERNAME`='$username'")->fetch_row();
        if ($mode === 1) {
            $gamePrice = FetchFromDB(ConnectDB(), "SELECT `PRICE` FROM DB_GAMES WHERE `NUMCOUNTER`=$gameNumcounter")->fetch_row();
            
            if ($gamePrice[0] == "FREE") {
                $gamePriceStr = 0;
            }
            else {
                $gamePriceStr = str_replace(".", "", $gamePrice[0]); $gamePriceStr = str_replace(" VND", "", $gamePriceStr); $gamePriceStr = intval($gamePriceStr);
            }
            
            $remainingMoney = $userWallet[0] - $gamePriceStr;
            if ($remainingMoney >= 0) {
                return json_encode(array("result" => 1, "gamePrice" => $gamePriceStr, "userWallet" => $userWallet[0], "remainingMoney" => $remainingMoney));
            }
            else return json_encode(array("result" => 2, "gamePrice" => $gamePriceStr, "userWallet" => $userWallet[0], "remainingMoney" => $remainingMoney));
        }
        else return json_encode(array("result" => 3, "remainingMoney" => $userWallet));
    }

    function PostPurchase($gameNum, $userWallet, $type, $token) {
        $userCookie = $_COOKIE['username'];
        
        //Fetch existing user data
        $prefArray = FetchFromDB(ConnectDB(), "SELECT `PREFERENCES` FROM DB_USER WHERE `USERNAME`='$userCookie'")->fetch_row(); $prefArray = $prefArray[0];
        $prefArray = explode("-", $prefArray);

        $historyNameArray = FetchFromDB(ConnectDB(), "SELECT `HISTORY_NAME` FROM DB_USER WHERE `USERNAME`='$userCookie'")->fetch_row(); $historyNameArray = $historyNameArray[0];
        $historyNameArray = explode("-", $historyNameArray);

        $historyDateArray = FetchFromDB(ConnectDB(), "SELECT `HISTORY_DATE` FROM DB_USER WHERE `USERNAME`='$userCookie'")->fetch_row(); $historyDateArray = $historyDateArray[0];
        $historyDateArray = explode("-", $historyDateArray);

        //Fetch newly created data
        $userPref = FetchFromDB(ConnectDB(), "SELECT `GENRE` FROM DB_GAMES WHERE `NUMCOUNTER`=$gameNum")->fetch_row(); $userPref = $userPref[0];
        $userPref = explode("-", $userPref);
        $userHistoryName = FetchFromDB(ConnectDB(), "SELECT `NUMCOUNTER` FROM DB_GAMES WHERE `NUMCOUNTER`=$gameNum")->fetch_row();
        $userHistoryDate = date("d/m/Y"); $userHistoryDate = array(0 => $userHistoryDate);

        //Merge old data with new data
        $prefArray = array_merge($prefArray, $userPref);
        $historyNameArray = array_merge($historyNameArray, $userHistoryName);
        $historyDateArray = array_merge($historyDateArray, $userHistoryDate);

        //Purge array of duplicates
        //$prefArray = array_unique($prefArray, SORT_REGULAR);
        $prefArray = RemoveDupsFromArr($prefArray);

        //Remove empty string at start of each array
        array_shift($prefArray);
        array_shift($historyNameArray);
        array_shift($historyDateArray);

        //Convert arrays into string
        $prefArray = implode("-", $prefArray);
        $historyNameArray = implode("-", $historyNameArray);
        $historyDateArray = implode("-", $historyDateArray);

        if ($type === 'wallet') {
            ConnectDB()->query("UPDATE `DB_USER` SET `PREFERENCES`='$prefArray',`WALLET`=$userWallet ,`HISTORY_NAME`='$historyNameArray',`HISTORY_DATE`='$historyDateArray' WHERE `USERNAME`='$userCookie'");
        }
        else {
            ConnectDB()->query("UPDATE `DB_USER` SET `PREFERENCES`='$prefArray' ,`HISTORY_NAME`='$historyNameArray',`HISTORY_DATE`='$historyDateArray' WHERE `USERNAME`='$userCookie'");
        }

        ConnectDB()->query("DELETE FROM `DB_PURCHASE` WHERE `TOKEN`='$token'");
    }
    $gameNC = $_POST['gameNC'];
    $userBalanceAfter = $_POST['userBalanceAfter'];
    $purchaseType = $_POST['purchaseType'];
    $purchaseToken = $_POST['purchaseToken'];
    if (isset($gameNC) && isset($userBalanceAfter) && isset($purchaseType) && isset($purchaseToken)) {
        PostPurchase($gameNC, $userBalanceAfter, $purchaseType, $purchaseToken);
    }

    function RemoveElementFromArr($array, $elementPos) {
        for ($i = $elementPos; $i < count($array) - 1; $i++) {
            $array[$i] = $array[$i + 1];
        }
        array_pop($array);
        return $array;
    }
    function RemoveDupsFromArr($array) {
        for ($x = 0; $x < count($array); $x++) {
            for ($y = 0; $y < count($array); $y++) {
                if ($x !== $y) {
                    if ($array[$x] === $array[$y]) {
                        $array = RemoveElementFromArr($array, $y);
                    }
                }
            }
        }
        return $array;
    }

    function HashString() {
        $string = "abcdergfasgdkjdnfbvndfjs";
        $string = str_shuffle($string);
        $hash = password_hash($string, PASSWORD_DEFAULT);
        HashStringToDB($hash);
        return $hash;
    }
    function HashStringToDB($string) {
        ConnectDB()->query("INSERT INTO `DB_PURCHASE` (`TOKEN`) VALUES ('$string')");
    }

    function PurchasableGame($username, $gameToSearchFor) {
        $username = $_COOKIE['username'];
        $boughtGames = FetchFromDB(ConnectDB(), "SELECT `HISTORY_NAME` FROM `DB_USER` WHERE `USERNAME`='$username'")->fetch_row();  $boughtGames = $boughtGames[0];
        $boughtGames = explode("-", $boughtGames);
        for ($i = 0; $i < count($boughtGames); $i++) {
            $boughtGameNum = $boughtGames[$i];
            $boughtGameName = FetchFromDB(ConnectDB(), "SELECT `NAME` FROM `DB_GAMES` WHERE `NUMCOUNTER`='$boughtGameNum'")->fetch_row(); $boughtGameName = $boughtGameName[0];
            if ($boughtGameName === $gameToSearchFor) {
                return false;
            }
        }
        return true;
    }

    function GetGameTxt($gameDir) {
        $gameDesc = FileProcessing($gameDir . "mota.txt");
        $gameDesc = str_replace("\r\n", "<br>", $gameDesc);
        $gameSpec = FileProcessing($gameDir . "cauhinh.txt");
        $gameSpec = str_replace("\r\n", "<br>", $gameSpec);
        return json_encode(array("desc" => $gameDesc, "spec" => $gameSpec));
    }
?>