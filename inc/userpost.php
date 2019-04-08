<?php

include('conn.php');

session_start();

echo $p_user_name = $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'];

echo $p_user_image = $_SESSION['user_ppic'];

echo $user_p_imagename = $_FILES['userpimg']['name'];
echo $user_p_imagetmp = $_FILES['userpimg']['tmp_name'];

move_uploaded_file($user_p_imagetmp, '../Images/postimage/' . $user_p_imagename);

echo $user_p_cont = $_POST['upostcontent'];

// echo $post_date = date('M t Y');
echo $post_date = date('D, d M Y');

if ($user_p_cont || $user_p_imagename) {
    $upostinsert =  mysqli_query($connect, "INSERT INTO user_post(puser_name,user_image,post_image,user_post,post_date) VALUES('$p_user_name','$p_user_image','$user_p_imagename','$user_p_cont','$post_date')");

    header('location: ../Pages/Home.php');
}
