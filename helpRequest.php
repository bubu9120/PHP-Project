<?php

session_start();

$error_gender = "";
$error_name_first = "";
$error_name_last = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["next"])) {
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $hasError = false;

    if (isset($_POST["gender"])) {
        $_SESSION["gender"] = htmlspecialchars($_POST["gender"]);
    } else {
        $error_gender = "Bitte wählen Sie eine Anrede aus.";
        $hasError = true;
    }

    if (strlen($_POST["name-first"]) > 1 && strlen($_POST["name-first"]) <= 50) {
        $_SESSION["name-first"] = htmlspecialchars(trim($_POST["name-first"]));
    } else {
        $error_name_first = "Bitte geben Sie einen Vornamen (mit 2 bis 50 Zeichen) ein.";
        $hasError = true;
    }

    if (strlen($_POST["name-last"]) > 1 && strlen($_POST["name-last"]) <= 50) {
        $_SESSION["name-last"] = htmlspecialchars(trim($_POST["name-last"]));
    } else {
        $error_name_last = "Bitte geben Sie einen Nachnamen (mit 2 bis 50 Zeichen) ein.";
        $hasError = true;
    }

    if (!$hasError) {
        header('Location: ./step-2.php');
        exit();
    }
}
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
    <div id="banner-no-image">
        <form method="post" action="">
            <h1 class="hellotext">We help you to find your <br>right device!</h1>
            <fieldset id="helprequest-forms">
                <h2>Help request.</h2>
                <p>Please fill the form. We will contact you as soon as possible.</p>
                <p>
                    <input type="radio" name="gender" id="male" value="Herr" required <?= isset($_SESSION["gender"]) && $_SESSION["gender"] == "Herr" ? "checked" : ""; ?>>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Frau" required <?= isset($_SESSION["gender"]) && $_SESSION["gender"] == "Frau" ? "checked" : ""; ?>>
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="nonbinary" value="nicht-binär" required <?= isset($_SESSION["gender"]) && $_SESSION["gender"] == "nicht-binär" ? "checked" : ""; ?>>
                    <label for="nonbinary">non binary</label>
                    <span class="error-text"><?= $error_gender ?? ""; ?></span>
                </p>
                <p>
                    <label for="name-first">First Name</label><br />
                    <input type="text" id="name-first" name="name-first" minlength="2" maxlength="30" value="<?= $_SESSION["name-first"] ?? ""; ?>">
                    <span class="error-text"><?= $error_name_first ?? ""; ?></span>
                </p>
                <p>
                    <label for="name-last">Last Name</label><br />
                    <input type="text" id="name-last" name="name-last" minlength="2" maxlength="30" value="<?= $_SESSION["name-last"] ?? ""; ?>">
                    <span class="error-text"><?= $error_name_last ?? ""; ?></span>
                </p>
                <p>
                <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
</p>
<p>
        <label for="appointment_date">Date of Appointment:</label><br>
        <input type="date" id="appointment_date" name="appointment_date" required><br><br>
</p>
        <label for="appointment_time">Time of Appointment:</label><br>
        <input type="time" id="appointment_time" name="appointment_time" required><br><br>
<p>
        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone" pattern="([0-9]{10}|[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2})" required><br>

                </p>
                <p>
                    <br />
                    <input name="next" type="submit" value="request help" />
                </p>
            </fieldset>
        </form>
    </div>
    <progress class="progress progress1" max="10" value="8"></progress>
    <div id="banner-bottom">

        <button id="start-hr">
            <h3>check your device</h3>
            <img src="img/gesture-next.svg" alt="" />
        </button>
    </div>

    <?php include "footer.php" ?>
</body>

</html>