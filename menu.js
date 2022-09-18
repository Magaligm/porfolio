$(document).ready(main);

var contador = 1;

function main() {
  $(".hide").click(function () {
    // $("nav").toggle();
  });
  if (contador == 1) {
    $("nav ul").animate({
      display: none,
    });
    contador = 0;
  } else {
    contador = 1;
    $("nav ul").animate({
      display: block,
    });
  }
}
