var slides = document.querySelectorAll('.slide');
var btns = document.querySelectorAll('.btn');
let currentSlide = 1;

var manualNav = function(manual){
    slides.forEach((slide) => {
        slide.classList.remove('active');

        btns.forEach((btn) => {
            btn.classList.remove('active');
        });
    });

    slides[manual].classList.add('active');
    btns[manual].classList.add('active');
}

btns.forEach((btn, i) => {
    btn.addEventListener("click", () => {
        manualNav(i);
        currentSlide = i;
    });
});

var repeat = function(activeCLass){
    let active = document.getElementsByClassName('active');
    let i = 1; 

    var repeater = () => {
        setTimeout(function(){
            [...active].forEach((activeSlide) => {
                activeSlide.classList.remove('active');
            });

            slides[i].classList.add('active');
            btns[i].classList.add('active');
            i++;

            if(slides.length == i){
                i=0;
            }
            if(i >= slides.length){
                return;
            }
            repeater()
        }, 10000);
    }
    repeater();
}
repeat();


const secAnim = document.querySelectorAll('.section');

window.addEventListener('scroll', checkSec); 

function checkSec() {
    const triggerBottom = window.innerHeight / 5 * 4;

    secAnim.forEach(section => {
        const secTop = section.getBoundingClientRect().top;

        if (secTop < triggerBottom) {
            section.classList.add('show');
        } else {
            section.classList.remove('show');
        }
    });
}