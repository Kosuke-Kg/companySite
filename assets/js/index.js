"use strict";

var header = document.getElementById("headerArea");
var menuBtn = document.getElementById("menuBtn");
var headerNavArea = document.getElementById("headerNavArea");
window.addEventListener("scroll", function () {
  if (window.scrollY > 100) {
    header.classList.add("scroll");
  } else {
    header.classList.remove("scroll");
  }
});
menuBtn.addEventListener("click", function () {
  if (menuBtn.classList.contains("act")) {
    menuBtn.classList.remove("act");
    headerNavArea.classList.remove("act");
  } else {
    menuBtn.classList.add("act");
    headerNavArea.classList.add("act");
  }
});
//# sourceMappingURL=index.js.map