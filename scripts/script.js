'use strict'

const anchors = document.querySelectorAll('a.smth')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()
    
    const blockID = anchor.getAttribute('href')
    
    document.querySelector(blockID).scrollIntoView({
      behavior: 'smooth',
      block: 'start'
    })
  })
}

document.getElementById("second-page").onclick = function () {
    document.location = "secondpage.html";
}
document.getElementById("third-page").onclick = function () {
    document.location = "thirdpage.html";
}

const navLinks = document.querySelectorAll('.nav-item')
const menuToggle = document.getElementById('navbarCollapse')
const bsCollapse = new bootstrap.Collapse(menuToggle)
navLinks.forEach((l) => {
    l.addEventListener('click', () => { bsCollapse.toggle() })
})