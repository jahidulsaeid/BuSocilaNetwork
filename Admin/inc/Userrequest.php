<?php

include './Connection.php';

$id = $_GET['id'];

$user_data = mysqlI_query($connect, "SELECT * FROM user_info  WHERE id=$id");

$user_slice = mysqli_fetch_array($user_data);



// echo $id = $user_slice['id'];
echo $id = $_GET['id'];

echo $firstname = $user_slice['fname'];

echo $lastname = $user_slice['sname'];

echo $email = $user_slice['email'];

echo $pass = $user_slice['pass'];

echo $gender = $user_slice['gender'];

echo $birthofday = $user_slice['birthday'];

echo $p_pic = $user_slice['ppic'];


// $id = $_GET['id'];

$email_select = mysqli_query($connect, "SELECT * FROM valid_user_info WHERE email='$email'");

echo $how_many_user = mysqli_num_rows($email_select);

if ($how_many_user  >= 1) {
    echo "This user alreay approve";
} else {
    mysqli_query($connect, "INSERT INTO valid_user_info(id,fname,sname,pass,email,gender,birthday,ppic)VALUES('$id','$firstname','$lastname','$pass','$email','$gender','$birthofday','$p_pic')");
    //redirecting to the display page (index.php in our case)
    header('location: ../index.php');
}
