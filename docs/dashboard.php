<!DOCTYPE html>
<html lang="en">
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <link rel="stylesheet" href="navbar.css">
    <style>
        * {
            box-sizing: border-box;
        }
    
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, Helvetica, sans-serif;
            background-color: white;
        }

        .column {
            background-color: #333;
            padding: 20px;
            border-radius: 12px;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-family: sans-serif;
            cursor: pointer;
        }
    
        .containerTab {
            padding: 20px;
            color: white;
        }

        .row {
            margin: 20px;
            width: 400px;
            height: 300px;
            display: grid;
            grid-template-columns: 200px 200px;
            grid-row: auto auto;
            grid-column-gap: 20px;
            grid-row-gap: 20px;
        }
    
        /* Clear floats after the columns */
        .row:after {
            content: "";
            display: table;
            clear: both;
        }
    
        /* Closable button inside the container tab */
        .closebtn {
            float: right;
            color: white;
            font-size: 35px;
            cursor: pointer;
        }
    </style>

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

        <!-- !PAGE CONTENT! -->
        <div style="margin-top: 20px;">

            <h1 style="text-align: left; margin: 20px;">Trend Overview</h1>

            <!-- Four columns -->
            <div class="row">
                <div class="column" onclick="openTab('b1');" style="background-color: #0B409C;">
                    <img src="https://img.icons8.com/ios-filled/100/ffffff/running.png" style="width: 100px;"/>
                </div>
                <div class="column" onclick="openTab('b2');" style="background-color: #FDBE34;">
                    <img src="https://img.icons8.com/ios-filled/100/ffffff/flex-biceps.png" style="width: 100px;"/>
                </div>
                <div class="column" onclick="openTab('b3');" style="background-color: gray;">
                    <img src="https://img.icons8.com/ios-glyphs/90/ffffff/treadmill.png" style="width: 100px;"/>
                </div>
                <div class="column" onclick="openTab('b4');" style="background-color: #0D226B;">
                    <img src="https://img.icons8.com/fluency-systems-filled/96/ffffff/healthy-food-calories-calculator.png" style="width: 100px;"/>
                </div>
            </div>
            
            <!-- Full-width columns: (hidden by default) -->
            <div id="b1" class="containerTab" style="display:none; background: #0B409C; text-align: center;">
                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                <h2>Pedometer</h2>
                <p>You took 4,286 steps today.</p>
                <p><img src="https://img.icons8.com/ios-filled/64/ffffff/long-arrow-up.png"/>
                    Steps are trending up</p>
            </div>

            <div id="b2" class="containerTab" style="display:none; background: #FDBE34; text-align: center;">
                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                <h2>Muscle Training</h2>
                <p>You lifted for 32 minutes today.</p>
                <p><img src="https://img.icons8.com/ios-filled/64/ffffff/long-arrow-up.png"/>
                    Lift minutes are trending up</p>
            </div>

            <div id="b3" class="containerTab" style="display:none; background: gray; text-align: center;">
                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                <h2>Cardio Workout</h2>
                <p>You worked out for 15 minutes today.</p>
                <p><img src="https://img.icons8.com/ios-glyphs/64/ffffff/long-arrow-down.png"/>
                    Cardio minutes are trending down</p>
            </div>

            <div id="b4" class="containerTab" style="display:none; background: #0D226B; text-align: center;">
                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                <h2>Calories Intake</h2>
                <p>You took in 942 calories today.</p>
                <p><img src="https://img.icons8.com/ios-filled/64/ffffff/long-arrow-up.png"/>
                    Calories are trending up</p>
            </div>
            
            <div style="padding: 20px;">
                <h5>Recent Data Added</h5>
                <table style="width: 75%;">
                    <tr>
                        <td><img src="https://img.icons8.com/fluency-systems-filled/96/000000/healthy-food-calories-calculator.png" style="width: 10%;"/></td>
                        <td>New record, over 900 calories.</td>
                        <td><i>942 calories</i></td>
                    </tr>
                    <tr style="background-color: lightgray;">
                        <td><img src="https://img.icons8.com/ios-glyphs/90/000000/sleep.png" style="width: 10%;"/></td>
                        <td>Sleep time added.</td>
                        <td><i>7.4 hrs</i></td>
                    </tr>
                    <tr>
                        <td><img src="https://img.icons8.com/ios-glyphs/90/000000/water.png" style="width: 10%;"/></td>
                        <td>New record, over 4 liters water.</td>
                        <td><i>4.1 liters</i></td>
                    </tr>
                    <tr style="background-color: lightgray;">
                        <td><img src="https://img.icons8.com/ios-filled/100/000000/flex-biceps.png" style="width: 10%;"/></td>
                        <td>Lift minutes added.</td>
                        <td><i>42 mins</i></td>
                    </tr>
                    <tr>
                        <td><img src="https://img.icons8.com/fluency-systems-filled/96/000000/healthy-food-calories-calculator.png" style="width: 10%;"/></td>
                        <td>Food calories added.</td>
                        <td><i>867 calories</i></td>
                    </tr>
                    <tr style="background-color: lightgray;">
                        <td><img src="https://img.icons8.com/ios-filled/100/000000/flex-biceps.png" style="width: 10%;"/></td>
                        <td>Lift minutes added.</td>
                        <td><i>35 mins</i></td>
                    </tr>
                    <tr>
                        <td><img src="https://img.icons8.com/ios-filled/100/000000/running.png" style="width: 10%;"/></td>
                        <td>New steps added.</td>
                        <td><i>3,841 steps</i></td>
                    </tr>
                </table>
            </div>
            
            <div style="padding: 20px;">
                <h5>General Trends</h5>
                <p>Steps taken</p>
                <div style="color: black; background-color: gray; height: 40px; border-radius: 12px;">
                    <div style="width:25%; color: white; background-color: green; padding: 8px 16px; text-align: center; height: 40px; border-radius: 12px;">+25%</div>
                </div>

                <p>Lift minutes</p>
                <div style="color: black; background-color: gray; height: 40px; border-radius: 12px;">
                    <div style="width:50%; color: white; background-color: orange; padding: 8px 16px; text-align: center; height: 40px; border-radius: 12px;">+50%</div>
                </div>

                <p>Calorie intake</p>
                <div style="color: black; background-color: gray; height: 40px; border-radius: 12px;">
                    <div style="width:75%; color: white; background-color: red; padding: 8px 16px; text-align: center; height: 40px; border-radius: 12px;">+75%</div>
                </div>
            </div>

            <div style="padding: 20px;">
                <h5>More Trends</h5>
                <table style="width: 50%;">
                    <tbody>
                    <tr>
                    <td>&nbsp;Sleep</td>
                    <td>&nbsp;-9.7%</td>
                    </tr>
                    <tr style="background-color: lightgray;">
                    <td>&nbsp;Water intake</td>
                    <td>&nbsp;+21.2%</td>
                    </tr>
                    <tr>
                    <td>&nbsp;Heart rate</td>
                    <td>&nbsp;+5.6%</td>
                    </tr>
                    <tr style="background-color: lightgray;">
                    <td>&nbsp;Distance moved</td>
                    <td>&nbsp;+15.5%</td>
                    </tr>
                    <tr>
                    <td>&nbsp;Floors walked</td>
                    <td>&nbsp;+7.1%</td>
                    </tr>
                    <tr style="background-color: lightgray;">
                    <td>&nbsp;Weight</td>
                    <td>&nbsp;+10.3%</td>
                    </tr>
                    </tbody>
                    </table>
            </div>
            <br>  
        <script>
            function openTab(tabName) {
                    var i, x;
                    x = document.getElementsByClassName("containerTab");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    document.getElementById(tabName).style.display = "block";
                }
        </script>
    </body>
</html>