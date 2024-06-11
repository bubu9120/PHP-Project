/* $(document).ready(function () {
  var animating = false;
  var cardsCounter = 0;
  var numOfCards = 6;
  var decisionVal = 80;
  var pullDeltaX = 0;
  var deg = 0;
  var $card, $cardReject, $cardLike;
  let frontCardId = 0;

  function pullChange() {
    animating = true;
    deg = pullDeltaX / 10;
    $card.css(
      "transform",
      "translateX(" + pullDeltaX + "px) rotate(" + deg + "deg)"
    );

    var opacity = pullDeltaX / 100;
    var rejectOpacity = opacity >= 0 ? 0 : Math.abs(opacity);
    var likeOpacity = opacity <= 0 ? 0 : opacity;
    $cardReject.css("opacity", rejectOpacity);
    $cardLike.css("opacity", likeOpacity);
  }

  function release() {
    if (pullDeltaX >= decisionVal) {
      $card.addClass("to-right");
      console.log("Yes");
      frontCardId += 1;
      console.log(frontCardId);
    } else if (pullDeltaX <= -decisionVal) {
      $card.addClass("to-left");
      console.log("No");
      frontCardId += 1;
      console.log(frontCardId);
    }

    if (Math.abs(pullDeltaX) >= decisionVal) {
      $card.addClass("inactive");

      setTimeout(function () {
        $card.addClass("below").removeClass("inactive to-left to-right");
        cardsCounter++;
        if (cardsCounter === numOfCards) {
          cardsCounter = 0;
          $(".card").removeClass("below");
        }
      }, 300);
    }

    if (Math.abs(pullDeltaX) < decisionVal) {
      $card.addClass("reset");
    }

    setTimeout(function () {
      $card
        .attr("style", "")
        .removeClass("reset")
        .find(".card__choice")
        .attr("style", "");

      pullDeltaX = 0;
      animating = false;
    }, 300);
  }

  $(document).on("mousedown touchstart", ".card:not(.inactive)", function (e) {
    if (animating) return;

    $card = $(this);
    $cardReject = $(".card__choice.m--reject", $card);
    $cardLike = $(".card__choice.m--like", $card);
    var startX = e.pageX || e.originalEvent.touches[0].pageX;

    $(document).on("mousemove touchmove", function (e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      pullDeltaX = x - startX;
      if (!pullDeltaX) return;
      pullChange();
    });

    $(document).on("mouseup touchend", function () {
      $(document).off("mousemove touchmove mouseup touchend");
      if (!pullDeltaX) return; // prevents from rapid click events
      release();
    });
  });
  $("#next").on("click", function () {
    if (animating) return;
    if (frontCardId < numOfCards - 1) {
      // Prüft, ob es noch weitere Karten gibt
      frontCardId += 1;
      $card = $(".card").eq(frontCardId);
      $cardReject = $(".card__choice.m--reject", $card);
      $cardLike = $(".card__choice.m--like", $card);
      $card.removeClass("below").attr("style", ""); // Macht die nächste Karte sichtbar
    } else {
      frontCardId = 0; // Wenn wir die letzte Karte erreichen, springen wir zurück zur ersten Karte
      $(".card").removeClass("below"); // Macht alle Karten sichtbar
    }
  });

  // Funktionalität für die "Zurück" Taste
  $("#back").on("click", function () {
    if (animating || frontCardId === 0) return;
    frontCardId -= 1;
    $card = $(".card").eq(frontCardId);
    $cardReject = $(".card__choice.m--reject", $card);
    $cardLike = $(".card__choice.m--like", $card);
    $card.removeClass("below").attr("style", ""); // Macht die vorherige Karte sichtbar
  });
});
/* 
function submitYes() {
  // Wählen Sie den Radiobutton mit dem Wert "yes" aus
  document.getElementById("qone_yes").checked = true;
  // Senden Sie das Formular
  document.getElementById("swipeForm").submit("yes");
}
function submitNo() {
  // Wählen Sie den Radiobutton mit dem Wert "yes" aus
  document.getElementById("qone_no").checked = true;
  // Senden Sie das Formular
  document.getElementById("swipeForm").submit("no");
} */

