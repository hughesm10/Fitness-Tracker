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
  
    
    </div>
  </div>

  <style>
    body {font-family: Arial, Helvetica, sans-serif; margin: 0;}

    .cover {
      width: 800px;
      margin: auto;
      background-color: lightblue;
      min-height: 400px;
    }

    .profile-pic {
      width: 150px;
      border-radius: 50%;
      border: solid 2px white;
    }

  </style>

  <?php
    include_once 'footer.php';
  ?>

</body>
</html>