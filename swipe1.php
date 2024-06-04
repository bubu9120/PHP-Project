<?php

session_start();

?>
<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <link rel="stylesheet" href="css/swipe.css">


</head>

<body>

  <div id="banner-no-image-swipe">
    <h1 class="hellotext">We help you to find your <br>right device!</h1>
    <!-- card1 -->
    <form action="process.php" method="post">
      <div class="card-cont">

        <div class="card">
          <div class="card__top brown">
            <h1 class="card_question">Is it your first device?</h1>
          </div>
          <p class="card__we">Are you looking for a new device for the first time?</p>
          <div class="card__img"><img src="img/SwipeCard1.svg" alt="bild"></div>
          <div class="card__skipcontainer">
            <div class="card__skipno">
              <input type="radio" id="qone" name="qone" value="no">
              <label for="no">
                <img src="img/undo.svg" alt="undo">
                <h4>no</h4>
              </label>
            </div>
            <div class="card__skipyes">
              <input type="radio" id="qone" name="qone" value="yes">
              <label for="yes">
                <h4>yes</h4>
                <img src="img/redo.svg" alt="redo">
              </label>
            </div>
          </div>
          <div class="card__choice m--reject"></div>
          <div class="card__choice m--like"></div>
          <div class="card__drag"></div>
          <input type="submit" value="Submit">
          <div>

          </div>
        </div>


        <!-- card2 -->
        <div class="card">
          <div class="card__top lime">
            <h1 class="card_question">Mobile or Station?</h1>
          </div>
          <p class="card__we">Are your looking for a new device for the first time?</p>
          <div class="card__img"><img src="img/SwipeCard1.svg" alt="bild"></div>
          <div class="card__skipcontainer">
            <div class="card__skipno">
              <img src="img/undo.svg" alt="undo">
              <h4>no</h4>
            </div>
            <div class="card__skipyes">
              <h4>yes</h4>
              <img src="img/redo.svg" alt="redo">
            </div>
          </div>
          <div class="card__choice m--reject"></div>
          <div class="card__choice m--like"></div>
          <div class="card__drag"></div>
        </div>

        <!-- card3 -->
        <div class="card">
          <div class="card__top cyan">
            <h1 class="card_question">Whats your price Range?</h1>
          </div>
          <p class="card__we">Are your looking for a new device for the first time?</p>
          <div class="card__img"><img src="img/SwipeCard1.svg" alt="bild"></div>
          <div class="card__skipcontainer">
            <div class="card__skipno">
              <img src="img/undo.svg" alt="undo">
              <h4>no</h4>
            </div>
            <div class="card__skipyes">
              <h4>yes</h4>
              <img src="img/redo.svg" alt="redo">
            </div>
          </div>
          <div class="card__choice m--reject"></div>
          <div class="card__choice m--like"></div>
          <div class="card__drag"></div>
        </div>

        <!-- card4 -->
        <div class="card">
          <div class="card__top indigo">
            <h1 class="card_question">Business or Private?</h1>
          </div>
          <p class="card__we">Are your looking for a new device for the first time?</p>
          <div class="card__img"><img src="img/SwipeCard1.svg" alt="bild"></div>
          <div class="card__skipcontainer">
            <div class="card__skipno">
              <img src="img/undo.svg" alt="undo">
              <h4>no</h4>
            </div>
            <div class="card__skipyes">
              <h4>yes</h4>
              <img src="img/redo.svg" alt="redo">
            </div>
          </div>
          <div class="card__choice m--reject"></div>
          <div class="card__choice m--like"></div>
          <div class="card__drag"></div>
        </div>
        <!-- card5 -->
        <div class="card">
          <div class="card__top indigo">
            <h1 class="card_question">Random Question?</h1>
          </div>
          <p class="card__we">Are your looking for a new device for the first time?</p>
          <div class="card__img"><img src="img/SwipeCard1.svg" alt="bild"></div>
          <div class="card__skipcontainer">
            <div class="card__skipno">
              <img src="img/undo.svg" alt="undo">
              <h4>no</h4>
            </div>
            <div class="card__skipyes">
              <h4>yes</h4>
              <img src="img/redo.svg" alt="redo">
            </div>
          </div>
          <div class="card__choice m--reject"></div>
          <div class="card__choice m--like"></div>
          <div class="card__drag"></div>
        </div>
        <!-- card6 -->
        <div class="card">
          <div class="card__top purple">
            <h1 class="card_question">Creative or Administration?</h1>
          </div>
          <p class="card__we">Are your looking for a new device for the first time?</p>
          <div class="card__img"><img src="img/SwipeCard1.svg" alt="bild"></div>
          <div class="card__skipcontainer">
            <div class="card__skipno">
              <img src="img/undo.svg" alt="undo">
              <h4>no</h4>
            </div>
            <div class="card__skipyes">
              <h4>yes</h4>
              <img src="img/redo.svg" alt="redo">
            </div>
          </div>
          <div class="card__choice m--reject"></div>
          <div class="card__choice m--like"></div>
          <div class="card__drag"></div>
        </div>

      </div>
    </form>
  </div>
  <progress class="progress progress1" max="10" value="8"></progress>
  <div id="banner-bottom">
    <div class="backandforward">
      <button id="back">
        <img src="img/back.svg" alt="back" />
        <h3>back</h3>
      </button>
      <button id="next">
        <h3>next</h3>
        <img src="img/next.svg" alt="next" />
      </button>
    </div>
  </div>
  <?php include "footer.php" ?>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="js/swipe.js"></script>

</body>

</html>


<style>

</style>
<!-- <!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles/style.css">
  <link rel="stylesheet" href="css/stylesheet.css">

<body>


  <div id="banner-no-image">


    <div class="allSwipe">

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
  <div id="banner-bottom">
    <button id="start">
      <h3>start evaluation</h3>
      <img src="img/gesture-double-tap.svg" alt="" />
    </button>
  </div>

  <?php include "footer.php" ?>



</body>

</html>

<style>
  *,
  *:before,
  *:after {
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
</script> -->