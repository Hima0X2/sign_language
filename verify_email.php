<?php
session_start();
include('DbConnection.php');
if (isset($_GET['token'])){
$token=$_GET['token'];
$verify_query="SELECT verify_token,verify_status FROM users WHERE verify_token='$token' Limit 1";
$verify_query_run=mysqli_query($conn,$verify_query);
if (mysqli_num_rows($verify_query_run)>0) {
  $row=mysqli_fetch_array($verify_query_run);
if ($row['verify_status']=='0') {
    $cliked_token=$row['verify_token'];
    $update_query="UPDATE users SET verify_status='1' WHERE verify_token='$cliked_token' limit 1";
    $update_query_run= mysqli_query($conn,$update_query);
    if ($update_query_run){
        $_SESSION['status']="Your account successfully verified.Please Login";
        header("Location:LogIn.php");
        exit(0);
    }
    else{
        $_SESSION['status']="Verification Failed";
        header("Location:LogIn.php");
        exit(0);
    }
}
else {
    $_SESSION['status']="Email Already Verified,Please Login";
    header("Location:LogIn.php");
exit(0);
}

}
else{
$_SESSION['status']="This Token does not exist";
header("Location:LogIn.php");
}


}
else {
    $_SESSION['status']="Not allowed";
    header("Location:LogIn.php");

}


?>