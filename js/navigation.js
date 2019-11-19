$(function () {
    $('a[href^="#"]').on('click', function(event) {
        event.preventDefault();

        let menu = $(this).attr('href');
        let pos = $(menu).offset().top;

        $('html, body').animate({scrollTop: pos}, 1000);
    })
})

