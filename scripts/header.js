

window.addEventListener('scroll', function() {
    if (window.pageYOffset >= 120) {
        document.querySelector('.fixed-button').classList.add('show')
    }
    else
        document.querySelector('.fixed-button').classList.remove('show')

  });