<?php

session_start();

$error_email = "";
$error_phone_nr = "";
$error_date_of_birth = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["next"])) {
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $hasError = false;

    if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $_SESSION["email"] = htmlspecialchars(trim($_POST["email"]));
    } else {
        $error_email = "Bitte geben Sie eine E-Mail Adresse mit dem Format name@beispiel.org ein.";
        $hasError = true;
    }

    if (isset($_POST["phone-number"])) {
        $_SESSION["phone-number"] = htmlspecialchars($_POST["phone-number"]);
    } else {
        $error_phone_nr = "Bitte geben Sie eine Telefonnummer ein, die dem vorgegebenen Format entspricht.";
        $hasError = true;
    }

    if (isset($_POST["date-of-birth"])) {
        $_SESSION["date-of-birth"] = htmlspecialchars($_POST["date-of-birth"]);
    } else {
        $error_date_of_birth = "Bitte geben Sie das Geburtsdatum ein.";
        $hasError = true;
    }

    if (!$hasError) {
        header('Location: ./confirmation.php');
        exit();
    }
}
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
        <fieldset id="step-3">
            <h2>3 - Kontaktdaten</h2>
            <p>
                <label for="email">E-Mail</label><br />
                <input type="email" id="email" name="email" placeholder="email@example.com" value="<?= $_SESSION["email"] ?? ""; ?>">
                <span class="error-text"><?= $error_email ?? ""; ?></span>
            </p>
            <p>
                <label for="phone-number">Telefonnummer</label><br />
                <input type="tel" id="phone-number" name="phone-number" pattern="\+41 [0-9]{2} [0-9]{3} [0-9]{2} [0-9]{2}" placeholder="+41 79 777 22 22" value="<?= $_SESSION["phone-number"] ?? ""; ?>">
                <span class="error-text"><?= $error_phone_nr ?? ""; ?></span>
            </p>
            <p>
                <label for="date-of-birth">Geburtsdatum</label><br />
                <input type="date" id="date-of-birth" name="date-of-birth" value="<?= $_SESSION["date-of-birth"] ?? ""; ?>">
                <span class="error-text"><?= $error_date_of_birth ?? ""; ?></span>
            </p>
            <p>
                <br />
                <input type="submit" name="next" value="Benutzerkonto erstellen" />
                <input type="submit" name="previous" value="Zurück" formaction="./step-2.php" class="back-button">
            </p>
        </fieldset>
    </form>
    </div>

    <?php include "footer.php" ?>
</body>

</html>