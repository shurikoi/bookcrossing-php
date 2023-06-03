let userName = document.querySelector(".user-name")
let menu = document.querySelector(".menu-wrapper")

document.addEventListener("click", (e) => {
    if ([e.target, e.target.parentElement].includes(userName))
        menu.classList.toggle("hidden")
    else if (![...menu.querySelectorAll("*"), menu].includes(e.target))
        menu.classList.add("hidden")
    
})

window.addEventListener('scroll', function() {
    if (window.pageYOffset >= 120) {
        document.querySelector('.fixed-button').classList.add('show')
    }
    else
        document.querySelector('.fixed-button').classList.remove('show')

  });