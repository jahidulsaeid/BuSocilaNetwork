<?php
session_start();

if (!isset($_SESSION['user_email'])) {
	header('location: ../index.php');
};

$full_name = $_SESSION['user_fname'] . ' ' . $_SESSION['user_lname'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bu Socila NetWork</title>
    <!-- Semantic min Css -->
    <link rel="stylesheet" href="./../Components/Dist/semantic.min.css">
    <!-- margin-padding min css -->
    <link rel="stylesheet" href="./../Components/Dist/margin.padding.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .stickySidebar {
            height: 665px !important;
            position: sticky !important;
            top: 0px !important;
        }

        .ui.secondary.inverted.menu .dropdown.item:hover {
            background: transparent !important;
        }
    </style>

</head>

<body>
    <!-- Header Area Start -->
    <?php include("./../Components/Header/Header.php"); ?>
    <!-- Header Area End -->
    <div class="ui grid container">

       <h1>Contact Page</h1>
    </div>


    <!-- From are Start-->



    <!-- Footer Area Start -->
    <?php include("./../Components/Footer/Footer.php"); ?>
    <!-- Footer Area End -->


    <!-- Jquery min Files -->
    <script src="./../Components/Dist/Jquery-3.1.1.min.js"></script>
    <!-- Sematic Min Files -->
    <script src="./../Components/Dist/semantic.min.js"></script>
    <!-- Custom-Js-Files -->
    <script src="./../Components/Dist/Custom.js"></script>
    <script>

    </script>

</body>

</html>