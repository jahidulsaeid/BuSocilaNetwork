<?php
session_start();
$connect = mysqli_connect('localhost','root','','project');

$user=$_POST['username'];
$pass=$_POST['password'];

$user_select =mysqli_query($connect,"SELECT * FROM user_info WHERE fullname='$user' AND pass='$pass'");

$koytauser=mysqli_num_rows($user_select);

$user_data = mysqli_fetch_array($user_select);



$_SESSION['id'] = $user_data[id];
$_SESSION['Username'] = $user_data['fullname'];
$_SESSION['Email'] = $user_data['email'];
$_SESSION['Age'] = $user_data['age'];
$_SESSION['Birthday'] = $user_data['birthday'];





if($koytauser==1){
    // echo $user_data['fullname'];
    header('location: ../admin/index.php');
}
elseif($koytauser==0){
    header('location: ../admin/notice.php');
}