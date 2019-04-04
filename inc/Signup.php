<?php
include('conn.php');
echo $firstname = $_POST['firstname'];
echo $lastname = $_POST['lastname'];
echo $pass = $_POST['password'];
echo $repass = $_POST['repassword'];
echo $email = $_POST['buemail'];
echo $gender = $_POST['gender'];
echo $birthofday = $_POST['BDay'] . '-' . $_POST['BMonth'] . '-' . $_POST['BYear'];

echo $p_pic = $_FILES['profilepic']['name'];
echo $p_tmp = $_FILES['profilepic']['tmp_name'];

move_uploaded_file($p_tmp, '../Images/Profilepic/' . $p_pic);



$email_select = mysqli_query($connect, "SELECT * FROM user_info WHERE email='$email'");

$how_many_user = mysqli_num_rows($email_select);

if ($firstname && $lastname && $pass && $email && $gender && $birthofday) {
    if ($pass == $repass) {

        if ($how_many_user  >= 1) {

            echo "Vai ai email diye registation kora ase onno email diye try koren";
        } else {

            mysqli_query($connect, "INSERT INTO user_info(fname,sname,pass,email,gender,birthday,ppic)VALUES('$firstname','$lastname','$pass','$email','$gender','$birthofday','$p_pic')");
        }
    } else {

        echo "Pass duita mile nai";
        // header('location: ../Pages/Error.php');
    }
}
