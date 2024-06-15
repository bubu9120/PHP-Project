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


        if (isset($_POST['send'])) {
            header('Location: lastpage.php');
        }
        exit();
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/Logo.svg" type="image/x-icon" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/stylesheet.css">
</head>

<body>
    <div id="banner-no-image" class="requestdiv">
        <form method="post" action="">
            <h1 class="hellotext">We help you to find your <br>right device!</h1>
            <fieldset id="helprequest-forms">
                <h1>Help request.</h1>
                <br>
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
                    <label for="agb">I'm OK with the AGB's</label>
                    <input type="checkbox" id="agb" name="agb">
                </p>

                <!-- <label for="send">
                    <input type="submit" name="send" value="Request Help" id="requestsubmit">
                    <img src="img/redo.svg" alt="redo">
                </label> -->
            </fieldset>

    </div>
    <progress class="progress progress1" max="10" value="8"></progress>

    <div id="banner-bottom">
        <div class="backandforward">
            <button id="back" onclick="window.location.href = 'yourdevice.php';">
                <img src="img/back.svg" alt="back" />
                <h3>Your Device</h3>
            </button>
            <button id="next" name="send" value="send Request">
                <h3>send Request</h3>
                <img src="img/next.svg" alt="next" />
            </button>
        </div>
    </div>
    </form>

    <?php include "footer.php"; ?>
</body>

</html>