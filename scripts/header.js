let userName = document.querySelector(".user-name")
let menu = document.querySelector(".menu-wrapper")

const fixedBtn = document.querySelector('.fixed-button')

document.addEventListener("click", (e) => {
    if ([e.target, e.target.parentElement].includes(userName))
        menu.classList.toggle("hidden")
    else if (![...menu.querySelectorAll("*"), menu].includes(e.target))
        menu.classList.add("hidden")
    
})
if (fixedBtn)
    window.addEventListener('scroll', function() {
        if (window.pageYOffset >= 120) {
            fixedBtn.classList.add('show')
        }
        else
            fixedBtn.classList.remove('show')
    });