const imgs = document.querySelectorAll('.img-select a');
let imgId = 1;

imgs.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
        event.preventDefault();
        imgId = imgItem.dataset.id;
        slideImage();
    });
});   

function slideImage(){
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
}

const prev = document.querySelector('.prev');
const next = document.querySelector('.next');
const input = document.querySelector('#value-spinner')
prev?.addEventListener("click", () => {
    if (input.value < 2){
        input.value = 1;
    }
    else{
    input.value = input.value - 1;
    }
})
next?.addEventListener("click", () => {
    if (input.value > 99){
        input.value = 100;
    }
    else{
    input.value = ++input.value;
    }
})