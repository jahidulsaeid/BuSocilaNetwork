<?php

include('conn.php');

session_start();

echo $c_user_name = $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'];

echo $c_user_image = $_SESSION['user_ppic'];

echo $comment_cont = $_POST['commentcont'];

echo $c_post_id = $_POST['cpostid'];
if($comment_cont){
    $commentquery = mysqli_query($connect,"INSERT INTO post_comment(pcomment_user,pcomment_uimg,pcomment_cont,commentpost_id) VALUES('$c_user_name','$c_user_image ','$comment_cont','$c_post_id')");
    header('location: ../index.php');
}
