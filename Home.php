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
              <input type="text" name="last-name" placeholder="Last Name">
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

    <div class="four wide column">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat facilis ut, cum
      officia, cupiditate incidunt illum molestias neque aliquid excepturi nisi aliquam. Inventore rerum,
      aspernatur nam doloremque qui dicta earum!</div>
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
  </script>

</body>

</html>