<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" href="navbar.css">
  <style>
    body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif;}
    * {box-sizing: border-box}

    /* Full-width input fields */
    input[type=text], input[type=password], input[type=email] {
      width: 50%;
      padding: 15px;
      margin: 5px 0 22px 0;
      display: inline-block;
      border: none;
      background: white;
      border-radius: 12px;
    }

    input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
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

    .bottom-buttons {
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

  <form method="post" action="includes/signupinc.php" class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <br>

    <label for="uid"><b>Username</b></label><br>
    <input type="text" placeholder="Enter Username" name="uid" id="uid" required><br>

    <label for="email"><b>Email</b></label><br>
    <input type="email" placeholder="Enter Email" name="email" id="email" required><br>

    <label for="pwd"><b>Password</b></label><br>
    <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required><br>

    <label for="pwdrepeat"><b>Confirm Password</b></label><br>
    <input type="password" placeholder="Confirm Password" name="pwdrepeat" id="pwdrepeat" required><br>

    <label style="width: fit-content">
      <input type="checkbox" name="tos" id="tos" style="margin-bottom: 15px;" required> By creating an account you agree to our <a href="tos.php" style="color: LightSkyBlue">Terms & Conditions</a>.
    </label>

    <br>
    <br>

    <div class="bottom-buttons">
      <button type="button" class="cancelbtn" onclick="clearInputs()">Cancel</button>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>

    <p>Already have an account? <a href="login.php" style="color: LightSkyBlue">Login</a>.</p>

  </form>

  <script>

    function clearInputs() {

      document.getElementById('uid').value = '';
      document.getElementById('email').value = '';
      document.getElementById('pwd').value = '';
      document.getElementById('pwdrepeat').value = '';
      document.getElementById('tos').checked = false;
    }

  </script>

</body>
</html>