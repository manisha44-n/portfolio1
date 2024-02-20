// add class navbardark on navbar scroll
const header = document.querySelector('.navbar');


window.onscroll = function(){
    var top = window.scrollY;
    if(top >=100){
        header.classList.add('navbarDark');
    }
    else{
        header.classList.remove('navbarDark');

    }
}



// card slider
document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.card-slider');
    const cards = document.querySelectorAll('.card');
    let index = 0;

    setInterval(() => {
        index = (index + 1) % cards.length;
        updateSliderPosition();
    }, 3000); // Change the interval as needed

    function updateSliderPosition() {
        const offset = -index * cards[0].offsetWidth;
        slider.style.transform = `translateX(${offset}px)`;
    }
});

