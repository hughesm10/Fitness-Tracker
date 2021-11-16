<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>

  <?php
    include_once 'header.php';
  ?>

  <div class="cover">
    <div style="background-color: white; text-align: center; color: #0D226B;">
      <img src="img/nature-header.jpg" style="width: 100%;">
      <img class="profile-pic" src="img/IMG_0162.JPG">
      <br>
        <div style="font-size: 20px;">Matthew Hughes</div>
      <br>

      <div class="menu-buttons">Timeline</div>
      <div class="menu-buttons">About</div>
      <div class="menu-buttons">Friends</div>
      <div class="menu-buttons">Photos</div>
      <div class="menu-buttons">Settings</div>
    
    </div>
  </div>

  <style>
    body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; margin-top: 60px;}

    .cover {
      width: 800px;
      margin: auto;
      background-color: lightblue;
      min-height: 400px;
    }

    .profile-pic {
      width: 150px;
      margin-top: -400px;
      border-radius: 50%;
      border: solid 2px white;
    }

    .menu-buttons {
      width: 100px;
      display: inline-block;
      margin: 2px;
    }
  </style>
  
</body>
</html>