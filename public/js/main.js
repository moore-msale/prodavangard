
function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

animateValue("about_positions_number", 0, 560, 3000);
animateValue("about_clients_number", 0, 2000, 2000);
animateValue("about_manu_number", 0, 5, 5000);
animateValue("about_years_number", 0, 10, 5000);
animateValue("about_french_number", 0, 4, 5000);
///////////////////////////////////////////

// $("#about_french_number").mouseover(function(){
//   $(".dropdown").css("display", "block");
// });




/////////////////////////////////////////
$("#news_link").click(function() {
    console.log('CLICk')
    $('html, body').animate({
        scrollTop: $("#nineth_page_inner").offset().top-100
    }, 1000);
});
// $("#about_link").click(function() {
//     console.log('CLICk')
//     $('html, body').animate({
//         scrollTop: $("#third_page").offset().top
//     }, 1000);
// });

$("#vendor_link").click(function() {
    console.log('CLICk')
    $('html, body').animate({
        scrollTop: $("#partners_container").offset().top-80
    }, 1000);
});

$('#carousel_main_page').carousel({
    interval:100000
})

$('#carousel_feedback').carousel({
    interval: 10000
})


$('#myCarousel').carousel({
    interval: 5000
})

$('#myCarousel .carousel-item').each(function() {
    
    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});


$('#myCarousel_2').carousel({
    interval: 10000
})

$('#myCarousel_2 .carousel-item').each(function() {
    
    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});

$( document ).ready(function() {
    var sub_id = $('.category_name').attr('sub_id');
    console.log(sub_id);
    $('#'+sub_id).addClass('show');

    $(function () {
      $(document).scroll(function () {
        var $nav = $(".fixed-top");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
      });
    });

});
