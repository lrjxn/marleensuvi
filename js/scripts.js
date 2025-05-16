document.addEventListener("DOMContentLoaded", function () {
    // Initialize Splide carousel
    var splide = new Splide(".splide", {
        type: "loop",
        perPage: 1,
        speed: 1000,
        arrows: false,
        pagination: false,
    }).mount();

    // Add click event for left & right navigation
    document.querySelectorAll(".splide__slide").forEach((slide) => {
        slide.addEventListener("click", function (event) {
            var clickX = event.clientX;
            var slideWidth = this.offsetWidth;
            var middleX = slideWidth / 2;

            if (clickX < middleX) {
                splide.go("-1");
            } else {
                splide.go("+1");
            }
        });
    });
  
  window.addEventListener('scroll', function() {
    document.querySelectorAll('.sidebar-content').forEach(sidebar => {
        sidebar.style.transform = `translateY(-${window.scrollY}px)`;
    });
});



    document.querySelectorAll('.splide__slide img').forEach(img => console.log(img.src));
});
