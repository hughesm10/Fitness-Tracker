<!DOCTYPE html>
<html lang="en">
<head>
  <title>Profile</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
</head>
<body>

  <!--navbar section-->
  <?php
    include_once 'header.php';
  ?>

  <div class="cover">
    <div style="background-color: white; text-align: center; color: #0D226B;">
      <img src="img/nature-header.jpg" style="width: 100%;">
      <img class="profile-pic" src="img/IMG_0162.JPG">
      <br>
      <?php
            if(isset($_SESSION["userid"]))
            {
          ?>
            <p style="font-size: 30px;"><?= $_SESSION['useruid']; ?></p>
          <?php
            }
            else
            {
          ?>
            <p style="font-size: 30px;">My Profile</p>
          <?php
            }
          ?>
      <br>  
    </div>

    <!--below cover area-->
    <div style="display: flex;">
      <!--friends area-->
      <div style="min-height: 400px; flex: 1;">
        <div class="friends-bar">
          Friends<br>

          <div class="friends">
            <img style="width: 80px; height: 80px; border-radius: 50%;" src="img/152319944-close-up-headshot-portrait-of-smiling-vietnamese-young-woman-look-at-camera-talk-on-video-call-profi.jpg">
            Morgan Heath
          </div>

          <div class="friends">
            <img style="width: 80px; height: 80px; border-radius: 50%;" src="img/istockphoto-1131285202-612x612.jpg">
            Stanley Hunter
          </div>

          <div class="friends">
            <img style="width: 80px; height: 80px; border-radius: 50%;" src="img/depositphotos_31203671-stock-photo-friendly-smiling-man.jpg">
            William Banks
          </div>

          <div class="friends">
            <img style="width: 80px; height: 80px; border-radius: 50%;" src="img/istockphoto-1154642632-612x612.jpg">
            Marie Rowe
          </div>

          <div class="friends">
            <img style="width: 80px; height: 80px; border-radius: 50%;" src="img/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg">
            David Ingram
          </div>

        </div>

      </div>

      <!--posts area-->
      <div style="min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px;">

        <div style="border: solid thin #aaa; padding: 10px; background-color: white;">
          <form action="includes/postinc.php" method="post">
            <textarea name="post" style="resize: none;" placeholder="What's on your mind?"></textarea>
            <button type="submit" class="post-button">Post</button>
            <br>
          </form> 
        </div>

        <!--posts-->
        <div class="post-bar">
          <!--post 1-->
          <div class="post">
            <div>
              <img src="img/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg" style="width: 75px; border-radius: 50%;">
            </div>
            <div style="padding: 10px;">
              <div style="font-weight: bold; color: #0B409C; font-size: 18px;">David Ingram</div>
              <br>
                Just finished running a 5k running event at my local school in New Paltz. Feeling amazing right now!
              <br>
              <br>
              <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">August 4 2020</span>
            </div>
          </div>

          <!--post 2-->
          <div class="post">
            <div>
              <img src="img/152319944-close-up-headshot-portrait-of-smiling-vietnamese-young-woman-look-at-camera-talk-on-video-call-profi.jpg" style="width: 75px; border-radius: 50%;">
            </div>
            <div style="padding: 10px;">
              <div style="font-weight: bold; color: #0B409C; font-size: 18px;">Morgan Heath</div>
              <br>
              Anyone know any good at-home exercises for legs? I can't get to the gym and can't miss leg day!!
              <br>
              <br>
              <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">July 9 2020</span>
            </div>
          </div>

          <!--post 3-->
          <div class="post">
            <div>
              <img src="img/depositphotos_31203671-stock-photo-friendly-smiling-man.jpg" style="width: 75px; border-radius: 50%;">
            </div>
            <div style="padding: 10px;">
              <div style="font-weight: bold; color: #0B409C; font-size: 18px;">William Banks</div>
              <br>
                I went to the gym for the first time in 5 years today! It was a rough start, but I'm happy with how my session ended. I'm looking forward to the next one!
              <br>
              <br>
              <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">May 16 2020</span>
            </div>
          </div>

          <!--post 4-->
          <div class="post">
            <div>
              <img src="img/istockphoto-1131285202-612x612.jpg" style="width: 75px; border-radius: 50%;">
            </div>
            <div style="padding: 10px;">
              <div style="font-weight: bold; color: #0B409C; font-size: 18px;">Stanley Hunter</div>
              <br>
                Ashley, the trainer at Fitness Tracker, was sooooo helpful today! I reached a personal record in benching and leg press today! I recommend her for anyone looking for a personal trainer!
              <br>
              <br>
              <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 23 2020</span>
            </div>
          </div>


        </div>
    
      </div>
    </div>

  </div>

  <style>
    body {
      margin: 0; 
      padding: 0; 
      font-family: Arial, Helvetica, sans-serif; 
      background-color: lightgrey;
      margin-top: 40px;
    }

    .cover {
      width: 800px;
      margin: auto;
      margin-top: 80px;
      min-height: 300px;
    }

    .profile-pic {
      width: 150px;
      margin-top: -400px;
      border-radius: 50%;
      border: solid 2px white;
    }

    .friends-img {
      float: left;
    }

    .friends-bar {
      background-color: white;
      min-height: 400px;
      margin-top: 20px;
      color: #0B409C;
      padding: 8px;
    }

    .friends {
      clear: both;
      font-size: 16px;
      color: #0B409C;
    }

    textarea {
      width: 100%;
      border: none;
      font-family: Arial, Helvetica, sans-serif;
      font-size: 14px;
      height: 60px;
    }

    .post-button {
      float: right;
      background-color: #89CFF0;
      border: none;
      color: white;
      padding: 4px;
      font-size: 14px;
      border-radius: 2px;
      width: 50px;
    }

    .post-bar {
      margin-top: 20px;
      background-color: white;
      padding: 10px;
    }

    .post {
      padding: 4px;
      font-size: 12px;
      display: flex;
    }
    
  </style>

  <?php
    include_once 'footer.php';
  ?>

</body>
</html>