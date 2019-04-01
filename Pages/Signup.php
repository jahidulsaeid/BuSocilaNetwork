<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bu Socila NetWork</title>
    <!-- Semantic min Css -->
    <link rel="stylesheet" href="../Components/Dist/semantic.min.css">
    <!-- margin-padding min css -->
    <link rel="stylesheet" href="../Components/Dist/margin.padding.min.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="../Home.css">
</head>

<body>
    <?php include("./../Components/Header/Header.php"); ?>
    <!-- From are Start-->

            <!-- Model area start -->
            <div class="ui grid container pb50 pt20">
                    <div class="three wide column">
                
                    </div>
                    <div class="ui ten wide column ">
                      <!-- Model area start -->
                      <h2 class="ui teal image header center aligned grid">
                          <!-- <img src="./../Images/muhammadsaeid.jpg" class="image"> -->
                          <div class="content">
                            Create your account
                          </div>
                        </h2>
                      <div class="ui middle grid">
                        <div class="column">
                          
                          <form class="ui large form">
                            <div class="ui segment">
                              <div class="two fields">
                                <div class="field">
                                  <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input type="text" name="first_name" placeholder="First Name">
                                  </div>
                                </div>
                                <div class="field">
                                  <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input type="password" name="sur_name" placeholder="Last Name">
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
                                    <input type="password" name="password" placeholder="Re-Password">
                                  </div>
                                </div>
                              </div>
                              <div class="field">
                                <div class="ui left icon input">
                                  <i class="user icon"></i>
                                  <input type="text" name="email" placeholder="E-mail address">
                                </div>
                              </div>
                
                              <div class="field">
                                <div class="ui selection dropdown ">
                                  <input type="hidden" name="gender">
                                  <i class="dropdown icon"></i>
                                  <div class="default text">Gender</div>
                                  <div class="menu">
                                    <div class="item" data-value="1">Male</div>
                                    <div class="item" data-value="0">Female</div>
                                  </div>
                                </div>
                              </div>
                
                              <div class="fields">
                                <label for="" class="pl10">Birth Of Day : </label>
                                <div class="sixteen wide field">
                                  <div class="three fields">
                                    <div class="field">
                                      <select class="ui fluid search dropdown" name="date">
                                        <option value="">Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                      </select>
                                    </div>
                                    <div class="field">
                                      <select class="ui fluid search dropdown" name="date">
                                        <option value="">Month</option>
                                        <option value="1">January</option>
                                        <option value="2">February</option>
                                        <option value="3">March</option>
                                        <option value="4">April</option>
                                        <option value="5">May</option>
                                        <option value="6">June</option>
                                        <option value="7">July</option>
                                        <option value="8">August</option>
                                        <option value="9">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                      </select>
                                    </div>
                                    <div class="field">
                
                                      <div class="field">
                                        <select class="ui fluid search dropdown" name="date">
                                          <option value="">Year</option>
                                          <option value="1">January</option>
                                          <option value="2">February</option>
                                          <option value="3">March</option>
                                          <option value="4">April</option>
                                          <option value="5">May</option>
                                          <option value="6">June</option>
                                          <option value="7">July</option>
                                          <option value="8">August</option>
                                          <option value="9">September</option>
                                          <option value="10">October</option>
                                          <option value="11">November</option>
                                          <option value="12">December</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="required inline field left">
                                <div class="ui checkbox ">
                                  <input type="checkbox" tabindex="0" class="hidden">
                                  <label>I agree to the terms and conditions</label>
                                </div>
                              </div>
                
                
                              <div class="ui fluid large teal submit button">Login</div>
                            </div>
                
                            <div class="ui error message"></div>
                
                          </form>
                
                          <div class="ui message center aligned grid">
                            New to us? <a href="#">Sign Up</a>
                          </div>
                        </div>
                      </div>
                
                
                
                      <!-- Model area end -->
                
                    </div>
                
                
                    <div class="three wide column"></div>
                  </div>

            <!-- Model area end -->



    <!-- From are End-->
    <?php include("./../Components/Footer/Footer.php"); ?>

    <!-- Jquery min Files -->
    <script src="../Components/Dist/Jquery-3.1.1.min.js"></script>
    <!-- Sematic Min Files -->
    <script src="../Components/Dist/semantic.min.js"></script>
    <!-- Custom-Js-Files -->
    <script src="../Components/Dist/Custom.js"></script>
    <script>
 
    </script>
</body>

</html>