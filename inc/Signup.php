<?php
include('conn.php');
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$pass = $_POST['password'];
$repass = $_POST['repassword'];
$email = $_POST['buemail'];
$gender = $_POST['gender'];
$birthofday = $_POST['BDay'] . '-' . $_POST['BMonth'] . '-' . $_POST['BYear'];

$p_pic = $_FILES['profilepic']['name'];
$p_tmp = $_FILES['profilepic']['tmp_name'];

move_uploaded_file($p_tmp, '../Images/Profilepic/' . $p_pic);



$email_select = mysqli_query($connect, "SELECT * FROM user_info WHERE email='$email'");

$how_many_user = mysqli_num_rows($email_select);


// $allowed_domains = array("bu.edu.bd");
// $email_domain = array_pop(explode("@", $email));



$allowed_domains = array("bu.edu.bd");
$buemailverify = explode("@", $email);
$email_domain = array_pop($buemailverify);


if ($firstname && $lastname && $pass && $email && $gender && $birthofday) {
    if ($pass == $repass) {


        if (!in_array($email_domain, $allowed_domains)) {
            // Not an authorised email 
            // echo "This is not bu email";
            header('location: ../index.php?result=notbuemail');
        } else {
            
            if ($how_many_user  >= 1) {

                header('location: ../index.php?result=sameemail');
                // echo "Vai ai email diye registation kora ase onno email diye try koren";
            } else {

                mysqli_query($connect, "INSERT INTO user_info(fname,sname,pass,email,gender,birthday,ppic)VALUES('$firstname','$lastname','$pass','$email','$gender','$birthofday','$p_pic')");

                header('location: ../index.php?result=successful');
            }
        }
    } else {

        // echo "Pass duita mile nai";
        header('location: ../index.php?result=passdontmatch');
    }
} else {
    header('location: ../index.php?result=fieldempty');
}
