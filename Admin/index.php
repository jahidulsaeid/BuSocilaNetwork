<?php

session_start();

if (isset($_SESSION['admin_email'])) {
    header('location: ./Pages/index.php');
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
    <link rel="stylesheet" href="./../Components/Dist/semantic.min.css">
    <!-- margin-padding min css -->
    <link rel="stylesheet" href="./../Components/Dist/margin.padding.min.css">
</head>

<body>
    <!-- From are Start-->

    <div class="ui grid container p50 pt100">
        <div class="four wide column">

        </div>
        <div class="ui eight wide column ">
            <!-- Model area start -->
            <div class="ui middle aligned center aligned grid">
                <div class="column">
                    <h2 class="ui teal image header">
                        <!-- <img src="assets/images/logo.png" class="image"> -->
                        <div class="content">
                            Admin Login
                        </div>
                    </h2>
                    <form class="ui large form" action="./inc/signin.php" method="POST">
                        <div class="ui segment">
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input type="text" name="emailid" placeholder="E-mail address">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="lock icon"></i>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="ui fluid large teal submit button">Login</div>
                        </div>

                        <div class="ui error message"></div>

                    </form>


                </div>
            </div>



            <!-- Model area end -->

        </div>


        <div class="four wide column"></div>
    </div>


    <!-- From are End-->

    <!-- Jquery min Files -->
    <script src="./../Components/Dist/Jquery-3.1.1.min.js"></script>
    <!-- Sematic Min Files -->
    <script src="./../Components/Dist/semantic.min.js"></script>
    <!-- Custom-Js-Files -->
    <script src="./../Components/Dist/Custom.js"></script>
    <script>
        // Sign in Form Start
        $(document)
            .ready(function() {
                $('.ui.form')
                    .form({
                        fields: {
                            email: {
                                identifier: 'email',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your e-mail'
                                    },
                                    {
                                        type: 'email',
                                        prompt: 'Please enter a valid e-mail'
                                    }
                                ]
                            },
                            password: {
                                identifier: 'password',
                                rules: [{
                                        type: 'empty',
                                        prompt: 'Please enter your password'
                                    },
                                    {
                                        type: 'length[6]',
                                        prompt: 'Your password must be at least 6 characters'
                                    }
                                ]
                            }
                        }
                    });
            });

        // Sign in Form End
    </script>
</body>

</html>