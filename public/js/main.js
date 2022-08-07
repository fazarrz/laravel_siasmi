$(document).ready(function(){
    $("#slider-hero").owlCarousel({
        loop: true,
        nav: true,
        items : 1,
        dots: false,
        margin: 0,
        navText : [
            "<i class='fa-solid fa-angle-left'></i>",
            "<i class='fa-solid fa-angle-right'></i>"
        ],
        navContainer : "#slider-hero-nav",
    });
});

$(document).ready(function(){
    $("#dosen-pengajar").owlCarousel({
        loop: true,
        nav: true,
        items : 3,
        dots: false,
        margin: 10,
        navText : [
            "<i class='fa-solid fa-angle-left'></i>",
            "<i class='fa-solid fa-angle-right'></i>"
        ],
        navContainer : "#slider-tools-1",
    });
});


$(document).ready(function(){
    $("#grade-slider").owlCarousel({
        loop: true,
        nav: true,
        items : 2,
        dots: false,
        margin: 10,
        navText : [
            "<i class='fa-solid fa-angle-left'></i>",
            "<i class='fa-solid fa-angle-right'></i>"
        ],
        navContainer : "#slider-tools-2",
    });
});

$(document).ready(function(){
    $("#galeri-slider").owlCarousel({
        loop: true,
        nav: true,
        items : 3,
        dots: false,
        margin: 10,
        navText : [
            "<i class='fa-solid fa-angle-left'></i>",
            "<i class='fa-solid fa-angle-right'></i>"
        ],
        navContainer : "#slider-tools-3",
    });
});