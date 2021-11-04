<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
        <link rel="stylesheet" href="navbar.css">
        <style>
            body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif;}
        * {box-sizing: border-box}
            /* Full-width input fields */
    input[type=email] {
      width: 50%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
      border-radius: 12px;
      font-size: 16px;
    }

    input[type=email]:focus, textarea:focus {
      background-color: lightgray;
      outline: none;
    }

    textarea { 
        width: 50%;
        padding: 15px;
        margin: 5px 0 22px 0;
        display: inline-block;
        border: none;
        background: white;
        border-radius: 12px;
        height:  150px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: 16px;
    }

    /* Set a style for all buttons */
    button {  
      background-color: #89CFF0;
      color: white;
      font-size: 20px;
      font-weight: 500;
      border: none;
      border-radius: 12px;
      cursor: pointer;
      width: fit-content;
      padding: 12px;
      margin: 0 10px;
      display: inline-block;
    }

    .bottom-buttons{
      text-align: center;
    }

    .cancelbtn {
      background-color: #f44336;
    }
  
    .container {
      text-align: center;
      background-color: #0D226B;
      color: white;
      border-radius: 12px;
      width: 50%;
      margin: auto;
      margin-top: 20px;
      padding: 20px;
    }

    .container label {
      display: inline-block; 
      width: 50%; 
      text-align: left;
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

        <form method="post" class="container">
            <h1>Contact</h1>
            <p>Please fill in this form to contact us.</p>
            <br>
        
            <label for="email"><b>Email</b></label><br>
            <input type="email" placeholder="Enter Email" name="email" id="email" required><br>
        
            <label for="message"><b>Message</b></label><br>
            <textarea placeholder="Enter Message" name="message" id="message" required></textarea><br>
        
            <div class="bottom-buttons">
              <button type="button" class="cancelbtn" onclick="document.getElementById('email').value = ''; document.getElementById('message').value = '';">Cancel</button>
              <button type="submit">Submit</button>
            </div>
        
          </form>

    </body>

</html>