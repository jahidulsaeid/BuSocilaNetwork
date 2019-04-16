<?php
session_start();
include('conn.php');

$useremail = $_POST['emailid'];
$pass = $_POST['password'];

$user_select = mysqli_query($connect, "SELECT * FROM valid_user_info WHERE email='$useremail' AND pass='$pass'");

$koytauser = mysqli_num_rows($user_select);

$user_data = mysqli_fetch_array($user_select);

$_SESSION['user_id'] = $user_data['id'];
$_SESSION['user_fname'] = $user_data['fname'];
$_SESSION['user_lname'] = $user_data['sname'];
$_SESSION['user_email'] = $user_data['email'];
$_SESSION['user_pass'] = $user_data['pass'];
$_SESSION['user_gender'] = $user_data['gender'];
$_SESSION['user_bday'] = $user_data['birthday'];
$_SESSION['user_ppic'] = $user_data['ppic'];


if ($koytauser == 1) {
    header('location: ../Pages/Home.php');
} elseif ($koytauser == 0) {
    // echo "Your email and pass dont't match Or you are not register member";
    header('location: ../index.php?result=wronguser');
}
