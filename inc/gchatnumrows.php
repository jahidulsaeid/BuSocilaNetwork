<?php
// session_start();
// include('./conn.php');

$gchat_data = mysqli_query($connect, "SELECT * FROM groupchat");

while ($gchat_slice = mysqli_fetch_array($gchat_data)) : ?>
    <?php if (($_SESSION['user_id']) != $gchat_slice['gc_user_id']) :  ?>
        <div class="item" style="padding:10px!important; border-top: 0">
            <!-- <img class="ui avatar image" src="../Images/muhammadsaeid.jpg"> -->
            <div class="ui chatboxpopup" data-content="<?php echo $gchat_slice['gc_user_name'] ?>"><img style="display:inline-block" class="ui avatar image" src="../Images/Profilepic/<?php echo $gchat_slice['gc_user_image'] ?>" alt=""></div>
            <div class="left aligned content pl3 pt2">
                <div id="gchatcont" class="ui left pointing below label chatboxpopup teal" data-content="<?php echo $gchat_slice['gchat_date'] ?>">
                    <?php echo $gchat_slice['gchat_cont'] ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <?php if (($_SESSION['user_id']) == $gchat_slice['gc_user_id']) :  ?>
        <div class="item" style="padding:10px!important; border-top: 0">
            <div class="right aligned content pl3 pt2">
                <div class="ui right pointing below label blue chatboxpopup" data-content="<?php echo $gchat_slice['gchat_date'] ?>">
                    <?php echo $gchat_slice['gchat_cont'] ?>

                    <div id="user_details"></div>
                </div>
            </div>
            <div class="ui chatboxpopup" data-content="<?php echo $gchat_slice['gc_user_name'] ?>"><img style="display:inline-block" class="ui avatar image" src="../Images/Profilepic/<?php echo $gchat_slice['gc_user_image'] ?>" alt=""></div>
        </div>
    <?php endif; ?>

<?php endwhile; ?>