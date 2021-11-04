<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="navbar.css">
  <style>
    body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password] {
      width: 50%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
      border-radius: 12px;
    }

    input[type=text]:focus, input[type=password]:focus {
      background-color: lightgray;
      outline: none;
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
</div>
<!--end navbar-->

  <form method="post" action="includes/logininc.php" class="container">
    <h1>Login</h1>
    <p>Please fill in this form to login.</p>
    <br>

    <label for="uid"><b>Username or Email</b></label><br>
    <input type="text" placeholder="Enter Username or Email" name="uid" id="uid" required><br>

    <label for="pwd"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required><br>

    <div class="bottom-buttons">
      <button type="button" class="cancelbtn" onclick="document.getElementById('uid').value = ''; document.getElementById('pwd').value = '';">Cancel</button>
      <button type="submit" class="signupbtn">Login</button>
    </div>

    <p>Don't have an account? <a href="signup.php" style="color: LightSkyBlue">Sign up</a>.</p>

  </form>

</body>
</html>