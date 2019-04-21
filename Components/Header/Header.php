<div class="ui inverted segment main-menu p0">
    <div class="ui inverted secondary menu container">
        <a class="item" href="http://localhost/BuSocilaNetwork/">
            Home
        </a>

        <!-- <a class="item">
            <i class="icon users"></i> Friends
            <div class="floating ui teal label">22</div>
        </a>
        <a class="item">
            <i class="icon mail"></i> Messages
            <div class="floating ui red label">22</div>
        </a> -->
        <!-- <a class="item dropdown">
            <i class="icon bell"></i>Notification
            <div class="floating ui orange label">1</div>
        </a> -->
        <a class="item" href="./notice.php">
            NoticeBorad
        </a>
        <a class="item" href="./contact.php">
            Contact us
        </a>

        <div class="ui text menu right">

            <div class="ui right dropdown item p0">
                <div class="item dropdown p0">
                    <img class="ui circular image mini" style="height:35px;" src="./../Images/Profilepic/<?php echo $_SESSION['user_ppic'] ?>">
                </div>
                <a class=" item dropdown">
                    <?php echo $full_name; ?>
                    <i class="dropdown icon"></i>
                </a>
                <div class="menu">
                    <a class="item" href="">Basic info</a>
                    <a class="item" href="../inc/Logout.php">Logout</a>
                </div>
            </div>
            <?php

            include '../inc/conn.php';

            $how_many_warning = $_SESSION['user_id'];

            $wm_data = mysqli_query($connect, "SELECT * FROM warning_massage WHERE wm_user_id = '$how_many_warning' Order BY wm_id DESC ");

            $wn_numr = mysqli_num_rows($wm_data);

            ?>
            <div style="cursor:pointer;" class="ui right item warningnotificationbutton p0" data-content=" (Date: )" data-position="bottom right">
                <i class="icon bell"></i>
                <div class="floating ui orange label"><?php echo $wn_numr; ?></div>
            </div>

        </div>

    </div>
</div>




<div class="ui flowing basic admission popup warningnotification" style="width:290px">
    <?php


    while ($wm_slice = mysqli_fetch_array($wm_data)) : ?>

        <?php if ($_SESSION['user_id'] == $wm_slice['wm_user_id'] &&  $wn_numr > 0) : ?>
            <div class="column p10">
                <div class="ui link list negative message p10">
                    <a class="item"><?php echo $wm_slice['wm_cont']; ?></a>
                    <i class="item right" style="text-align: right;"><?php echo $wm_slice['wm_date']; ?></i>
                </div>
            </div>

        <?php endif; ?>

    <?php endwhile; ?>



    <?php if ($_SESSION['user_id'] != $wm_slice['wm_user_id'] && $wn_numr <= 0): ?>
        <div class="column p10">
            <p style="text-align:center;">There is no warning massage</p>
        </div>
    <?php endif; ?>

</div>