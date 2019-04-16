<div class="ui inverted segment main-menu p0">
    <div class="ui inverted secondary menu container">
        <a class="item" href="http://localhost/BuSocilaNetwork/">
            Home
        </a>
<!-- 
        <a class="item">
            <i class="icon users"></i> Friends
            <div class="floating ui teal label">22</div>
        </a>
        <a class="item">
            <i class="icon mail"></i> Messages
            <div class="floating ui red label">22</div>
        </a>
        <a class="item">
            <i class="icon bell"></i> Notification
            <div class="floating ui orange label">22</div>
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
        </div>

    </div>
</div>
</div>