<?php
include './../../inc/conn.php';

$useremail = $_POST['emailid'];
$pass = $_POST['password'];

$user_select = mysqli_query($connect, "SELECT * FROM admin_info WHERE email='$useremail' AND pass='$pass'");

$koytauser = mysqli_num_rows($user_select);

$user_data = mysqli_fetch_array($user_select);


if ($koytauser == 1) {
    header('location: ../Pages/index.php');
} elseif ($koytauser == 0) {
    // header('location: ../admin/notice.php');
    echo "Your email and pass dont't match Or you are not register member";
}
