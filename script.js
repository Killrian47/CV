let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');
let toggle2 = document.querySelector('.toggle2')

toggle.addEventListener('click', function() {
    body.classList.toggle('open');
})

toggle2.addEventListener('click', function() {
    body.classList.toggle('dark-thema')
})