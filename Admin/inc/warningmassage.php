<?php

include './Connection.php';

echo $wmuserid = $_POST['wmuserid'];

echo $upostcontent = $_POST['upostcontent'];

echo $notice_date = date('D, d M Y');

if ($wmuserid && $upostcontent) {
    mysqli_query($connect, "INSERT INTO warning_massage(wm_user_id,wm_cont,wm_date)VALUES('$wmuserid','$upostcontent','$notice_date')");
    echo "Done!";
    header('location: ../Pages/index.php?result=warningsent');
} else {
    echo "Somethig Wrong";
    header('location: ../Pages/index.php?result=warningnotsent');
}
