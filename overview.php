
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
            <fieldset id="overview-forms">
                <h2>Overview</h2>
                <p>Please check your answers.</p>
                <br>
                <p>
                <label for="qone">Question 1</label><br>
                    <input type="radio" name="qone" id="qoneyes" value="yes" required 
                    <label for="qoneyes">Yes</label>
                    <input type="radio" name="qone" id="qoneno" value="no" required 
                    <label for="qoneno">No</label>
                  
                </p>
                <br>
                <p>
                <label for="qtwo">Question 2</label><br>
                    <input type="radio" name="two" id="qtwoyes" value="yes" required 
                    <label for="qtwoyes">Yes</label>
                    <input type="radio" name="qtwo" id="qtwono" value="no" required 
                    <label for="qtwono">No</label>
                  
                </p>
                <br>
                <p>
                <label for="qthree">Question 3</label><br>
                    <input type="radio" name="three" id="qthreeyes" value="yes" required 
                    <label for="qthreeyes">Yes</label>
                    <input type="radio" name="qthree" id="qthreeno" value="no" required 
                    <label for="qthreeno">No</label>
                  
                </p>
                <br>
                <p>
                <label for="qfour">Question 4</label><br>
                    <input type="radio" name="four" id="qfouryes" value="yes" required 
                    <label for="qfouryes">Yes</label>
                    <input type="radio" name="qfour" id="qfourno" value="no" required 
                    <label for="qfourno">No</label>
                  
                </p>
                <br>
                <p>
                <label for="qfive">Question 5</label><br>
                    <input type="radio" name="five" id="qfiveyes" value="yes" required 
                    <label for="qfiveyes">Yes</label>
                    <input type="radio" name="qfive" id="qfiveno" value="no" required 
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