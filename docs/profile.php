<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="navbar.css">
    <style>
      * {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}
      .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, .card a:hover {
  opacity: 0.7;
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

      <br>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <div class="card">
        <img src="../NoFramework/images/IMG_0162.JPG" style="width:100%">
        <h1>Matthew Hughes</h1>
        <p class="title">CEO & Founder, Fitness Tracker</p>
        <p>State University of New York at New Paltz</p>
        <div style="margin: 24px 0;">
          <a href="#"><i class="fa fa-instagram"></i></a> 
          <a href="#"><i class="fa fa-twitter"></i></a>  
          <a href="#"><i class="fa fa-linkedin"></i></a>  
          <a href="#"><i class="fa fa-facebook"></i></a> 
        </div>
        <p><button>Contact</button></p>
      </div>
 
</body>
</html>