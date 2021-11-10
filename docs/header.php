<?php
  session_start();
?>

<div class="topnav">
  <a href="index.php"><img src="https://img.icons8.com/color/96/000000/strength.png" style="width: 40px;"></a>  <!--homepage logo-->
  <a href="dashboard.php"><img src="https://img.icons8.com/material/96/ffffff/dashboard-layout.png" style="width: 40px;"></a>  <!--dashboard tab image-->
  <a href="social.php"><img src="https://img.icons8.com/ios-filled/100/ffffff/conference-call.png" style="width: 40px;"></a>  <!--social tab image-->
  <div class="topnav-right">
    <?php
      if(isset($_SESSION["userid"]))
      {
    ?>
      <div class="dropdown" style="float:right;">
        <div>
          <img class="dropbtn" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/ffffff/external-user-interface-kiranshastry-solid-kiranshastry.png" onclick="location.href='profile.php';">
        </div>
        <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="settings.php">Settings</a>
          <a href="includes/logoutinc.php">Log out</a>
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

<style>
  /* Colors:
    Light Blue: #0B409C
    Yellow: #FDBE34
    Dark Blue: #0D226B
  */

  .topnav {
    background-color: #0B409C;
    width: 100%;
    position: sticky;
    display: table;
    top: 0;
    z-index: 100;
    margin: 0; 
    font-family: Arial, Helvetica, sans-serif;
  }

  .topnav a {
    float: left;
    text-align: center;
    padding: 16px 20px;
    text-decoration: none;
    font-size: 18px;
  }

  .topnav-right {
    float: right;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropbtn {
    margin-top: 10px;
    margin-right: 20px;
    width: 55px;
    height: 55px;
    cursor: pointer;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #0D226B;
    min-width: 140px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 12px;
    z-index: 1;
    margin-top: 0px;
    margin-right: 20px;
  }

  .dropdown-content a {
    color: white;
    padding: 12px 16px;
    min-width: 140px;
    border-radius: 12px;
    text-decoration: none;
    text-align: left;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
    display: block;
  }

  .dropdown-content a:hover {background-color: #ddd; color: #0B409C;}

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background-color: #0B409C;
    color: white;
  }

  .signup-button, .login-button {
    border-radius: 12px;
    height: 40px;   
    width: 100px;
    font-size: 20px;
    font-weight: 500;
    background-color: #0B409C;
    color: white;
    border: solid white 2px;
    cursor: pointer;
  }

  .signup-button:hover, .login-button:hover{
    background-color: white;
    color: #0B409C;
  }
</style>