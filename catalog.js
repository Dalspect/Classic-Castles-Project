
    
function imgBlowUp() {
  var pBCollection = document.getElementsByClassName("pictbox");
  var l = pBCollection.length;
  for (var i = 0; i < l; i++) {
    var pict = pBCollection[i].nextElementSibling;
    var desc = pBCollection[i].nextElementSibling.nextElementSibling;
    var rect = pBCollection[i].getBoundingClientRect();
    if (rect.top < 170) {
      if (rect.left < 170) {
        pict.style.transformOrigin = "top left";
        desc.style.top = "150%";
        desc.style.left = "165%";
      } 
      else if (document.documentElement.clientWidth - rect.right < 170) {
        pict.style.transformOrigin = "top right";
        desc.style.top = "150%";
        desc.style.left = "-65%";
      } 
      else {
        pict.style.transformOrigin = "top";
        desc.style.top = "150%";
        desc.style.left = "50%";
      }
    } 
    else if (document.documentElement.clientHeight - rect.bottom < 170) {
      if (rect.left < 170) {
        pict.style.transformOrigin = "bottom left";
        desc.style.top = "-50%";
        desc.style.left = "165%";
      } 
      else if (document.documentElement.clientWidth - rect.right < 170) {
        pict.style.transformOrigin = "bottom right";
        desc.style.top = "-50%";
        desc.style.left = "-65%";
      } 
      else {
        pict.style.transformOrigin = "bottom";
        desc.style.top = "-50%";
        desc.style.left = "50%";
      }
    } 
    else if (rect.left < 170) {
      pict.style.transformOrigin = "left";
      desc.style.top = "50%";
      desc.style.left = "165%";
    } 
    else if (document.documentElement.clientWidth - rect.right < 170) {
      pict.style.transformOrigin = "right";
      desc.style.top = "50%";
      desc.style.left = "-65%";
    } 
    else {
      pict.style.transformOrigin = "center";
      desc.style.top = "50%";
      desc.style.left = "50%";
    }
  }

  var pCollection = document.getElementsByClassName("picture");
  l = pCollection.length;

  for (i = 0; i < l; i++) {
    pCollection[i].style.animation = "fade-in 1s " + 0.1 * i + "s forwards";
  }
}

window.onload = function() {
  let isMobile = window.matchMedia("only screen and (max-width: 480px)").matches;
  
  if (!isMobile) {
    var clicked = false;

    imgBlowUp();
    $(".pictbox").on("mouseenter", function() {
      $(this).siblings(".picture").css({"transform": "scale(3.4)",
                          "transition": "0.5s",
                          "z-index": 1});
    });
    $(".pictbox").on("mouseleave", function() {
      $(this).siblings(".picture").css({"transform": "none",
                          "transition": "all 0s ease 0s",
                          "z-index": "auto",
                          "filter": "none"});
      $(this).siblings(".desc").css("visibility", "hidden");
      clicked = false;
    });
  }
  
  $(".pictbox").on("click", function() {
    if(clicked == true)
    {
      $(this).siblings(".picture").css("filter", "none");
      $(this).siblings(".desc").css("visibility", "hidden");
      clicked = false;
    }
    else {
      $(this).siblings(".picture").css("filter", "brightness(40%)");
      $(this).siblings(".desc").css("visibility", "visible");
      clicked = true;
    }
  });
};

window.onresize = imgBlowUp;

window.onscroll = imgBlowUp;