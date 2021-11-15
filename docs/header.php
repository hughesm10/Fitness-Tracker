<?php
  session_start();
?>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="dashboard.php">Dashboard</a>
  <a href="social.php">Social</a>
  <div class="topnav-right">
    <?php
      if(isset($_SESSION["userid"]))
      {
    ?>
      <div class="dropdown">
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
      <input type="button" class="signup-button" value="Sign Up" onclick="location.href='signup.php';">
      <input type="button" class="login-button" value="Login" onclick="location.href='login.php';">
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
    overflow: hidden;
    font-family: Arial, Helvetica, sans-serif;
  }

  .topnav a {
    float: left;
    color: white;
    margin: 20px 0px 20px 30px;
    text-decoration: none;
    font-size: 18px;
  }

  .topnav-right {float: right;}

  .dropbtn {
    margin-top: 5px;
    margin-right: 20px;
    width: 50px;
    height: 50px;
    cursor: pointer;
  }

  .dropdown:hover {background-color: #0B409C; color: white;}

  .dropdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #0D226B;
    width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 12px;
    z-index: 1;
    margin-top: 0px;
    margin-right: 20px;
  }

  .dropdown-content a {
    float: none;
    color: white;
    border-radius: 12px;
    text-decoration: none;
    display: block;
    text-align: left;
    margin: 10px;
    padding: 10px;
  }

  .dropdown-content a:hover {background-color: #ddd; color: #0B409C;}

  .dropdown:hover .dropdown-content {display: block;}

  .signup-button, .login-button {
    border-radius: 12px;   
    width: 100px;
    height: 40px;
    font-size: 20px;
    font-weight: 500;
    background-color: #0B409C;
    color: white;
    border: solid white 2px;
    cursor: pointer;
    padding: 6px 10px;
    margin: 10px 20px 10px 0px;
  }

  .signup-button:hover, .login-button:hover {background-color: white; color: #0B409C;}
</style>