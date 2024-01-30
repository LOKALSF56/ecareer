let currentIndex = 0;
const imgList = document.getElementById("img-list");
const totalImages = document.querySelectorAll(".img-list img").length;

function slideImg(index) {
    currentIndex = index;
    updateSlide();
}

function updateSlide() {
    const translateValue = -currentIndex * 100 + '%';
    imgList.style.transform = 'translateX(' + translateValue + ')';
}

setInterval(() => { 
    currentIndex = (currentIndex + 1) % totalImages; 
    updateSlide(); 
}, 3000);