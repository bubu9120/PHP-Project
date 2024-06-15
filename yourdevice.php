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
$qone = $responses['qone'];
$qtwo = $responses['qtwo'];
$qthree = $responses['qthree'];
$qfour = $responses['qfour'];
$qfive = $responses['qfive'];
$qsix = $responses['qsix'];


if (isset($_POST['jumpToStart'])) {
  header('Location: index.html');
  session_destroy();
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="img/Logo.svg" type="image/x-icon" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/overview.css">
</head>

<body>

  <div id="banner-no-image-swipe">
    <form method="post" action="">
      <h1 class="hellotext">We help you to find your <br>right device!</h1>
      <fieldset id="overview-forms">

        <div class="container macbook">
          <h1 class="card__title">MacBook Pro</h1><br>
          <p>Your perfect fit based on your awnsers is a <strong>MacBook Pro 16</strong></p>
          <br>
          <br>
          <img class="imageYourDevice" src="img/macbookpro.png" alt="macbookpro">
        </div>
        <div class="container dell">
          <h1 class="card__title">Dell XPS 17</h1><br>
          <p>Your perfect fit based on your awnsers is a <strong>Dell XPS 17</strong></p>
          <br>
          <br>
          <img class="imageYourDevice" src="img/dellxps17.png" alt="macbookpro">
        </div>
        <div class="container surface">
          <h1 class="card__title">Suface Pro 9</h1><br>
          <p>Your perfect fit based on your awnsers is a <strong>Microsoft Surface Pro 9</strong></p>
          <br>
          <br>
          <img class="imageYourDevice" src="img/surfacepro9.png" alt="macbookpro">
        </div>

      </fieldset>


  </div>


  <progress class="progress progress1" max="10" value="10"></progress>
  <div id="banner-bottom">
    <button id="start-hr" name="jumpToStart">
      <h3>Jump to start</h3>
      <img src="img/gesture-next.svg" alt="" />
    </button>

  </div>
  </form>

  <!-- <div class="backandforward">
    <button id="back" name="back">
      <img src="img/back.svg" alt="back" />
      <h3>back</h3>
    </button>
    <button id="next" name="next">
      <h3>next</h3>
      <img src="img/next.svg" alt="next" />
    </button>
  </div> -->


  </div>
  <?php include "footer.php" ?>

</body>

</html>
<script>
  const qone = <?php echo json_encode($qone); ?>;
  const qtwo = <?php echo json_encode($qtwo); ?>;
  const qthree = <?php echo json_encode($qthree); ?>;
  const qfour = <?php echo json_encode($qfour); ?>;
  const qfive = <?php echo json_encode($qfive); ?>;
  const qsix = <?php echo json_encode($qsix); ?>;

  document.addEventListener('DOMContentLoaded', function() {
    const elementsToRemove = document.querySelectorAll('.macbook, .dell, .surface');
    elementsToRemove.forEach(function(element) {

      if (qone == "yes" && qfour == "yes") {
        element.classList.remove('macbook');
      } else if (qtwo == "yes" && qfour == "no" || qone == "yes" && qfour == "no") {
        element.classList.remove('dell');
      } else {
        element.classList.remove('surface');
      }

    });
  });

  if (qone = "yes") {

  }
</script>