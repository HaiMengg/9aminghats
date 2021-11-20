<?php
    chdir($_SERVER["DOCUMENT_ROOT"] . "/");
    include "php/php_functions.php";
    ConnectDB()->set_charset("utf8mb4");
    $email = $_GET['email'];
    $token = $_GET['token'];
    if (!empty($email) && !empty($token)) {
        $getData = FetchFromDB(ConnectDB(), "SELECT * FROM DB_USER WHERE `EMAIL`='" . $email . "' AND `TOKEN`='" . $token . "'");
        if ($getData->num_rows == 1) {
            ConnectDB()->query("UPDATE DB_USER SET `ACTIVATION`=1 WHERE `EMAIL`='$email'");
            echo "Kích hoạt thành công. Hãy đóng trang này lại";
        }
        else die("Lỗi trích xuất dữ liệu");
    }
    else die("Bạn cần đƯợc uỷ quyền để truy cập trang này")
?>