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

    <!--below cover area-->
    <div style="display: flex;">
      <!--friends area-->
      <div style="background-color: green; min-height: 100px; flex: 1;">
        <div class="friends-bar">
          Friends<br>

          <div class="friends">
            <img class="friends-img" src="img/IMG_0162.JPG">
            <br>
            Matthew Hughes

          </div>
        </div>
      </div>

      <!--posts area-->
      <div style="background-color: grey; min-height: 100px; flex: 2.5;">
    
      </div>
    </div>

  </div>

  <style>
    body {margin: 0; padding: 0; font-family: Arial, Helvetica, sans-serif; margin-top: 60px;}

    .cover {
      width: 800px;
      margin: auto;
      min-height: 300px;
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