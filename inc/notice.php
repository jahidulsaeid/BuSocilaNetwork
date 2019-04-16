<?php

include('conn.php');

session_start();

echo $n_user_name = $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'];

echo $n_user_image = $_SESSION['user_ppic'];



echo $noticetitle = $_POST['noticetitle'];

echo $notictopic = $_POST['noticetopic'];

echo $noticecont = $_POST['noticecont'];



echo $notice_img_name = $_FILES['noticepic']['name'];
echo $notice_img_tmp = $_FILES['noticepic']['tmp_name'];

move_uploaded_file($notice_img_tmp, '../Images/noticeimage/' . $notice_img_name);



echo $notice_date = date('D, d M Y');

if ($noticecont || $notice_img_name) {
    $upostinsert =  mysqli_query($connect, "INSERT INTO notice_post(n_user_name,n_user_image,noticetitle,notictopic,noticecont,notice_img_name,notice_date) VALUES('$n_user_name','$n_user_image','$noticetitle','$notictopic','$noticecont','$notice_img_name','$notice_date')");

    header('location: ../Pages/notice.php');
}else{
    header('location: ../Pages/notice.php');
}
