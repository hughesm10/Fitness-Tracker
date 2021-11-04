<!DOCTYPE html>
<html lang="en">
<head>
  <title>Fitness Tracker</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <link rel="stylesheet" href="navbar.css">
  <style>
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }

.header img {
  position: relative;
  width: 100%;
  height: 100%;
}

.header-text {
  position: absolute;
  top: 12%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 60px;
  text-align: center;
  color: #FDBE34;
}

.sub-text {
  position: absolute;
  top: 22%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 35px;
  text-align: center;
  color: #FDBE34;
}

.header-button {
  position: absolute;
  top: 34%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 25px;
  text-align: center;
  border-radius: 12px;
  height: fit-content;   
  width: fit-content;
  font-weight: 500;
  background-color: #0B409C;
  color: white;
  border: solid #0B409C 4px;
  cursor: pointer;
  margin: 0;
  padding: 10px;
}

.header-button:hover, .contact-button:hover {
  font-size: 25px;
  font-weight: 500;
  background-color: white;
  color: #0B409C;
}

.bottom-img{
  height: 50%;
  width: 50%;
  display: block;
  margin: auto;
}

.contact-button{
  border-radius: 12px;
    height: fit-content;   
    width: fit-content;
    font-size: 25px;
    font-weight: 500;
    background-color: #0B409C;
    color: white;
    border: solid #0B409C 4px;
    cursor: pointer;
    margin: 0;
    padding: 10px;
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
          <a href="logoutinc.php">Log out</a>
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

<div class="wrapper">

  <div class="header">
    <img src="img/8225.jpg">
    <p class="header-text">FITNESS TRACKER</p>
    <p class="sub-text">Track all your fitness needs!</p>
    <input type="button" class="header-button" value="Get Started" onclick="location.href='signup.php';">
  </div>

  <!-- About Section -->
  <div style="padding: 20px;">
    <h3 style="text-align: center; display: inline-block; width: 100%;">ABOUT FITNESS TRACKER</h3>
    <p style="text-align: center; display: inline-block; width: 100%; font-size: 18px;">Key features of the website</p>
    <div style="margin-top:64px; padding: 0 8px; text-align: center;">
      <div style="width: 33%; float: left;">
        <img src="https://img.icons8.com/fluency/48/000000/dashboard.png" style="width: 60px;">
        <p style="font-size: 36px;">Dashboard</p>
        <p>See all your data in one central spot on the Dashboard page.</p>
      </div>
      <div style="width: 33%; float: left;">
        <img src="https://img.icons8.com/external-sbts2018-flat-sbts2018/58/000000/external-social-network-social-media-sbts2018-flat-sbts2018.png" style="width: 60px;">
        <p style="font-size: 36px;">Social Feed</p>
        <p>Connect and compete with your friends to reach new goals.</p>
      </div>
      <div style="width: 33%; float: left;">
        <img src="https://img.icons8.com/external-flatart-icons-flat-flatarticons/64/000000/external-goals-user-interface-flatart-icons-flat-flatarticons.png" style="width: 58px;">
        <p style="font-size: 36px;">Create Goals</p>
        <p>Set goals to reach and mark your progression.</p>
      </div>

    </div>
  </div>

  <!-- stats section -->
  <div style="background-color: #0B409C; color: white; padding-top: 64px; padding-bottom: 64px; text-align: center; display: inline-block; width: 100%;">
    <div style="width: 25%; float: left;">
      <span style="font-size: 36px;">14+</span>
      <br>Trainers
    </div>
    <div style="width: 25%; float: left;">
      <span style="font-size: 36px;">55+</span>
      <br>Exercises
    </div>
    <div style="width: 25%; float: left;">
      <span style="font-size: 36px;">89+</span>
      <br>Members
    </div>
    <div style="width: 25%; float: left;">
      <span style="font-size: 36px;">150+</span>
      <br>Goals Met
    </div>
  </div>

  <!---bottom image section--->
  <div>
    <img class="bottom-img" src="img/11101.jpg">
  </div>

  <!-- Contact Us section -->
  <div style="color: black; background-color: #FDBE34; text-align: center; display: inline-block; width: 100%; height: 220px;">
    <div>
      <h3 style="font-size: 30px;">Contact Us</h3>
      <p>Let's get in touch. Send us a message:</p>
      <input type="button" class="contact-button" value="Contact Us" onclick="location.href='contact.php';">
    </div>
  </div>

</div>
<!-- Footer -->
<footer style="display: inline-block; width: 100%; text-align: center; color: white; background-color: #0D226B; padding-top: 30px; padding-bottom: 64px;">
  <p style="font-size: 40px;">Fitness Tracker</p>
</footer>

</body>
</html>