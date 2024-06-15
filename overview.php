<?php
session_start();

// Überprüfen, ob die Session-Daten vorhanden sind
if (isset($_SESSION['responses']) && !empty($_SESSION['responses'])) {
    $responses = $_SESSION['responses'];
} else {
    // Falls keine Daten in der Session vorhanden sind, zeige eine Nachricht an
    echo "Keine Daten in der Session gefunden.";
    exit();
}

function isChecked($sessionData, $question, $value)
{
    return isset($sessionData[$question]) && $sessionData[$question] === $value ? 'checked' : '';
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <link rel="stylesheet" href="css/overview.css">
</head>

<body>
    <!-- <?php include "header.php" ?> -->
    <div id="banner-no-image">
        <form method="post" action="">
            <h1 class="hellotext">We help you to find your <br>right device!</h1>
            <fieldset id="overview-forms">

                <div class="container">
                    <h1 class="card__title">Two steps left.</h1><br>
                    <p>Please check your Awnsers and chlick next for the last question.</p>
                    <div class="item">
                        <span class="label">Question 1:</span>
                        <div class="radio-group">
                            <input type="radio" name="qone" id="qoneno" value="no" <?= isChecked($responses, 'qone', 'no') ?> required>
                            <label for="qoneno">No</label>
                            <input type="radio" name="qone" id="qoneyes" value="yes" <?= isChecked($responses, 'qone', 'yes') ?> required>
                            <label for="qoneyes">Yes</label>
                        </div>
                    </div>
                    <div class="item">
                        <span class="label">Question 2:</span>
                        <div class="radio-group">
                            <input type="radio" name="qtwo" id="qtwono" value="no" <?= isChecked($responses, 'qtwo', 'no') ?> required>
                            <label for="qtwono">No</label>
                            <input type="radio" name="qtwo" id="qtwoyes" value="yes" <?= isChecked($responses, 'qtwo', 'yes') ?> required>
                            <label for="qtwoyes">Yes</label>
                        </div>
                    </div>
                    <div class="item">
                        <span class="label">Question 3:</span>
                        <div class="radio-group">
                            <input type="radio" name="qthree" id="qthreeno" value="no" <?= isChecked($responses, 'qthree', 'no') ?> required>
                            <label for="qthreeno">No</label>
                            <input type="radio" name="qthree" id="qthreeyes" value="yes" <?= isChecked($responses, 'qthree', 'yes') ?> required>
                            <label for="qthreeyes">Yes</label>
                        </div>
                    </div>
                    <div class="item">
                        <span class="label">Question 4:</span>
                        <div class="radio-group">
                            <input type="radio" name="qfour" id="qfourno" value="no" <?= isChecked($responses, 'qfour', 'no') ?> required>
                            <label for="qfourno">No</label>
                            <input type="radio" name="qfour" id="qfouryes" value="yes" <?= isChecked($responses, 'qfour', 'yes') ?> required>
                            <label for="qfouryes">Yes</label>
                        </div>
                    </div>
                    <div class="item">
                        <span class="label">Question 5:</span>
                        <div class="radio-group">
                            <input type="radio" name="qfive" id="qfiveno" value="no" <?= isChecked($responses, 'qfive', 'no') ?> required>
                            <label for="qfiveno">No</label>
                            <input type="radio" name="qfive" id="qfiveyes" value="yes" <?= isChecked($responses, 'qfive', 'yes') ?> required>
                            <label for="qfiveyes">Yes</label>
                        </div>
                    </div>
                    <div class="item">
                        <span class="label">Question 6:</span>
                        <div class="radio-group">
                            <input type="radio" name="qsix" id="qsixno" value="no" <?= isChecked($responses, 'qsix', 'no') ?> required>
                            <label for="qsixno">No</label>
                            <input type="radio" name="qsix" id="qsixyes" value="yes" <?= isChecked($responses, 'qsix', 'yes') ?> required>
                            <label for="qsixyes">Yes</label>
                        </div>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    <progress class="progress progress1" max="10" value="7"></progress>
    <div id="banner-bottom">
        <button id="start-hr">
            <h3>check your device</h3>
            <img src="img/gesture-next.svg" alt="" />
        </button>
    </div>

    <?php include "footer.php" ?>
</body>

</html>