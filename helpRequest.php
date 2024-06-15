<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formComplete = true;
    $error_messages = [];

    // Validate each field
    if (empty($_POST["gender"])) {
        $error_messages['gender'] = "Please select your gender";
        $formComplete = false;
    }
    
    if (strlen(trim($_POST["name-first"])) < 2 || strlen(trim($_POST["name-first"])) > 50) {
        $error_messages['name-first'] = "Please enter a valid first name (2-50 characters)";
        $formComplete = false;
    }
    
    if (strlen(trim($_POST["name-last"])) < 2 || strlen(trim($_POST["name-last"])) > 50) {
        $error_messages['name-last'] = "Please enter a valid last name (2-50 characters)";
        $formComplete = false;
    }
    
    if (empty($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $error_messages['email'] = "Please enter a valid email address";
        $formComplete = false;
    }
    
    if (empty($_POST["appointment_date"])) {
        $error_messages['appointment_date'] = "Please select an appointment date";
        $formComplete = false;
    }
    
    if (empty($_POST["appointment_time"])) {
        $error_messages['appointment_time'] = "Please select an appointment time";
        $formComplete = false;
    }
    
    if (empty($_POST["phone"])) {
        $error_messages['phone'] = "Please enter a phone number";
        $formComplete = false;
    }

    if ($formComplete) {
        // Store validated data in session
        $_SESSION['gender'] = htmlspecialchars($_POST["gender"]);
        $_SESSION['name-first'] = htmlspecialchars(trim($_POST["name-first"]));
        $_SESSION['name-last'] = htmlspecialchars(trim($_POST["name-last"]));
        $_SESSION['email'] = htmlspecialchars($_POST["email"]);
        $_SESSION['appointment_date'] = htmlspecialchars($_POST["appointment_date"]);
        $_SESSION['appointment_time'] = htmlspecialchars($_POST["appointment_time"]);
        $_SESSION['phone'] = htmlspecialchars($_POST["phone"]);

        // Redirect to next page
        header('Location: lastpage.php');
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
    <div id="banner-no-image">
        <form method="post" action="">
            <h1 class="hellotext">We help you to find your <br>right device!</h1>
            <fieldset id="helprequest-forms">
                <h2>Help request.</h2>
                <p>Please fill the form. We will contact you as soon as possible.</p>
                <p>
                    <input type="radio" name="gender" id="male" value="Herr" required <?= isset($_POST["gender"]) && $_POST["gender"] == "Herr" ? "checked" : ""; ?>>
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="Frau" required <?= isset($_POST["gender"]) && $_POST["gender"] == "Frau" ? "checked" : ""; ?>>
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="nonbinary" value="nicht-binär" required <?= isset($_POST["gender"]) && $_POST["gender"] == "nicht-binär" ? "checked" : ""; ?>>
                    <label for="nonbinary">non binary</label>
                    <span class="error-text"><?= $error_messages['gender'] ?? ""; ?></span>
                </p>
                <p>
                    <label for="name-first">First Name</label><br />
                    <input type="text" id="name-first" name="name-first" minlength="2" maxlength="50" value="<?= $_POST["name-first"] ?? ""; ?>">
                    <span class="error-text"><?= $error_messages['name-first'] ?? ""; ?></span>
                </p>
                <p>
                    <label for="name-last">Last Name</label><br />
                    <input type="text" id="name-last" name="name-last" minlength="2" maxlength="50" value="<?= $_POST["name-last"] ?? ""; ?>">
                    <span class="error-text"><?= $error_messages['name-last'] ?? ""; ?></span>
                </p>
                <p>
                    <label for="email">Email</label><br />
                    <input type="email" id="email" name="email" value="<?= $_POST["email"] ?? ""; ?>" required>
                    <span class="error-text"><?= $error_messages['email'] ?? ""; ?></span>
                </p>
                <p>
                    <label for="appointment_date">Date of Appointment</label><br />
                    <input type="date" id="appointment_date" name="appointment_date" value="<?= $_POST["appointment_date"] ?? ""; ?>" required>
                    <span class="error-text"><?= $error_messages['appointment_date'] ?? ""; ?></span>
                </p>
                <p>
                    <label for="appointment_time">Time of Appointment</label><br />
                    <input type="time" id="appointment_time" name="appointment_time" value="<?= $_POST["appointment_time"] ?? ""; ?>" required>
                    <span class="error-text"><?= $error_messages['appointment_time'] ?? ""; ?></span>
                </p>
                <p>
                    <label for="phone">Phone Number</label><br />
                    <input type="tel" id="phone" name="phone" pattern="([0-9]{10}|[0-9]{3} [0-9]{3} [0-9]{2} [0-9]{2})" value="<?= $_POST["phone"] ?? ""; ?>" required>
                    <span class="error-text"><?= $error_messages['phone'] ?? ""; ?></span>
                </p>
                <p>
                    <br />
                    <input type="submit" name="next" value="Request Help">
                </p>
            </fieldset>
        </form>
    </div>
    <progress class="progress progress1" max="10" value="8"></progress>
    <div id="banner-bottom">
        <button id="start-hr">
            <h3>Check Your Device</h3>
            <img src="img/gesture-next.svg" alt="" />
        </button>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>
