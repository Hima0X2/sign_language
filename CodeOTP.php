<?php
session_start();
if (isset($_POST['submit_otp_btn'])) {
    if ( $_SESSION['otp']==$_POST['otp'] ) {
        header('location:ChangePassword.php');
        unset($_SESSION['otp']); 
    }
    else {
        $_SESSION['status'] = 'OTP not matched';
        header('location:VerificationCode.php');

    }
}
?>