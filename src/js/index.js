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
