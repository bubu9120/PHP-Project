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
    const elements = document.querySelectorAll(".alreadyBeenHere");
    if (pullDeltaX >= decisionVal) {
      if (elements.length > 0) {
        const lastElement = elements[elements.length - 1];

        lastElement.classList.remove("alreadyBeenHere");
      }

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
      if (elements.length > 0) {
        const lastElement = elements[elements.length - 1];

        lastElement.classList.remove("alreadyBeenHere");
      }
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
    const progressBar = document.querySelector(".progress1");
    const elements = document.querySelectorAll(".alreadyBeenHere");

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
    const element = document.querySelector(".below");
    const progressBar = document.querySelector(".progress1");

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
