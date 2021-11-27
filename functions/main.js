//Progress bar animation

$(document).ready(function () {
  $(".progress .progress-bar").css("width", function () {
    return $(this).attr("aria-valuenow") + "%";
  });
});

function jumpScroll1() {
  window.scroll(0, 0);
}

function jumpScroll2() {
  window.scroll(0, 920);
}

function jumpScroll3() {
  window.scroll(0, 920 * 2);
}

function jumpScroll4() {
  window.scroll(0, 920 * 3);
}