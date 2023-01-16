const header = document.getElementById("headerArea")
const menuBtn = document.getElementById("menuBtn")
const headerNavArea = document.getElementById("headerNavArea")

window.addEventListener("scroll", () => {
  if (window.scrollY > 100) {
    header.classList.add("scroll")
  } else {
    header.classList.remove("scroll")
  }
})

menuBtn.addEventListener("click", () => {
  if (menuBtn.classList.contains("act")) {
    menuBtn.classList.remove("act")
    headerNavArea.classList.remove("act")
  } else {
    menuBtn.classList.add("act")
    headerNavArea.classList.add("act")
  }
})

const worksSlider = document.getElementById("worksSlider")

if (worksSlider) {
  const worksSliderImgs = worksSlider.querySelectorAll(".img")
  const worksSliderBtnList = document.getElementById("worksSliderBtnList")
  const worksSliderButtons = worksSliderBtnList.querySelectorAll("input")
  let imgIndex = 0

  // 初期化
  worksSliderImgs[imgIndex].classList.add("act")
  worksSliderButtons[imgIndex].classList.add("act")

  const changeImg = () => {
    worksSliderImgs.forEach((e) => e.classList.remove("act"))
    worksSliderImgs[imgIndex].classList.add("act")

    worksSliderButtons.forEach((e) => e.classList.remove("act"))
    worksSliderButtons[imgIndex].classList.add("act")
  }

  // ボタンをクリックした時に画像が変わる処理
  worksSliderButtons.forEach((element) => {
    element.addEventListener("click", () => {
      imgIndex = [...worksSliderButtons].indexOf(element)
      changeImg()
    })
  })

  // 前後アイコンクリック時の処理
  const prevBtn = document.getElementById("prevBtn")
  prevBtn.addEventListener("click", () => {
    imgIndex = imgIndex === 0 ? worksSliderImgs.length - 1 : imgIndex - 1
    changeImg()
  })

  const nextBtn = document.getElementById("nextBtn")
  nextBtn.addEventListener("click", () => {
    imgIndex = imgIndex === worksSliderImgs.length - 1 ? 0 : imgIndex + 1
    changeImg()
  })
}
