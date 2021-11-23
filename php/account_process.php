<?php include "php_functions.php";
    ConnectDB()->set_charset("utf8mb4");
    $mode = $_POST['mode'];
    //Register
    if ($mode == "register") {
        $fullNameReg = $_POST['fullNameReg'];
        $dobReg = $_POST['dobReg'];
        $emailReg = $_POST['emailReg'];
        $userReg = $_POST['userReg'];
        $pwdReg = $_POST['pwdReg'];
        $pwdRegHashed = password_hash($pwdReg, PASSWORD_DEFAULT);

        
        $checkReg = FetchFromDB(ConnectDB(), "SELECT * FROM DB_USER WHERE `EMAIL`='$emailReg'");
        $checkRegUser = FetchFromDB(ConnectDB(), "SELECT * FROM DB_USER WHERE `USERNAME`='$userReg'");
        if ($checkReg->num_rows == 0 && $checkRegUser->num_rows == 0) {       
            $insertReg = "INSERT INTO `DB_USER` (`FULLNAME`, `EMAIL`, `USERNAME`, `PASSWORD`, `TOKEN`, `DOB`, `PREFERENCES`, `ACTIVATION`, `WALLET`, `WISHLIST`) VALUES ('$fullNameReg ', '$emailReg', '$userReg', '$pwdReg', '$pwdRegHashed', '$dobReg', '', 0, 1000000, '')";
            ConnectDB()->query($insertReg);

            //Send mail to notify user of activation process
            $to = $emailReg;
            $subject = "Kích hoạt tài khoản cửa hàng trò chơi 9amingHats của bạn";
            $message = "
            Chào $fullNameReg,

            Chúng tôi đã nhận được yêu cầu đăng kí tài khoản của bạn.

            Tuy nhiên, bạn sẽ cần phải kích hoạt tài khoản của mình trước khi có thể sử dụng để mua/tải các trò chơi trên 9amingHats:
            https://high-man.com/pages/verify.php?" . "email=" . $emailReg . "&token=" . $pwdRegHashed;
            $header = "From: admin-noreply@9aminghats.com" . "\r\n";
            mail($to, $subject, $message, $header);
            
            echo json_encode(array("stateReg" => 1, "userReg" => $userReg, "emailReg" => $emailReg));
        }
        else {
            if ($checkReg->num_rows != 0 && $checkRegUser->num_rows == 0) echo json_encode(array("stateReg" => 2));
            else if ($checkReg->num_rows == 0 && $checkRegUser->num_rows != 0) echo json_encode(array("stateReg" => 3));
            else echo json_encode(array("stateReg" => 4));
        }
    }
    //Login
    else if ($mode == "login") {
        $emailLog = $_POST['emailLog'];
        $pwdLog = $_POST['pwdLog'];
        //$pwdLogHashed = password_hash($pwdLog,  PASSWORD_DEFAULT);
        
        $checkLog = FetchFromDB(ConnectDB(), "SELECT * FROM DB_USER WHERE `EMAIL`='" . $emailLog . "' AND `PASSWORD`='" . $pwdLog . "'");
        $getData = FetchFromDB(ConnectDB(), "SELECT `ACTIVATION`, `USERNAME` FROM DB_USER WHERE `EMAIL`='" . $emailLog . "' AND `PASSWORD`='" . $pwdLog . "'")->fetch_row();
        if ($checkLog->num_rows == 1) {
            if ($getData[0] == 1) {
                echo json_encode(array("stateLog" => 1, "userLog" => $getData[1]));     //Store the username
            }
            else echo json_encode(array("stateLog" => 3));
        }
        else echo json_encode(array("stateLog" => 2));
    }
    //Password reset
    else if ($mode == "resetPass") {
        $emailResetPass = $_POST['emailResetPass'];
        $userResetPass = $_POST['userResetPass'];
        $checkAccountResetPass = "";
        $url = "";

        if (!empty($userResetPass)) {
            $checkAccountResetPass = FetchFromDB(ConnectDB(), "SELECT * FROM DB_USER WHERE `EMAIL`='$emailResetPass' AND `USERNAME`='$userResetPass'");
            $url = "https://high-man.com/pages/forgotpassword_s2.php?" . "email=" . $emailResetPass . "&user=" . $userResetPass;
        }
        else {
            $checkAccountResetPass = FetchFromDB(ConnectDB(), "SELECT * FROM DB_USER WHERE `EMAIL`='$emailResetPass'");
            $url = "https://high-man.com/pages/forgotpassword_s2.php?" . "email=" . $emailResetPass;
        }

        if ($checkAccountResetPass->num_rows == 1) {
            //Send mail to notify user of activation process
            $to = $emailReg;
            $subject = "Thiết lập lại mật khẩu cho tài khoản cửa hàng trò chơi 9amingHats của bạn";
            $message = "
            Chào $userResetPass,

            Chúng tôi đã nhận được thiết lập lại mật khẩu cho tài khoản của bạn.

            Tuy nhiên, bạn sẽ cần phải kích hoạt tài khoản của mình trước khi có thể sử dụng để mua/tải các trò chơi trên 9amingHats:
            $url";
            $header = "From: admin-noreply@9aminghats.com" . "\r\n";
            mail($to, $subject, $message, $header);
            
            echo json_encode(array("stateResetPass" => 1));
        }
        else echo json_encode(array("stateResetPass" => 2));
    }
?>