<?php
session_start();
include './Connection.php';

$useremail = $_POST['emailid'];
$pass = $_POST['password'];

$user_select = mysqli_query($connect, "SELECT * FROM admin_info WHERE admin_email='$useremail' AND admin_pass='$pass'");

$koytauser = mysqli_num_rows($user_select);

$user_data = mysqli_fetch_array($user_select);

$_SESSION['admin_email'] = $user_data['admin_email'];
$_SESSION['admin_pass'] = $user_data['admin_pass'];

if ($koytauser == 1) {
    header('location: ../Pages/index.php');
} elseif ($koytauser == 0) {
    // header('location: ../admin/notice.php');
    echo "Your email and pass dont't match Or you are not register member";
}
