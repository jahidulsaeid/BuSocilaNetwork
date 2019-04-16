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

        <div class="three column row">
            <div class="four wide column ui secondary segment m0 stickySidebar computer only">
                <div>
                    <img class="ui centered image tiny circular" style="height:80px;"
                        src="./../Images/Profilepic/<?php echo $_SESSION['user_ppic'] ?>" alt="">
                    <div class="ui center aligned grid pt30">
                        <h3><?php echo $full_name; ?></h3>
                        <p style="text-align:center; ">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                            Voluptas aperiam, accusamus eos</p>
                        <p style="text-align:center; ">Student</p>
                        <p style="text-align:center; "><i class="envelope outline icon"></i>muhammadsaeid@gmail.com</p>
                    </div>
                </div>
                <div class="ui vertical menu fluid secondary pl20 leftmenu pt30">
                    <div class="item">
                        <a class="header" href="#"><i class="home icon"></i>Home</a>
                    </div>
                    <div class="item">
                        <a class="header" href="#"><i class="clipboard list icon"></i>Notice Board</a>
                    </div>
                    <div class="item">
                        <a class="header" href="#"><i class="user icon"></i>User Profile</a>
                    </div>
                    <div class="item">
                        <a class="header" href="#"><i class="clipboard list icon"></i>Users</a>
                    </div>
                    <div class="item">
                        <a class="header" href="#"><i class="clipboard list icon"></i>Help</a>
                    </div>
                    <div class="item">
                        <a class="header" href="#"><i class="lock icon"></i>Logout</a>
                    </div>
                </div>
                <p style="text-align:center;" class="pt20">BuSocilaNetwork © 2019</p>




            </div>
            <div class="ui eight wide computer sixteen wide mobile tablet column">
                <div class="ui grid segment mt0">
                    <div class="six wide column"><img class="ui mini circular image"
                            src="./../Images/Profilepic/<?php echo $_SESSION['user_ppic'] ?>" alt=""
                            style="height:35px;"></div>
                    <div class="ten wide column right aligned"><button class="ui button teal create_btn" type="button"
                            id="postForm">Create Post</button>
                        <button class="ui button blue create_btn" type="button" id="noticeBoardForm">Write a
                            Notice</button>
                    </div>
                </div>

                <div class="ui raised card fluid">
                    <div class="content">
                        <div class="header">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Recusandae,
                            repudiandae.
                        </div>
                        <div class="meta">
                            <span class="category">Topic : Animals</span>
                        </div>
                        <div class="description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima porro voluptatibus
                                suscipit molestiae beatae ex sint dolore, consequatur soluta aperiam Lorem ipsum dolor
                                sit amet consectetur adipisicing elit. Sunt libero sint quo minus rerum laudantium totam
                                odio voluptate ab, consequuntur repudiandae nisi consequatur at delectus obcaecati quos
                                incidunt non eum?</p>
                        </div>

                    </div>
                    <div class="image pl10 pr10">
                        <img src="./../Images/Postimage/12108168_1232696203412928_7414158571324889875_n.jpg">
                    </div>
                    <div class="extra content">
                        <span class="left floated like pt4">
                            <i class="calendar alternate outline icon"></i>
                            December 8, 2018
                        </span>
                        <span class="right floated star">
                            <img class="ui avatar image" src="./../Images/Profilepic/muhammadsaeid.jpg" alt="">Jahidul
                            islam
                        </span>
                    </div>
                </div>


                <!-- Model area start -->

                <div class="ui modal post p20">
                    <form class="ui form" action="../inc/userpost.php" method="POST" enctype="multipart/form-data">
                        <div class="header ui center aligned">Create Post</div>
                        <div class="content">
                            <!-- <form class="ui form"> -->
                            <div class="field ">
                                <div class="ui action input">
                                    <input type="text" placeholder="Add Media" readonly name="userpimg">
                                    <input type="file" style="display:none;" name="userpimg">
                                </div>
                            </div>
                            <div class="field">
                                <textarea placeholder="What's on your mind, Muhammad?" name="upostcontent"></textarea>
                            </div>

                        </div>

                        <div class="actions pr0 pt10">
                            <div class="ui cancel button right floated">Cancel</div>
                            <button type="submit" class="ui submit button blue right floated">Post</button>
                        </div>
                    </form>
                </div>

                <div class="ui modal notice">
                    <div class="header ui center aligned">Post a Notice</div>
                    <div class="content">
                        <form class="ui form" action="../inc/notice.php" method="POST" enctype="multipart/form-data">
                            <div class="field ">
                                <input type="text" placeholder="Write Notice Title" name="noticetitle">
                            </div>
                            <div class="field">
                                <div class="ui selection dropdown ">
                                    <input type="hidden" name="noticetopic">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Select topic</div>
                                    <div class="menu">
                                        <div class="item" data-value="Exam">Exam</div>
                                        <div class="item" data-value="Notice">Notice</div>
                                        <div class="item" data-value="Others">Others</div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <textarea placeholder="What's on your mind?" name="noticecont"></textarea>
                            </div>
                            <div class="field ">
                                <div class="ui action input">
                                    <input type="text" placeholder="Add Media" readonly name="noticepic">
                                    <input type="file" style="display:none;" name="noticepic">
                                </div>
                            </div>
                            <div class="field actions">
                                <div class="ui cancel button right floated mb10">Cancel</div>
                                <button type="submit" class="ui submit button blue right floated">Post</button>
                            </div>
                        </form>
                    </div>

                </div>

                <!-- Model area end -->

            </div>

            <?php
            include('../inc/conn.php');

            $alluser = mysqli_query($connect, "SELECT * FROM user_info ORDER BY id DESC");

            // $alluserslice = mysqli_fetch_array($alluser);
            ?>
            <div class="four wide column ui secondary segment m0 stickySidebar computer only">
                <div class="ui middle aligned selection list">
                    <h4 style="text-align:center">Suggestions For You</h4>
                    <?php while ($alluserslice = mysqli_fetch_array($alluser)) : ?>
                    <div class="item">

                        <div class="right floated content">
                            <div class="ui button"><i class="plus icon mr0"></i></div>
                        </div>

                        <img class="ui mini circular image"
                            src="./../Images/Profilepic/<?php echo $alluserslice['ppic']; ?>" style="height:35px;">
                        <div class="content">
                            <div class="header"><?php echo $alluserslice['fname'] . ' ' . $alluserslice['sname']; ?>
                            </div>
                        </div>


                    </div>
                    <?php endwhile; ?>
                </div>
                <div>
                    <img class="ui mini image" src="./../Images/Postimage/BU.png" alt="">
                    <div class="content">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi, voluptate.</p>
                    </div>
                </div>
            </div>







        </div>
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