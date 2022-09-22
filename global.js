if(typeof isMobile == 'undefined')
{
  isMobile = window.matchMedia("only screen and (max-width: 480px)").matches;
}

if(localStorage.getItem("mode") == "dark"){
  document.body.classList.toggle("darkmode");
}

function darkMode() {
  document.body.classList.toggle("darkmode");
  if(localStorage.getItem("mode") == "dark") {
    localStorage.setItem("mode", "light");
  }
  else {
    localStorage.setItem("mode", "dark");
  }
}

if (isMobile) {
  var navs = document.getElementById("navs");

  navs.classList.add("unsticky");

  window.onscroll = function() {navSticky()};


  var sticky = navs.offsetTop;
}

function navSticky() {
  if (window.pageYOffset >= sticky) {
    navs.classList.remove("unsticky");
    navs.classList.add("sticky");
  }
  else {
    navs.classList.remove("sticky");
    navs.classList.add("unsticky");
  }
}