<?php
session_start();
include('DbConnection.php');
if (isset($_POST['reset_pass_btn'])) {
    $email = $_SESSION['email'];
    $updated_pass = $_POST['password'];
    $updated_re_pass = $_POST['retype_password'];
    if ($updated_pass == $updated_re_pass) {
        $md5_pass=md5($updated_pass);
        $query = "UPDATE users SET password ='$md5_pass' WHERE email = '$email'";
        $result = mysqli_query($conn, $query);
        if ($result) {
            echo "<script>alert('Password Reset Successfully,log in to continue');</script>";
            echo "<script>window.location.href = 'LogIn.php';</script>";
        } else {
            echo "<script>alert('Password Reset Failed');</script>";
        }
    }
    else{
        echo "<script>alert('Password Not Match');</script>";
    }
}
?>