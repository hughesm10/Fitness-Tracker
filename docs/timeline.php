<!DOCTYPE html>
<html lang="en">
<head>
  <title>Timeline</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>

  <?php
    include_once 'header.php';

    include_once 'postinc.php';

    if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $title = $_POST['title'];
      $text = $_POST['text'];

      $sql = "INSERT INTO posts (name, title, text) VALUES ('$name', '$title', '$text')";
      $result = mysqli_query($conn, $sql);
      if($result)
      {
        echo "<script>alert('Post added successfully!')</script>";
      } else {
        echo "<script>alert('Post added unsuccessfully.')</script>";
      }
    }
  ?>

  <div class="container">

    <form action="" method="post" class="form">
      <div class="row">
        <div class="input-group">
          <label for="name">Name</label>
          <input type="text" id="name" name="name" placeholder="Enter Name" value="<?php echo $name; ?>" required>
        </div>
        <div class="input-group">
          <label for="title">Title</label>
          <input type="text" id="title" name="title" placeholder="Enter Title" value="<?php echo $title; ?>" required>
        </div>
      </div>
      <div class="input-group textarea">
        <label for="text">Text</label>
        <textarea name="text" id="text" name="text" style="resize: none;" placeholder="Enter Text" required><?php echo $text; ?></textarea>
      </div>
      <div class="input-group">
        <button name="submit" class="btn">Post</button>
      </div>
    </form>

  </div>

  <style>
    body {
      margin: 0; 
      padding: 0; 
      font-family: Arial, Helvetica, sans-serif; 
      margin-top: 40px;
    }

    .container {
      width: 800px;
      margin: auto;
      display: flex;
    }   
  </style>

  <?php
    include_once 'footer.php';
  ?>

</body>
</html>