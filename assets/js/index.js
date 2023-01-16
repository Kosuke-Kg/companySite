"use strict";

function _toConsumableArray(arr) { return _arrayWithoutHoles(arr) || _iterableToArray(arr) || _unsupportedIterableToArray(arr) || _nonIterableSpread(); }
function _nonIterableSpread() { throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); }
function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }
function _iterableToArray(iter) { if (typeof Symbol !== "undefined" && iter[Symbol.iterator] != null || iter["@@iterator"] != null) return Array.from(iter); }
function _arrayWithoutHoles(arr) { if (Array.isArray(arr)) return _arrayLikeToArray(arr); }
function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) arr2[i] = arr[i]; return arr2; }
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
var worksSlider = document.getElementById("worksSlider");
if (worksSlider) {
  var worksSliderImgs = worksSlider.querySelectorAll(".img");
  var worksSliderBtnList = document.getElementById("worksSliderBtnList");
  var worksSliderButtons = worksSliderBtnList.querySelectorAll("input");
  var imgIndex = 0;

  // 初期化
  worksSliderImgs[imgIndex].classList.add("act");
  worksSliderButtons[imgIndex].classList.add("act");
  var changeImg = function changeImg() {
    worksSliderImgs.forEach(function (e) {
      return e.classList.remove("act");
    });
    worksSliderImgs[imgIndex].classList.add("act");
    worksSliderButtons.forEach(function (e) {
      return e.classList.remove("act");
    });
    worksSliderButtons[imgIndex].classList.add("act");
  };

  // ボタンをクリックした時に画像が変わる処理
  worksSliderButtons.forEach(function (element) {
    element.addEventListener("click", function () {
      imgIndex = _toConsumableArray(worksSliderButtons).indexOf(element);
      changeImg();
    });
  });

  // 前後アイコンクリック時の処理
  var prevBtn = document.getElementById("prevBtn");
  prevBtn.addEventListener("click", function () {
    imgIndex = imgIndex === 0 ? worksSliderImgs.length - 1 : imgIndex - 1;
    changeImg();
  });
  var nextBtn = document.getElementById("nextBtn");
  nextBtn.addEventListener("click", function () {
    imgIndex = imgIndex === worksSliderImgs.length - 1 ? 0 : imgIndex + 1;
    changeImg();
  });
}
//# sourceMappingURL=index.js.map