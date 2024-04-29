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
</head>

<body>
    <?php include "header.php" ?>

    <form method="post" action="">
        <fieldset id="step-1">
            <h2>1 - Personalien</h2>
            <p>
                <input type="radio" name="gender" id="male" value="Herr" required <?= isset($_SESSION["gender"]) && $_SESSION["gender"] == "Herr" ? "checked" : ""; ?>>
                <label for="male">Herr</label>
                <input type="radio" name="gender" id="female" value="Frau" required <?= isset($_SESSION["gender"]) && $_SESSION["gender"] == "Frau" ? "checked" : ""; ?>>
                <label for="female">Frau</label>
                <input type="radio" name="gender" id="nonbinary" value="nicht-binär" required <?= isset($_SESSION["gender"]) && $_SESSION["gender"] == "nicht-binär" ? "checked" : ""; ?>>
                <label for="nonbinary">nicht-binär</label>
                <span class="error-text"><?= $error_gender ?? ""; ?></span>
            </p>
            <p>
                <label for="name-first">Vorname</label><br />
                <input type="text" id="name-first" name="name-first" minlength="2" maxlength="30" value="<?= $_SESSION["name-first"] ?? ""; ?>">
                <span class="error-text"><?= $error_name_first ?? ""; ?></span>
            </p>
            <p>
                <label for="name-last">Nachname</label><br />
                <input type="text" id="name-last" name="name-last" minlength="2" maxlength="30" value="<?= $_SESSION["name-last"] ?? ""; ?>">
                <span class="error-text"><?= $error_name_last ?? ""; ?></span>
            </p>
            <p>
                <br />
                <input name="next" type="submit" value="Weiter" />
            </p>
        </fieldset>
    </form>
    </div>

    <?php include "footer.php" ?>
</body>

</html>