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
            return $connect;   //Pass returned value to mysqli_query
        }
    }

    function FetchFromDB($mysqli_conn, $dataToFetch) {
        return $mysqli_conn->query($dataToFetch);
    }

    function FileProcessing($filePath, $content = "") {
        if ($content != "") {
            file_put_contents($filePath, serialize($content), LOCK_EX);
            return true;
        }
        else {
            $array = unserialize(file_get_contents($filePath));
            return $array;
        }
    }

    function ArrayStartAppend($array, $newValue) {
        for ($i = 0; $i <= count($array) - 1; $i++) {
            $array[$i + 1] = $array[$i];
        }
        $array[0] = $newValue;
        return $array;
    }

    function CreatePage($name, $content, $dir) {
        $template = FileProcessing($_SERVER["DOCUMENT_ROOT"] . "pages/template/blank_template.php");
        $template_index = strpos($template, '<div class="row" id="main_content">');
        $append_pos = $template_index + strlen('<div class="row" id="main_content">');
        $new_string = substr_replace($template, preg_replace('/\s+/', '', $content), $append_pos);
        FileProcessing($dir . $name, $new_string);
        return true;
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
                }
            }
        }
        $foundGameData = array(
            0 => $foundGames,
            1 => $foundLogoFile
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
?>