<?php

session_start();




?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <!--     <?php include "header.php" ?> -->
  
  


    <div id="banner-no-image-swipe">
    <form method="post" action="">
      <h1 class="hellotext">We help you to find your <br>right device!</h1>
      
      <fieldset>
        <div class="marginleft">
      <h2>Thanks for your help request!</h2>
        <br>
        <h3>Your request with your answers have been recieved. </h3>
        <br>
        <form method="post" action="lastpage.php">
      

            <table id="input">
               <p> Your answers: </p>
               
                    <td>Gender</td>
                    <td><?= $_SESSION["gender"]; ?></td>
                </tr>
                <tr>
                    <td>First name</td>
                    <td><?= $_SESSION["name-first"]; ?></td>
                </tr>
                <tr>
                    <td>Last name</td>
                    <td><?= $_SESSION["name-last"]; ?></td>
                </tr>
                <tr>
                    <td>Appointment Date</td>
                    <td><?= $_SESSION["appointment_date"]; ?></td>
                </tr>
                <tr>
                    <td>Appointment time</td>
                    <td><?= $_SESSION["appointment_time"]; ?></td>
                </tr>
                <tr>
                    <td>Email address</td>
                    <td><?= $_SESSION["email"]; ?></td>
                </tr>
                <tr>
                <td>Phone number</td>
                <td><?= $_SESSION["phone"]; ?></td>
                </tr>
                <tr>
            </table>
            </div>
      </fieldset>


  </div>


  <progress class="progress progress1" max="10" value="10"></progress>
  <div id="banner-bottom">
    <button id="start-hr" name="jumpToStart">
      <h3>Jump to start</h3>
      <img src="img/gesture-next.svg" alt="" />
    </button>

  </div>
  </form>

    <?php include "footer.php" ?>
</body>

</html>