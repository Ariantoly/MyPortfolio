$(document).ready(function() {
    $('#toTopBtn').hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 50) {
            $('#toTopBtn').fadeIn();
        } else {
            $('#toTopBtn').fadeOut();
        }
    });

    $('#toTopBtn').click(function() {
        $("html, body").animate({
        scrollTop: 0
        }, 500);
        return false;
    });
});