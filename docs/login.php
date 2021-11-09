<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>

  <?php
    include_once 'header.php';
  ?>

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
      <button type="submit" class="signupbtn" name="submit">Login</button>
    </div>

    <p>Don't have an account?<a href="signup.php" style="color: LightSkyBlue">Sign up</a>.</p>

  </form>

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
      border-radius: 20px;
      width: 50%;
      margin: auto;
      margin-top: 40px;
      margin-bottom: 40px;
      padding: 20px;
    }

    .container label {
      display: inline-block; 
      width: 50%; 
      text-align: left;
    }

  </style>

  <?php
    include_once 'footer.php';
  ?>

</body>
</html>