$(document).ready(function () {
  var animating = false;
  var cardsCounter = 0;
  var numOfCards = 6;
  var decisionVal = 80;
  var pullDeltaX = 0;
  var deg = 0;
  var $card, $cardReject, $cardLike;
  let frontCardId = 0;

  function pullChange() {
    animating = true;
    deg = pullDeltaX / 10;
    $card.css(
      "transform",
      "translateX(" + pullDeltaX + "px) rotate(" + deg + "deg)"
    );

    var opacity = pullDeltaX / 100;
    var rejectOpacity = opacity >= 0 ? 0 : Math.abs(opacity);
    var likeOpacity = opacity <= 0 ? 0 : opacity;
    $cardReject.css("opacity", rejectOpacity);
    $cardLike.css("opacity", likeOpacity);
  }

  function release() {
    if (pullDeltaX >= decisionVal) {
      $card.addClass("to-right");
      document.querySelector(
        `#${$card.find('input[type="radio"][value="yes"]').attr("id")}`
      ).checked = true;
      frontCardId += 1;
      console.log(frontCardId);
      if (frontCardId >= 6) {
        document.getElementById("swipeForm").submit();
      }
      updateProgressBar(frontCardId);
    } else if (pullDeltaX <= -decisionVal) {
      $card.addClass("to-left");
      document.querySelector(
        `#${$card.find('input[type="radio"][value="no"]').attr("id")}`
      ).checked = true;
      frontCardId += 1;
      console.log(frontCardId);
      if (frontCardId >= 6) {
        document.getElementById("swipeForm").submit();
      }
      updateProgressBar(frontCardId);
    }

    if (Math.abs(pullDeltaX) >= decisionVal) {
      $card.addClass("inactive");

      setTimeout(function () {
        $card.addClass("below").removeClass("inactive to-left to-right");
        cardsCounter++;
        if (cardsCounter === numOfCards) {
          cardsCounter = 0;
          $(".card").removeClass("below");
        }
      }, 300);
    }

    if (Math.abs(pullDeltaX) < decisionVal) {
      $card.addClass("reset");
    }

    setTimeout(function () {
      $card
        .attr("style", "")
        .removeClass("reset")
        .find(".card__choice")
        .attr("style", "");

      pullDeltaX = 0;
      animating = false;
    }, 300);
  }

  $(document).on("mousedown touchstart", ".card:not(.inactive)", function (e) {
    if (animating) return;

    $card = $(this);
    $cardReject = $(".card__choice.m--reject", $card);
    $cardLike = $(".card__choice.m--like", $card);
    var startX = e.pageX || e.originalEvent.touches[0].pageX;

    $(document).on("mousemove touchmove", function (e) {
      var x = e.pageX || e.originalEvent.touches[0].pageX;
      pullDeltaX = x - startX;
      if (!pullDeltaX) return;
      pullChange();
    });

    $(document).on("mouseup touchend", function () {
      $(document).off("mousemove touchmove mouseup touchend");
      if (!pullDeltaX) return; // prevents from rapid click events
      release();
    });
  });

  $("#next").on("click", function () {
    var element = document.querySelector(".alreadyBeenHere");
    var progressBar = document.querySelector(".progress1");

    var elements = document.querySelectorAll(".alreadyBeenHere");

    if (elements.length > 0) {
      var lastElement = elements[elements.length - 1];

      lastElement.classList.remove("alreadyBeenHere");
      lastElement.classList.add("below");
      frontCardId += 1;
      progressBar.value += 1;
      console.log(frontCardId);
    } else {
      return;
    }
  });

  $("#back").on("click", function () {
    // Select the first element with the class 'below'
    var element = document.querySelector(".below");
    var progressBar = document.querySelector(".progress1");
    // Check if the element exists and remove the class 'below'
    if (element) {
      element.classList.remove("below");
      element.classList.add("alreadyBeenHere");
      frontCardId -= 1;
      progressBar.value -= 1;
      console.log(frontCardId);
    } else {
      return;
    }
  });
});

function updateProgressBar(frontCardId) {
  frontCardIncrease = frontCardId;
  var progressBar = document.querySelector(".progress1");
  progressBar.value = frontCardIncrease; // Aktualisiere den Wert der Progressbar mit der neuen frontCardId
}
