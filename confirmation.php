<?php

session_start();

$message = "Anrede: " . $_SESSION["gender"] . "\n";
$message .= "Vorname: " . $_SESSION["name-first"] . "\n";
$message .= "Nachname: " . $_SESSION["name-last"] . "\n";
$message .= "Strasse: " . $_SESSION["address"] . "\n";
$message .= "E-Mail: " . $_SESSION["email"] . "\n";
$message .= "Telefonnummer: " . $_SESSION["phone-number"] . "\n";
$message .= "Geburtsdatum: " . $_SESSION["date-of-birth"] . "\n";

$headers = "From:" . $from;
mail($to, $subject, $message, $headers);

session_destroy();

?>


<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <?php include "header.php" ?>

    <form method="post" action="">
        <fieldset id="confirmation">
            <h2>Benutzerkonto erfolgreich erstellt!</h2>

            <table id="input">
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
                    <td>Date of birth</td>
                    <td><?= $_SESSION["date-of-birth"]; ?></td>
                </tr>
                <tr>
                    <td>Email address</td>
                    <td><?= $_SESSION["email"]; ?></td>
                </tr>
                <tr>
                    <td>Phone number</td>
                    <td><?= $_SESSION["phone-number"]; ?></td>
                </tr>
            </table>

            <p>
                <a href="index.php">Start again</a>
            </p>

        </fieldset>
    </form>
    </div>

    <?php include "footer.php" ?>
</body>

</html>