var nav = document.getElementById("nav");
var menu = document.getElementsByClassName("enlaces");
var btn_enlaces = document.getElementsByClassName("btn-header");
var cerrado = true;
window.onscroll = function () {
  var scrolltop = window.scrollY;
  if (scrolltop <= 450) {
    nav.classList.remove = "nav2";
    nav.className = "nav1";
    nav.style.transition = "0.5s";
    menu.style.top = "90px";
  } else {
    nav.classList.remove = "nav1";
    nav.className = "nav2";
    menu.style.top = "100px";
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
  $(".enlaces").css({"width":"100%",
  "overflow":"unset"});
    $(".enlaces").toggle(1000,function () {
  
    });
  });
