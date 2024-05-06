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

<!-- Question 1 -->

<div class="box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Is it your first device?</h2>
                <p>Are you looking for a new device for the first time?</p>

                <img src="" alt="display of different devices">


<label class="radio-label">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qOne" value="yes">
</label>
<label class="radio-label">
  <img src="img2.png" alt="No">
  <input type="radio" name="qOne" value="no">
</label>

<br>

<button class="backButton">Back</button>
<button class="nextButton">Next</button>

            </div>
      
    </form>
</div>
  

<!-- Question 2 -->

<div class="box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Do you leave the device primarily in one place?</h2>
                <p>Are you looking to work on the device on the go?</p>

                <img src="" alt="beschreibung des Bildes">


<label class="radio-label">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qtwo" value="yes">
</label>
<label class="radio-label">
  <img src="img2.png" alt="No">
  <input type="radio" name="qtwo" value="no">
</label>

<br>

<button class="backButton">Back</button>
<button class="nextButton">Next</button>

            </div>
      
    </form>
</div>



<!-- Question 3 -->

<div class="box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Would you like to edit videos with the device?</h2>
                <p>Do you often work on video projects?</p>

                <img src="" alt="beschreibung des Bildes">


<label class="radio-label">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qthree" value="yes">
</label>
<label class="radio-label">
  <img src="img2.png" alt="No">
  <input type="radio" name="qthree" value="no">
</label>

<br>

<button class="backButton">Back</button>
<button class="nextButton">Next</button>

            </div>
      
    </form>
</div>

<!-- Question 4 -->

<div class="box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Is your budget higher than 1700.- CHF?</h2>
                <p>Do you choose quality over budget?</p>

                <img src="" alt="beschreibung des Bildes">


<label class="radio-label">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qfour" value="yes">
</label>
<label class="radio-label">
  <img src="img2.png" alt="No">
  <input type="radio" name="qfour" value="no">
</label>

<br>

<button class="backButton">Back</button>
<button class="nextButton">Next</button>

            </div>
      
    </form>
</div>


<!-- Question 5 -->

<div class="box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Are your task mainly office tasks like mailing, word, edit small ecxel files?</h2>
                <p>Do you look for a Laptop just for office tasks?</p>

                <img src="" alt="beschreibung des Bildes">


<label class="radio-label">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qfive" value="yes">
</label>
<label class="radio-label">
  <img src="img2.png" alt="No">
  <input type="radio" name="qfive" value="no">
</label>

<br>

<button class="backButton">Back</button>
<button class="nextButton">Next</button>

            </div>
      
    </form>
</div>


    <?php include "footer.php" ?>
</body>

</html>