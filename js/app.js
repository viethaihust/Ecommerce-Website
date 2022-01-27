document.querySelector('.category-all').addEventListener('click', () => {
    document.querySelector('.category-menu').classList.toggle('active')
})

/*Product Slider*/
const slideContainer = document.querySelectorAll(".product-card");

for(let i=0; i<slideContainer.length; i++){
    const slider = function(){
        const banneritems = slideContainer[i].querySelectorAll(".banner-item");
        const hoveritems = slideContainer[i].querySelectorAll(".hover-item");
        const slideiconbelows = slideContainer[i].querySelectorAll(".slide-icon-below");

        var slideNum = 0;
        var manual = function(slideNum) {
            slideiconbelows.forEach((slideiconbelow) => {
                slideiconbelow.classList.remove("active");
            banneritems.forEach((banneritem) => {
                banneritem.classList.remove("active");
            });
        });
            slideiconbelows[slideNum].classList.add("active");
            banneritems[slideNum].classList.add("active");
        }

        hoveritems.forEach((hoveritem, i) => {
            hoveritem.addEventListener("mouseover", () => {
                manual(i);
                slideNum = i;
            });
        });

    };
    slider();
};

/*Timer Function*/
var countDownDate = new Date("Feb 10, 2022 9:20:40").getTime();

var myfunc = setInterval(function() {

    var now = new Date().getTime();
    var timeleft = countDownDate - now;
    var days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
    var hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((timeleft % (1000 * 60)) / 1000);
    var i;

    var day = document.querySelectorAll("#days");
    var hour = document.querySelectorAll("#hours");
    var min = document.querySelectorAll("#mins");
    var sec = document.querySelectorAll("#secs");
    for (i = 0; i < day.length; i++) {
        day[i].innerHTML = days;
        hour[i].innerHTML = hours;
        min[i].innerHTML = minutes;
        sec[i].innerHTML = seconds;
    }
    
    if (timeleft < 0) {
        clearInterval(myfunc);

        for (i = 0; i < day.length; i++) {
            day[i].innerHTML = "0";
            hour[i].innerHTML = "0";
            min[i].innerHTML = "0";
            sec[i].innerHTML = "0";
        }
    }

}, 1000)


//Slide

const slider = document.querySelector(".slider");
const nextBtn = document.querySelector(".next-btn");
const prevBtn = document.querySelector(".prev-btn");
const slides = document.querySelectorAll(".slide");
const slideIcons = document.querySelectorAll(".slide-icon");
const numberOfSlides = slides.length;
var slideNumber = 0;
const countdown = document.querySelectorAll(".add-to-cart-button");

var manualNav = function(slideNumber) {
    slides.forEach((slide) => {
        slide.classList.remove("active");

    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
    });
});
    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
}

slideIcons.forEach((slideIcon, i) => {
    slideIcon.addEventListener("click", () => {
        manualNav(i);
        slideNumber = i;
    });
});

//image slider next button
nextBtn.addEventListener("click", () => {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
    });
    
    slideNumber++;
    
    if(slideNumber > (numberOfSlides - 1)){
        slideNumber = 0;
    }
    
    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
});

//image slider previous button
prevBtn.addEventListener("click", () => {
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
    });
    
    slideNumber--;
    
    if(slideNumber < 0){
        slideNumber = numberOfSlides - 1;
    }
    
    slides[slideNumber].classList.add("active");
    slideIcons[slideNumber].classList.add("active");
});
    
//image slider autoplay
var playSlider;
    
var repeater = () => {
    playSlider = setInterval(function(){
    slides.forEach((slide) => {
        slide.classList.remove("active");
    });
    slideIcons.forEach((slideIcon) => {
        slideIcon.classList.remove("active");
    });
    
    slideNumber++;
    
    if(slideNumber > (numberOfSlides - 1)){
        slideNumber = 0;
    }
    
slides[slideNumber].classList.add("active");
slideIcons[slideNumber].classList.add("active");
    }, 6000);
}
repeater();

//stop the image slider autoplay on mouseover
slider.addEventListener("mouseover", () => {
    clearInterval(playSlider);
});
    
//start the image slider autoplay again on mouseout
slider.addEventListener("mouseout", () => {
    repeater();
});

