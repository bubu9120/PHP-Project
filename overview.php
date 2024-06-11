<?php
session_start();

$error = "";
$message = "Are your looking for a new device for the first time? " . $_SESSION["qone"] . "\n";
$message .= "Question2 " . $_SESSION["qtwo"] . "\n";
$message .= "Question 3 " . $_SESSION["qtree"] . "\n";
$message .= "Question 4 " . $_SESSION["qfour"] . "\n";
$message .= "Question 5 " . $_SESSION["gfive"] . "\n";

$headers = "From:" . $from;
mail($to, $subject, $message, $headers);


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["next"])) {
    ini_set("display_errors", 1);
    error_reporting(E_ALL);
    $hasError = false;

    if (isset($_POST["qone"])) {
        $_SESSION["qone"] = htmlspecialchars($_POST["qone"]);
    } else {
        $error_qone = "Please swipe the card";
        $hasError = true;
    }



    for ($i = 1; $i <= 5; $i++) {
        if (isset($_POST["q$i"])) {
            $_SESSION["q$i"] = htmlspecialchars($_POST["q$i"]);
        } else {
            $hasError = true;
            ${"error_q$i"} = "Bitte beantworten Sie Frage $i.";
        }
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
    <!-- <?php include "header.php" ?> -->
    <div id="banner-no-image">
        <form method="post" action="">
            <h1 class="hellotext">We help you to find your <br>right device!</h1>
            <fieldset id="overview-forms">
                <h2>Overview</h2>
                <p>Please check your answers.</p>
                <br>
                <p>
                    <label for="qone">Are your looking for a new device for the first time?</label><br>
                    <input type="radio" name="qone" id="qonedef" value="def" required>
                    <label for="qonedef"></label>
                    <input type="radio" name="qone" id="qoneyes" value="yes" required>
                    <label for="qoneyes">Yes</label>
                    <input type="radio" name="qone" id="qoneno" value="no" required>
                    <label for="qoneno">No</label>
                </p>
                <br>
                <p>
                    <label for="qtwo">Creative or Administration?</label><br>
                    <input type="radio" name="qtwo" id="qtwodef" value="def" required>
                    <label for="qtwodef"></label>
                    <input type="radio" name="qtwo" id="qtwoyes" value="yes" required>
                    <label for="qtwoyes">Yes</label>
                    <input type="radio" name="qtwo" id="qtwono" value="no" required>
                    <label for="qtwono">No</label>
                </p>
                <br>
                <p>
                    <label for="qthree">Question 3</label><br>
                    <input type="radio" name="qthree" id="qthreedef" value="def" required>
                    <label for="qthreedef"></label>
                    <input type="radio" name="qthree" id="qthreeyes" value="yes" required>
                    <label for="qthreeyes">Yes</label>
                    <input type="radio" name="qthree" id="qthreeno" value="no" required>
                    <label for="qthreeno">No</label>
                </p>
                <br>
                <p>
                    <label for="qfour">Question 4</label><br>
                    <input type="radio" name="qfour" id="qfourdef" value="def" required>
                    <label for="qfourdef"></label>
                    <input type="radio" name="qfour" id="qfouryes" value="yes" required>
                    <label for="qfouryes"></label>
                    <input type="radio" name="qfour" id="qfourno" value="no" required>
                    <label for="qfourno"></label>
                </p>
                <br>
                <p>
                    <label for="qfive">Question 5</label><br>
                    <input type="radio" name="qfive" id="qfivedef" value="def" required>
                    <label for="qfivedef"></label>
                    <input type="radio" name="qfive" id="qfiveyes" value="yes" required>
                    <label for="qfiveyes">Yes</label>
                    <input type="radio" name="qfive" id="qfiveno" value="no" required>
                    <label for="qfiveno">No</label>
                </p>
                <p>
                    <br />
                    <input name="next" type="submit" value="Show Device" />
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