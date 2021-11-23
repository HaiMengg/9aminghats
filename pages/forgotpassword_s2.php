<?php
    chdir($_SERVER["DOCUMENT_ROOT"] . "/");
    include "php/php_functions.php";
    ConnectDB()->set_charset("utf8mb4");
    $email = $_GET['email'];
    $user = $_GET['user'];
    if (!empty($email)) {

        $newPwd = $_GET['newPwd'];      //Get new password from HTML form's value
        $newPwdHashed = password_hash($newPwd, PASSWORD_DEFAULT);

        if (!empty($user)) {
            $getData = FetchFromDB(ConnectDB(), "SELECT * FROM DB_USER WHERE `EMAIL`='" . $email . "' AND `USERNAME`='" . $user . "'");
        }
        else if (empty($user)) {
            $getData = FetchFromDB(ConnectDB(), "SELECT * FROM DB_USER WHERE `EMAIL`='" . $email . "'");
        }

        if ($getData->num_rows == 1) {
            $includeUser = "";
            if (!empty($user)) $includeUser = " AND `USERNAME`='$user'";
            ConnectDB()->query("UPDATE DB_USER SET `PASSWORD`=$newPwd, `TOKEN`=$newPwdHashed WHERE `EMAIL`='$email'" . $includeUser);
            echo "Tái thiết lập mật khẩu thành công";
        }
        else die("Lỗi trích xuất dữ liệu");
    }
    else die("Bạn cần đƯợc uỷ quyền để truy cập trang này");
?>

<html>
    <script>
        var newPassword = "";
    </script>
</html>