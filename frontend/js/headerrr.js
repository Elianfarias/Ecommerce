var nav = document.getElementById("nav");
var menu = document.getElementById("enlaces");
var btn_enlaces = document.getElementsByClassName("btn-header");
var cerrado = true;
window.onscroll = function () {
  var scrolltop = window.scrollY;
  if (scrolltop <= 450) {
    nav.classList.remove = "nav2";
    nav.className = "nav1";
    nav.style.transition = "0.5s";
    menu.style.top = "90px";
    $("#contenedorBuscador").css({"top":"90px","transition":"0.5s"});
  } else {
    nav.classList.remove = "nav1";
    nav.className = "nav2";
    menu.style.top = "100px";
    $("#contenedorBuscador").css({"top":"100px","transition":"0.5s"});    
  }
  window.addEventListener('resize', function () {
    if (screen.width >= 1100) {
      cerrado = true;
      menu.style.removeProperty('overflow');
      menu.style.removeProperty('width');
    }
  });
};

$("#open").click(function () {
    $(".enlaces").toggle(900,function () {
      $(".enlaces").css({"width":"100%",
      "overflow":"auto"});
    });
  });
