<?php
  session_start();
?>

<div class="navbar">
  <a href="index.php">Home</a>
  <a href="dashboard.php">Dashboard</a>
  <a href="timeline.php">Timeline</a>

  <?php
    if(isset($_SESSION["userid"]))
    {
  ?>
    <div class="dropdown">
      <img class="dropbtn" src="https://img.icons8.com/external-kiranshastry-solid-kiranshastry/64/ffffff/external-user-interface-kiranshastry-solid-kiranshastry.png" onclick="location.href='profile.php';">
      <div class="dropdown-content">
        <a href="settings.php">Settings</a>
        <a href="includes/logoutinc.php">Log out</a>
      </div>
    </div>
  <?php
    }
    else
    {
  ?>
    <input type="button" class="navbar-button" value="Login" onclick="location.href='login.php';">
    <input type="button" class="navbar-button" value="Sign Up" onclick="location.href='signup.php';">
  <?php
    }
  ?>
</div>


<style>
  /* Colors:
    Light Blue: #0B409C
    Yellow: #FDBE34
    Dark Blue: #0D226B
  */

  .navbar {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #0B409C;
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 40px;
    z-index: 999;
  }

  .navbar a {
    float: left;
    font-size: 16px;
    color: white;
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
  }

  .navbar-button {
    float: right;
    border-radius: 12px;   
    width: fit-content;
    line-height: 14px;
    font-size: 16px;
    font-weight: 550;
    background-color: #0B409C;
    color: white;
    border: solid white 2px;
    cursor: pointer;
    padding: 6px 14px;
    margin: 5px 20px 5px 0px;
  }

  .navbar-button:hover {background-color: white; color: #0B409C;}

  .dropbtn {
    width: 40px;
    height: 40px;
    margin-right: 20px;
  }

  .dropdown {
    position: relative;
    display: inline-block;
    float: right;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    top: 40px;
    right: 20px;
    background-color: #0D226B;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    border-radius: 12px;
    z-index: 1;
  }

  .dropdown-content a {
    color: white;
    font-size: 18px;
    padding: 8px 16px;
    text-decoration: none;
    text-align: left;
    display: block;
    width: 100px;
  }

  .dropdown-content a:hover {
    background-color: lightgrey;
    color: black;
    border-radius: 12px;
  }

  .dropdown:hover .dropdown-content {display: inline-block;}

  .dropbtn:hover {cursor: pointer;}

</style>