$("#portfolio").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#portfolio-section").offset().top
    }, 2000);
});

$("#testimonials").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#testimonials-section").offset().top
    }, 2000);
});

$("#contact").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact-section").offset().top
    }, 2000);
});

$("#audit").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact-section").offset().top
    }, 2000);
});

$("#portfolio-bot").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#portfolio-section").offset().top
    }, 2000);
});

$("#testimonials-bot").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#testimonials-section").offset().top
    }, 2000);
});

$("#contact-bot").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact-section").offset().top
    }, 2000);
});

$("#audit-bot").click(function() {
    $([document.documentElement, document.body]).animate({
        scrollTop: $("#contact-section").offset().top
    }, 2000);
});

/* Open */
function openNav() {
    document.getElementById("myNav").style.height = "100%";
}

/* Close */
function closeNav() {
    document.getElementById("myNav").style.height = "0%";
}

$('#toggle-button').click(function() {
    $("#myNav").height = "100%";
    console.log('test');
});