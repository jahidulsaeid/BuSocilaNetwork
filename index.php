<?php

session_start();

if (isset($_SESSION['user_email'])) {
    header('location: ./Pages/Home.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bu Socila NetWork</title>
    <!-- Semantic min Css -->
    <link rel="stylesheet" href="./Components/Dist/semantic.min.css">
    <!-- margin-padding min css -->
    <link rel="stylesheet" href="./Components/Dist/margin.padding.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="./Home.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,500,700" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <div class="ui two column grid">
        <div class="column teal center aligned p60" style="height:102vh;">

            <div style="position: absolute;top: 27%;">
                <a href="http://localhost/BuSocilaNetwork/"><img class="ui small image centered" src="./Images/BU.png" alt=""></a> 

                <h1 class="m0" style="font-family: 'Raleway', sans-serif;font-weight:300">Bu Community Network</h1>
                <h3 class="mt10" style="font-family: 'Raleway', sans-serif;font-weight:300">Lorem ipsum dolor sit, amet
                    consectetur adipisicing elit. Expedita, quod.
                </h3>
                <div class="three wide column pt50">
                    <h2 class="ui inverted header" style="font-family: 'Raleway', sans-serif;font-weight:300">Follow us
                    </h2>
                    <div class="ui inverted link list">
                        <a href="https://www.facebook.com/BangladeshUniversityBd" class="ui circular facebook icon button" target="_blank">
                            <i class="facebook icon"></i>
                        </a>
                        <a href="" class="ui circular twitter icon button" target="_blank">
                            <i class="twitter icon"></i>
                        </a>
                        <a href="" class="ui circular linkedin icon button" target="_blank">
                            <i class="linkedin icon"></i>
                        </a>
                        <a href="" class="ui circular google plus icon button" target="_blank">
                            <i class="google plus icon"></i>
                        </a>
                    </div>
                </div>


            </div>
        </div>
        <div class="column signInArea" style="background: #f4f7f6!important; ">
            <div class="ui middle aligned center aligned grid ">
                <div class="column p100" style=" position: absolute;top: 15%; right: 0px">
                    <h2 class="ui teal image header">
                        <?php
                        if (isset($_GET['result'])) {
                            if ($_GET['result'] == 'passdontmatch') {
                                echo '<div class="ui ignored negative message"><i class="close icon" style="font-size:14px;top:0"></i>  <p style="font-size:14px;margin-top:0;">Password does not match.</p></div>';
                            }
                            if ($_GET['result'] == 'sameemail') {
                                echo '<div class="ui ignored negative message"><i class="close icon" style="font-size:14px;top:0"></i>  <p style="font-size:14px;margin-top:0;">This email address is already registered.</p></div>';
                            }
                            if ($_GET['result'] == 'fieldempty') {
                                echo '<div class="ui ignored negative message"><i class="close icon" style="font-size:14px;top:0"></i>  <p style="font-size:14px;margin-top:0;">Hello, your input field is empty</p></div>';
                            }
                            if ($_GET['result'] == 'successful') {
                                echo '<div class="ui ignored positive message"><i class="close icon" style="font-size:14px;top:0"></i>  <p style="font-size:14px;margin-top:0;">Successfully signup waiting for admin approval </p></div>';
                            }
                            if ($_GET['result'] == 'notbuemail') {
                                echo '<div class="ui ignored negative message"><i class="close icon" style="font-size:14px;top:0"></i>  <p style="font-size:14px;margin-top:0;">You Must be input Bu Email</p></div>';
                            }
                            if ($_GET['result'] == 'wronguser') {
                                echo '<div class="ui ignored negative message"><i class="close icon" style="font-size:14px;top:0"></i>  <p style="font-size:14px;margin-top:0;">Your email and pass do not match Or you are not register member</p></div>';
                            }
                        }
                        ?>



                        <div class="content">
                            <h1 style="font-family: 'Raleway', sans-serif;font-weight:300">Log-in to your account</h1>
                        </div>
                    </h2>
                    <form class="ui large form signin" action="./inc/Signin.php" method="POST">
                        <div class="ui segment">
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input type="email" size="64" maxLength="64" placeholder="username@bu.edu.bd" pattern=".+@bu.edu.com" title="Please Enter Bu provided email address" name="emailid" require>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="lock icon"></i>
                                    <input type="password" name="password" placeholder="Password" require>
                                </div>
                            </div>
                            <div class="ui fluid large teal submit button">Login</div>
                        </div>

                        <div class="ui error message"></div>

                    </form>

                    <div class="ui message">
                        New to us? <a class="signUpHere" href="#">Sign Up</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="column p50 signUpArea" style="background: #f4f7f6!important;display: none;">
            <h2 class="ui teal image header center aligned grid mt20">
                <div class="content">
                    <h1 style="font-family: 'Raleway', sans-serif;font-weight:300">Create your account</h1>
                </div>
            </h2>
            <div class="ui middle grid">
                <div class="column">
                    <form class="ui large form" action="./inc/Signup.php" method="POST" enctype="multipart/form-data">
                        <div class="ui segment">
                            <div class="two fields">
                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="user icon"></i>
                                        <input type="text" placeholder="First Name" name="firstname">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="user icon"></i>
                                        <input type="text" placeholder="Last Name" name="lastname">
                                    </div>
                                </div>
                            </div>
                            <div class="two fields">
                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="lock icon"></i>
                                        <input type="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="ui left icon input">
                                        <i class="lock icon"></i>
                                        <input type="password" name="repassword" placeholder="Re-Password">
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input id="emailAddress" type="email" size="64" maxLength="64" placeholder="username@bu.edu.bd" pattern=".+@bu.edu.bd" title="Please Enter Bu provided email address" name="buemail" require>
                                </div>
                            </div>


                            <div class="field">
                                <div class="ui selection dropdown ">
                                    <input type="hidden" name="gender">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Gender</div>
                                    <div class="menu">
                                        <div class="item" data-value="Male">Male</div>
                                        <div class="item" data-value="Female">Female</div>
                                    </div>
                                </div>
                            </div>

                            <div class="fields">
                                <label for="" class="pl10">Birth Of Day : </label>
                                <div class="sixteen wide field">
                                    <div class="three fields">
                                        <div class="field">
                                            <select class="ui fluid search dropdown" name="BDay">
                                                <option value="">Day</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                            </select>
                                        </div>
                                        <div class="field">
                                            <select class="ui fluid search dropdown" name="BMonth">
                                                <option value="">Month</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                                <option value="August">August</option>
                                                <option value="September">September</option>
                                                <option value="October">October</option>
                                                <option value="November">November</option>
                                                <option value="December">December</option>
                                            </select>
                                        </div>
                                        <div class="field">
                                            <select class="ui fluid search dropdown" name="BYear">
                                                <option value="">Year</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                                <option value="2010">2010</option>
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                            </select>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <div class="field">
                                <div class="ui action input">
                                    <span class="pt10 pr5">Profile Pic : </span>
                                    <input type="text" placeholder="Upload Your Profile Picture" readonly name="profilepic">
                                    <input type="file" style="display:none;" name="profilepic">
                                </div>
                            </div>

                            <div class="required inline field left">
                                <div class="ui checkbox ">
                                    <input type="checkbox" name="checkbox">
                                    <label>I agree to the terms and conditions</label>
                                </div>
                            </div>


                            <div class="ui fluid large submit">
                                <input type="submit" class="ui fluid large teal button" value="Login">
                            </div>
                            <!-- <div class="ui fluid large teal submit button">Login</div> -->
                        </div>

                        <div class="ui error message"></div>

                    </form>

                    <div class="ui message center aligned grid">
                        Already have an account ?<a class="loginHere" href="#">Login Here</a>
                    </div>
                </div>
            </div>



            <!-- Model area end -->

        </div>
    </div>

    <!-- Jquery min Files -->
    <script src="./Components/Dist/Jquery-3.1.1.min.js"></script>
    <!-- Sematic Min Files -->
    <script src="./Components/Dist/semantic.min.js"></script>
    <!-- Custom-Js-Files -->
    <script src="./Components/Dist/Custom.js"></script>

    <script>
        $(".close.icon").click(function() {
            $(this).parent().hide();
        });
    </script>
</body>

</html>