let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');
let toggle2 = document.querySelector('.toggle2')
let goToTop = document.querySelector('.go-to-top')
let toggle3 = document.querySelector('.toggle3')

toggle3.addEventListener('click', function() {
    body.classList.toggle('switchLang')
})

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
})

toggle2.addEventListener('click', function() {
    body.classList.toggle('dark-thema')
})

goToTop.addEventListener('click', function() {
    document.body.scrollTop = 0
    document.documentElement.scrollTop = 0 
    window.scrollTo({
        behavior: "smooth"
    })
})
