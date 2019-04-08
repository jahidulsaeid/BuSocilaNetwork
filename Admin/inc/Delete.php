<?php
// session_start();

include './Connection.php';

// check for primary id of the record-set in url

//getting id of the data from url
$id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($connect, "DELETE FROM user_info WHERE id=$id");
 
//redirecting to the display page (index.php in our case)
header('location: ../index.php');