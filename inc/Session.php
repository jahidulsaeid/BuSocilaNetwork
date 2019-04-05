<?php
session_start();
include('conn.php');

$user_select = mysqli_query($connect, "SELECT * FROM user_info");

$user_data = mysqli_fetch_array($user_select);

echo $_SESSION['id'] = $user_data['id'];
echo $_SESSION['Firstname'] = $user_data['firstname'];
echo $_SESSION['Lastname'] = $user_data['lastname'];
echo $_SESSION['Email'] = $user_data['lastname'];
echo $_SESSION['PassWord'] = $user_data['password'];
echo $_SESSION['Birthday'] = $user_data['email'];
echo $_SESSION['gender'] = $user_data['gender'];
echo $_SESSION['Birthday'] = $user_data['birthday'];
