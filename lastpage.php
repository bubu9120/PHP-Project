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
  
    <div id="banner">
      <main class="index-text-container">
        <h1>Thanks for your help request!</h1>
        <br>
        <h3>Your request with your answers have been recieved. </h3>
        <br>
        <form method="post" action="lastpage.php">
        <fieldset id="confirmation">
            <h2>Benutzerkonto erfolgreich erstellt!</h2>

            <table id="input">
               <p> Your answers: </p>
               <tr>
                    <td>Are your looking for a new device for the first time?</td>
                    <td><?= $_SESSION["qone"]; ?></td>
                </tr>
                <tr>
                    <td>Creative or Administration?</td>
                    <td><?= $_SESSION["qtwo"]; ?></td>
                </tr>

                <tr>
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

            <p>
                <a href="index.html">Start again</a>
            </p>

        </fieldset>
    </form>
      </main>
    </div>

    <?php include "footer.php" ?>
</body>

</html>