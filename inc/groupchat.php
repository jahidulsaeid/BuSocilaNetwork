<?php

include('conn.php');

session_start();

echo $gc_user_name = $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'];

echo $gc_user_image = $_SESSION['user_ppic'];

echo $gc_user_id = $_SESSION['user_id'];

$gchat_cont = $_POST['gchatcont'];

echo $gchat_date = date('D, d M Y');

if ($gchat_cont) {
    $groupchatq =  mysqli_query($connect, "INSERT INTO groupchat(gc_user_id,gc_user_name,gc_user_image,gchat_cont,gchat_date) VALUES('$gc_user_id','$gc_user_name','$gc_user_image','$gchat_cont','$gchat_date')");
    header('location: ../Pages/Home.php');
}
