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
    

    <div id="banner-no-image">

    <div class="allSwipe">
<!-- Question 1 -->

<div class="box1 box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Is it your first device?</h2>
                <p>Are you looking for a new device for the first time?</p>

                <img src="" alt="display of different devices">


<label class="radio-label yesRadio">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qone" value="yes">
</label>
<label class="radio-label noRadio">
  <img src="img2.png" alt="No">
  <input type="radio" name="qone" value="no">
</label>

            </div>
      
    </form>
</div>
  

<!-- Question 2 -->

<div class="box2 box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Do you leave the device primarily in one place?</h2>
                <p>Are you looking to work on the device on the go?</p>

                <img src="" alt="beschreibung des Bildes">


<label class="radio-label yesRadio">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qtwo" value="yes">
</label>
<label class="radio-label noRadio">
  <img src="img2.png" alt="No">
  <input type="radio" name="qtwo" value="no">
</label>

            </div>
      
    </form>
</div>



<!-- Question 3 -->

<div class="box3 box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Would you like to edit videos with the device?</h2>
                <p>Do you often work on video projects?</p>

                <img src="" alt="beschreibung des Bildes">


<label class="radio-label yesRadio">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qthree" value="yes">
</label>
<label class="radio-label noRadio">
  <img src="img2.png" alt="No">
  <input type="radio" name="qthree" value="no">
</label>

            </div>
      
    </form>
</div>

<!-- Question 4 -->

<div class="box4 box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Is your budget higher than 1700.- CHF?</h2>
                <p>Do you choose quality over budget?</p>

                <img src="" alt="beschreibung des Bildes">


<label class="radio-label yesRadio">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qfour" value="yes">
</label>
<label class="radio-label noRadio">
  <img src="img2.png" alt="No">
  <input type="radio" name="qfour" value="no">
</label>
          </div>
      
    </form>
</div>


<!-- Question 5 -->

<div class="box5 box">
    <form method="post" action="">
       
            <div class="formContent">
                <h2>Are your task mainly office tasks like mailing, word, edit small ecxel files?</h2>
                <p>Do you look for a Laptop just for office tasks?</p>

                <img src="" alt="beschreibung des Bildes">


<label class="radio-label yesRadio">
  <img src="img1.png" alt="Yes">
  <input type="radio" name="qfive" value="yes">
</label>
<label class="radio-label noRadio">
  <img src="img2.png" alt="No">
  <input type="radio" name="qfive" value="no">
</label>
            </div>
      
    </form>
</div>
</div>

</div>

    <?php include "footer.php" ?>



  </body>

</html>

<style>
*, *:before, *:after {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}


.allSwipe {
  width: 100vw;
  height: 100vh;
  overflow: hidden;
  display: flex;
  flex-direction: column;
  position: relative;
  opacity: 0;
  transition: opacity 0.1s ease-in-out;
}

.loaded.allSwipe {
  opacity: 1;
}

.formContent {
  flex-grow: 1;
  padding-top: 40px;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: flex-end;
  z-index: 1;
}

.formContent {
  display: inline-block;
  width: 90vw;
  max-width: 400px;
  height: 70vh;
  background: #FFFFFF;
  padding-bottom: 40px;
  border-radius: 8px;
  overflow: hidden;
  position: absolute;
  will-change: transform;
  transition: all 0.3s ease-in-out;
  cursor: -webkit-grab;
  cursor: -moz-grab;
  cursor: grab;
}

.moving.formContent {
  transition: none;
  cursor: -webkit-grabbing;
  cursor: -moz-grabbing;
  cursor: grabbing;
}

.formContent img {
  max-width: 100%;
  pointer-events: none;
}

.formContent h2 {
  margin-top: 32px;
  font-size: 32px;
  padding: 0 16px;
  pointer-events: none;
}

.formContent p {
  margin-top: 24px;
  font-size: 20px;
  padding: 0 16px;
  pointer-events: none;
}

.radio-label {
  flex: 0 0 100px;
  text-align: center;
  padding-top: 20px;
}

.radio-label {
  line-height: 60px;
  width: 60px;
  border: 0;
  background: #FFFFFF;
  display: inline-block;
  margin: 0 8px;
}

.radio-label i {
  font-size: 32px;
  vertical-align: middle;
}

</style>

<script>
  'use strict';

  let qContainer = document.querySelector('.allSwipe');
  let allCards = document.querySelectorAll('.box');
  let currentCardIndex = 0; // To keep track of the current card

  function initCards() {
    allCards.forEach(function(card, index) {
      card.style.zIndex = allCards.length - index;
      card.style.transform = 'scale(' + (20 - index) / 20 + ') translateY(-' + 30 * index + 'px)';
      card.style.opacity = (10 - index) / 10;
    });
    qContainer.classList.add('loaded');
  }

  function showNextCard() {
    if (currentCardIndex < allCards.length - 1) {
      let currentCard = allCards[currentCardIndex];
      let nextCard = allCards[currentCardIndex + 1];
      
      currentCard.style.display = 'none';
      nextCard.style.display = 'block';
      
      currentCardIndex++;
    } else {
      // Last card reached
      // Handle end of questions, you might want to redirect or show a message
      console.log("End of questions reached");
    }
  }

  // Hide all cards except the first one
  for (let i = 1; i < allCards.length; i++) {
    allCards[i].style.display = 'none';
  }

  // Initialize cards
  initCards();

  function handleSwipe(direction) {
    let currentCard = allCards[currentCardIndex];

    // Check if there are more cards to swipe
    if (currentCardIndex < allCards.length - 1) {
      currentCardIndex++;

      let nextCard = allCards[currentCardIndex];
      currentCard.classList.add('removed', 'moving');
      currentCard.style.transform = direction > 0 ? 'translate(' + document.body.clientWidth + 'px, -100px) rotate(-30deg)' : 'translate(-' + document.body.clientWidth + 'px, -100px) rotate(30deg)';
      initCards();

      setTimeout(() => {
        currentCard.classList.remove('moving');
        currentCard.style.transform = '';
      }, 300);
    } else {
      // Last card reached
      // Handle end of questions, you might want to redirect or show a message
      console.log("End of questions reached");
    }
  }

  function handleRadioChange(event) {
    let direction = event.target.value === 'yes' ? 1 : -1;
    handleSwipe(direction);
    showNextCard();
  }

  document.querySelectorAll('input[type="radio"]').forEach(radio => {
    radio.addEventListener('change', handleRadioChange);
  });

</script>
