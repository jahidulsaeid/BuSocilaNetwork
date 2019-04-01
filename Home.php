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
  <link rel="stylesheet" href="Home.css">


</head>

<body>
  <!-- Header Area Start -->
  <?php include("./Components/Header/Header.php"); ?>
  <!-- Header Area End -->
  <div class="ui grid container">

    <div class="four wide column">
      <div class="ui middle aligned selection list">
        <div class="item">
          <div class="right floated content">
            <div class="ui button">Add</div>
          </div>
          <img class="ui mini circular image" src="./Images/muhammadsaeid.jpg" style="height:35px;">
          <div class="content">
            <div class="header">Helen</div>
          </div>
        </div>
        <div class="item">
          <div class="right floated content">
            <div class="ui button">Add</div>
          </div>
          <img class="ui mini circular image" src="./Images/muhammadsaeid.jpg" style="height:35px;">
          <div class="content">
            <div class="header">Helen</div>
          </div>
        </div>
        <div class="item">
          <div class="right floated content">
            <div class="ui button">Add</div>
          </div>
          <img class="ui mini circular image" src="./Images/muhammadsaeid.jpg" style="height:35px;">
          <div class="content">
            <div class="header">Helen</div>
          </div>
        </div>
        <div class="item">
          <div class="right floated content">
            <div class="ui button">Add</div>
          </div>
          <img class="ui mini circular image" src="./Images/muhammadsaeid.jpg" style="height:35px;">
          <div class="content">
            <div class="header">Helen</div>
          </div>
        </div>
        <div class="item">
          <div class="right floated content">
            <div class="ui button">Add</div>
          </div>
          <img class="ui mini circular image" src="./Images/muhammadsaeid.jpg" style="height:35px;">
          <div class="content">
            <div class="header">Helen</div>
          </div>
        </div>
      </div>
    </div>

    <div class="ui eight wide column ">
      <!-- Model area start -->

      <button class="ui button yellow create_btn" type="button" id="noticeBoardFrom">Create</button>

      <div class="ui modal basic">
        <div class="header">This is Header</div>
        <div class="content">
          <form class="ui form">
            <div class="field">
              <label>First Name</label>
              <input type="text" name="first-name" placeholder="First Name">
            </div>
            <div class="field">
              <label>Last Name</label>
              <input type="text" name="last-name transparent" placeholder="Last Name">
            </div>
            <div class="field">
              <div class="ui checkbox">
                <input type="checkbox" tabindex="0" class="hidden">
                <label>I agree to the Terms and Conditions</label>
              </div>
            </div>
            <button class="ui button" type="submit">Submit</button>
          </form>
        </div>
        <div class="actions">
          <div class="ui approve button">Approve</div>
          <div class="ui button">Neutral</div>
          <div class="ui cancel button">Cancel</div>
        </div>
      </div>

      <!-- Model area end -->

    </div>

    <div class="four wide column">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat facilis ut, cum
      officia, cupiditate incidunt illum molestias neque aliquid excepturi nisi aliquam. Inventore rerum,
      aspernatur nam doloremque qui dicta earum!
    </div>
  </div>


  <!-- From are Start-->

  <div class="ui grid container pb50 pt20">
    <div class="four wide column">

    </div>
    <div class="ui eight wide column ">
      <!-- Model area start -->
      <div class="ui middle aligned center aligned grid">
        <div class="column">
          <h2 class="ui teal image header">
            <!-- <img src="assets/images/logo.png" class="image"> -->
            <div class="content">
              Log-in to your account
            </div>
          </h2>
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
                <label for="">Birth Of Day : </label>
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

          <div class="ui message">
            New to us? <a href="#">Sign Up</a>
          </div>
        </div>
      </div>



      <!-- Model area end -->

    </div>


    <div class="four wide column"></div>
  </div>

  <!-- Footer Area Start -->
  <?php include("./Components/Footer/Footer.php"); ?>
  <!-- Footer Area End -->


  <!-- Jquery min Files -->
  <script src="./Components/Dist/Jquery-3.1.1.min.js"></script>
  <!-- Sematic Min Files -->
  <script src="./Components/Dist/semantic.min.js"></script>
  <!-- Custom-Js-Files -->
  <script src="./Components/Dist/Custom.js"></script>
  <script>
    $(function () {
      $("#noticeBoardFrom").click(function () {
        $(".ui.modal.basic").modal('show');
      });

    });

    $(document).ready(function () {
      $('.ui.dropdown').dropdown();
    });
  </script>

</body>

</html>