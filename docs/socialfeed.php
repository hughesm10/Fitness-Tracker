<!--https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_templates_social&stacked=h-->
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Social Feed</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="navbar.css">

  <style>
    body {
      padding: 0;
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
  </style>

</head>
<body>

<!--start navbar-->
<div class="topnav">
  <a href="index.php"><img src="https://img.icons8.com/color/96/000000/strength.png" style="width: 40px;"></a>  <!--homepage logo-->
  <a href="dashboard.php"><img src="https://img.icons8.com/material/96/ffffff/dashboard-layout.png" style="width: 40px;"></a>  <!--dashboard tab image-->
  <a href="socialfeed.php"><img src="https://img.icons8.com/ios-filled/100/ffffff/conference-call.png" style="width: 40px;"></a>  <!--social tab image-->
  <div class="topnav-right">
    <?php
      if(isset($_SESSION["userid"]))
      {
    ?>
      <div class="dropdown" style="float:right;">
        <div>
          <img class="dropbtn" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/ffffff/external-user-interface-kiranshastry-solid-kiranshastry.png">
        </div>
        <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="settings.php">Settings</a>
          <a href="#">Log out</a>
        </div>
      </div>
    <?php
      }
      else
      {
    ?>
      <a><input type="button" class="signup-button" value="Sign Up" onclick="location.href='signup.php';"></a>
      <a><input type="button" class="login-button" value="Login" onclick="location.href='login.php';"></a>
    <?php
      }
    ?>

  </div>
</div>
<!--end navbar-->

<h1>Social Feed</h1>
    
</body>
</html>