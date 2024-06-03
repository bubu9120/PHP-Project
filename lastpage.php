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
  
    <div id="banner">
      <main class="index-text-container">
        <h1>Thanks for your help request!</h1>
        <br>
        <h3>Your request with your answers have been recieved. </h3>
        <br>
        <p>
          Contact:
        </p>
        <p>
    Swipe answers:
        </p>
      </main>
    </div>

    <?php include "footer.php" ?>
</body>

</html>