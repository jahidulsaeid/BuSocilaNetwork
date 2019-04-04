<?php
 // session_start();
include('conn.php');

$useremail = $_POST['emailid'];
$pass = $_POST['password'];

$user_select = mysqli_query($connect, "SELECT * FROM user_info WHERE email='$useremail' AND pass='$pass'");

$koytauser = mysqli_num_rows($user_select);

$user_data = mysqli_fetch_array($user_select);



// $_SESSION['id'] = $user_data[id];
// $_SESSION['Username'] = $user_data['fullname'];
// $_SESSION['Email'] = $user_data['email'];
// $_SESSION['Age'] = $user_data['age'];
// $_SESSION['Birthday'] = $user_data['birthday'];



if ($koytauser == 1) {
    echo $user_data['fullname'];
    header('location: ../Pages/Home.php');
    // echo "you are susfully login";
} elseif ($koytauser == 0) {
    // header('location: ../admin/notice.php');
    echo "Your email and pass dont't match Or you are not register member";
}
