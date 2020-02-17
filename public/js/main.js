
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
    interval:3000
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
