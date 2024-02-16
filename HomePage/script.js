document.addEventListener("DOMContentLoaded", function () {
    const imgList = document.getElementById("img-list");
    const btnSlides = document.querySelectorAll(".btn-slide");

    let currentSlide = 0;

    function showSlide(index) {
        imgList.style.transform = `translateX(-${index * 100}%)`;
        currentSlide = index;
    }

    function slideImg(index) {
        showSlide(currentSlide + index);
    }

    btnSlides.forEach(function (btn, index) {
        btn.addEventListener("click", function () {
            slideImg(index);
        });
    });

    // Automatic slideshow
    setInterval(function () {
        slideImg(1);
    }, 3000); // Change slide every 3 seconds (adjust as needed)
});
