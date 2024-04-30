<?php

session_start();

$error_address = "";
$error_zip = "";
$error_city = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["next"])) {
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $hasError = false;

    if (strlen($_POST["address"]) > 1 && strlen($_POST["address"]) < 100) {
        $_SESSION["address"] = htmlspecialchars(trim($_POST["address"]));
    } else {
        $error_address = "Bitte geben Sie die Adresse ein.";
        $hasError = true;
    }

    if (strlen($_POST["zip"]) == 4) {
        $_SESSION["zip"] = htmlspecialchars($_POST["zip"]);
    } else {
        $error_zip = "Bitte geben Sie eine vierstellige Postleitzahl ein.";
        $hasError = true;
    }

    if (strlen($_POST["city"]) > 1 && strlen($_POST["city"]) < 100) {
        $_SESSION["city"] = htmlspecialchars(trim($_POST["city"]));
    } else {
        $error_city = "Bitte geben Sie den Ort ein.";
        $hasError = true;
    }

    if (!$hasError) {
        header('Location: ./step-3.php');
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
        <fieldset id="step-2">
            <div class="formContent">
                <h2>2 - Adresse</h2>
                <p>
                    <label for="address">Adresse</label><br />
                    <input type="text" id="address" name="address" minlength="2" maxlength="99" value="<?= $_SESSION["address"] ?? ""; ?>" autofocus>
                    <span class="error-text"><?= $error_address ?? ""; ?></span>
                </p>
                <p>
                    <label for="zip">PLZ</label><br />
                    <input type="number" id="zip" name="zip" min="1000" max="9999" value="<?= $_SESSION["zip"] ?? ""; ?>">
                    <span class="error-text"><?= $error_zip ?? ""; ?></span>
                </p>
                <p>
                    <label for="city">Ort</label><br />
                    <input type="text" id="city" name="city" minlength="2" maxlength="99" value="<?= $_SESSION["city"] ?? ""; ?>">
                    <span class="error-text"><?= $error_city ?? ""; ?></span>
                </p>
                <p>
                    <br />
                    <input type="submit" name="next" value="Weiter" />
                    <input type="submit" name="previous" value="Zurück" formaction="./index.php" class="back-button">
                </p>
            </div>
        </fieldset>
    </form>
    </div>

    <?php include "footer.php" ?>
</body>

</html>