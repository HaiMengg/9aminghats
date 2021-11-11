<?php
    function ConnectDB() {
        $DB_SERVER = 'localhost';
        $DB_USER = 'dpreqxgt_adminmike';
        $DB_PASSWORD = 'Highman.2410';
        $DB_NAME = 'dpreqxgt_9aminghats';
        $connect = mysqli_connect($DB_SERVER, $DB_USER, $DB_PASSWORD, $DB_NAME);
        if (!$connect) {
            die("Connection error: " . mysqli_error());
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

    function FindGames($new, $free, $genre, $recom, $date) {
        $foundGames = array();
        if ($new) {
            $today = date_create_from_format("d/m/Y", date('d/m/Y'));
            $diff = $today->getTimestamp() - $date->getTimestamp();
            $diff = $diff / 60 / 60 / 24 / 365;         //Calculator time interval from seconds to years
            if ($diff <= 1) {
                array_push($foundGames);
            }
        }
        return $foundGames;
    }
?>