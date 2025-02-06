<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}



include_once  '../admin/controllers/index.php';
include_once  '../emails/otp_email.php';


if (!isset($_COOKIE['device_id'])) {
    $device_id = bin2hex(random_bytes(16)); // Generate a random device ID
    setcookie('device_id', $device_id, time() + (10 * 365 * 24 * 60 * 60), "/"); // Set cookie for 10 years
} else {
    $device_id = $_COOKIE['device_id'];
}



$data = array();
array_push($data, $device_id);
array_push($data, $_POST['email']);

$result = $auth->user_login($data);
$user_dtls = $result['user'];



if ($result['code'] == 200) {
    $user_dtls = $result['user'];
    $_SESSION['u_id'] = $user_dtls['id'];

    $_SESSION['user_name'] = $user_dtls['f2'];
    $_SESSION['user_email'] = $user_dtls['f1'];
    $_SESSION['device'] = 'FOUND';
    $_SESSION['login_sucess'] = true;

    $profile_image = $user_dtls['img1'];
    if (!file_exists($profile_image)) {
        $profile_image = null;
    }

    $_SESSION['profile_image'] = str_replace("../", "./", $profile_image);

    header('Location: ../index');
} else if ($result['code'] == 300) {


    if ($_SESSION['email_to_verify'] == $_POST['email'] && $_SESSION['email_verification_code'] == $_POST['otp']) {


        $user_dtls = $result['user'];



        $device_data['user'] = $user_dtls['id'];
        $device_data['f1'] = $device_id;
        $dev = $devices->register($device_data);
        if ($dev['error'] == null) {
            $_SESSION['device'] = 'REGISTED';
        } else {
            $_SESSION['device'] = 'NOT REGISTED';
        }

        $_SESSION['u_id'] = $user_dtls['id'];

        $_SESSION['user_name'] = $user_dtls['f2'];
        $_SESSION['user_email'] = $user_dtls['f1'];
        $_SESSION['login_sucess'] = true;

        $profile_image = $user_dtls['img1'];
        if (!file_exists($profile_image)) {
            $profile_image = null;
        }
    
        $_SESSION['profile_image'] = str_replace("../", "./", $profile_image);

        header('Location: ../index');
    } else {
        $_SESSION['u_id'] = 0;
        $_SESSION['login_sucess'] = false;
        $_SESSION['login_error'] = "Invalid OTP";
        $_SESSION['login_type'] = 300;
        header('Location: ../index');
    }
} else if ($result['code'] == 400) {
    if ($_SESSION['email_to_verify'] == $_POST['email'] && $_SESSION['email_verification_code'] == $_POST['otp']) {


        $user_data['f1'] = $_POST['email'];
        $user_data['f2'] = $_POST['usname'];
        $user_data['created_by'] = $_SESSION['login'];
        $user_data['created_date'] = date("Y-m-d H:i:s");
        $new_user = $user->register($user_data);



        if ($new_user['error'] == null) {
            $device_data['user'] = $new_user['inserted_id'];
            $device_data['f1'] = $device_id;

            $dev = $devices->register($device_data);

            if ($dev['error'] == null) {
                $_SESSION['device'] = 'REGISTED';
            } else {
                $_SESSION['device'] = 'NOT REGISTED';
            }

            $_SESSION['u_id'] = $new_user['inserted_id'];

            $_SESSION['user_name'] = $_POST['usname'];
            $_SESSION['user_email'] = $_POST['email'];

            $_SESSION['login_sucess'] = true;

            $profile_image = $user_dtls['img1'];
            if (!file_exists($profile_image)) {
                $profile_image = null;
            }
        
            $_SESSION['profile_image'] = str_replace("../", "./", $profile_image);

            header('Location: ../index');
        } else {
            $_SESSION['u_id'] = 0;
            $_SESSION['login_sucess'] = false;

            header('Location: ../index');
        }
    } else {
        $_SESSION['u_id'] = 0;
        $_SESSION['login_sucess'] = false;
        $_SESSION['login_type'] = 400;
        $_SESSION['login_error'] = "Invalid OTP";
        header('Location: ../index');
    }
} else {
    $_SESSION = array();
}
