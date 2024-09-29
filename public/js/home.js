jQuery(document).ready(function ($) {
    $(".slider-img").on("click", function () {
        $(".slider-img").removeClass("active");
        $(this).addClass("active");
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const sliderImages = document.querySelectorAll('.slider-img');
    sliderImages.forEach((img, index) => {
        setTimeout(() => {
            img.style.opacity = 1;
            img.style.animation = `slideFromTop 1s ease forwards`;
        }, index * 100); // Delay each slide slightly
    });
});