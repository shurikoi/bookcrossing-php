let x = document.querySelector(".x-close")
let open = document.querySelector(".share")
let overlay = document.querySelector(".overlay")

document.addEventListener("click", (e) => {
    if ([e.target, e.target.parentElement].includes(x) || [e.target, e.target.parentElement].includes(overlay)) 
        overlay.classList.add("hidden-upload")
    else if ([e.target, e.target.parentElement].includes(open)) 
        overlay.classList.toggle("hidden-upload")
        
})