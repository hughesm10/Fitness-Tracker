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
  ?>

  <div class="cover">
    
    <!--below cover area-->
    <div style="display: flex;">
      <!--friends area-->
      <div style="min-height: 400px; flex: 1;">
        <div class="friends-bar">
          <img src="img/IMG_0162.JPG" class="profile-pic"><br>
          
          <?php
            if(isset($_SESSION["userid"]))
            {
          ?>
            <p><?= $_SESSION['useruid']; ?></p>
          <?php
            }
            else
            {
          ?>
            <p>My Profile</p>
          <?php
            }
          ?>

        </div>

      </div>

      <!--posts area-->
      <div style="min-height: 400px; flex: 2.5; padding: 20px; padding-right: 0px;">

        <div style="border: solid thin #aaa; padding: 10px; background-color: white;">
          <textarea style="resize: none;" placeholder="What's on your mind?"></textarea>
          <input type="submit" class="post-button" value="Post">
          <br>
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

          <!--post 5-->
          <div class="post">
            <div>
              <img src="img/360_F_364211147_1qgLVxv1Tcq0Ohz3FawUfrtONzz8nq3e.jpg" style="width: 75px; border-radius: 50%;">
            </div>
            <div style="padding: 10px;">
              <div style="font-weight: bold; color: #0B409C; font-size: 18px;">David Ingram</div>
              <br>
                Feeling very sore after the gym, but hoping the results show soon!
              <br>
              <br>
              <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 15 2020</span>
            </div>
          </div>

          <!--post 6-->
          <div class="post">
            <div>
              <img src="img/152319944-close-up-headshot-portrait-of-smiling-vietnamese-young-woman-look-at-camera-talk-on-video-call-profi.jpg" style="width: 75px; border-radius: 50%;">
            </div>
            <div style="padding: 10px;">
              <div style="font-weight: bold; color: #0B409C; font-size: 18px;">Morgan Heath</div>
              <br>
                Been trying yoga for the past week! I feel more calm and relaxed in my day to day mindset!
              <br>
              <br>
              <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">April 4 2020</span>
            </div>
          </div>

          <!--post 7-->
          <div class="post">
            <div>
              <img src="img/depositphotos_31203671-stock-photo-friendly-smiling-man.jpg" style="width: 75px; border-radius: 50%;">
            </div>
            <div style="padding: 10px;">
              <div style="font-weight: bold; color: #0B409C; font-size: 18px;">William Banks</div>
              <br>
                Going on a 3 mile hike with my dog. He's so excited!!
              <br>
              <br>
              <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">March 16 2020</span>
            </div>
          </div>

          <!--post 8-->
          <div class="post">
            <div>
              <img src="img/istockphoto-1131285202-612x612.jpg" style="width: 75px; border-radius: 50%;">
            </div>
            <div style="padding: 10px;">
              <div style="font-weight: bold; color: #0B409C; font-size: 18px;">Stanley Hunter</div>
              <br>
                I'm having a hard time being productive at the gym? Anyone know what I can do to get better results at the gym?
              <br>
              <br>
              <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999;">March 3 2020</span>
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
      margin-top: 60px;
      background-color: lightgrey;
    }

    .cover {
      width: 800px;
      margin: auto;
      min-height: 300px;
    }

    .profile-pic {
      width: 150px;
      border-radius: 50%;
      border: solid 2px white;
    }

    .friends-bar {
      background-color: white;
      min-height: 200px;
      margin-top: 20px;
      color: black;
      padding: 8px;
      text-align: center;
      font-size: 20px;
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